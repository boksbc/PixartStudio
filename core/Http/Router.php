<?php

namespace Pixel\core\Http;

use Pixel\src\Exceptions\NoFoundException;

class Router
{
    public Request $request;
    public Response $response;
    public SiteController $siteController;
    public const API_PREFIX = 'api';
    private const METHOD_GET = 'GET';
    private const METHOD_POST = 'POST';
    private array $routes;
    private bool $active = false;
    private bool $PatternMatch = false;
    private string $baseRoute = '';

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->siteController = new SiteController();
    }

    public function get($path, $fn): void
    {
        $this->match(self::METHOD_GET, $path, $fn);
    }

    public function post($path, $fn): void
    {
        $this->match(self::METHOD_POST, $path, $fn);
    }

    public function group($prefix, $fn): void
    {
        $currentRoute = $this->baseRoute;
        $this->baseRoute .= $prefix;

        call_user_func($fn);
        $this->baseRoute = $currentRoute;

    }

    private function prefix(): string
    {
        if (self::API_PREFIX === Request::requestUri()[1]) {
            return "/" . self::API_PREFIX;
        }
        return "";
    }

    private function match($method, $path, $fn)
    {
        if(!$this->active) {
            $path = $this->prefix() . $this->baseRoute . '/' . trim($path, '/');
            $path = $this->baseRoute ? rtrim($path, '/') : $path;

            $this->routes[$method][$path] = [
                'method' => $method,
                'fn' => $fn
            ];
        }
    }

    public function staticPage($fn): void
    {
        $this->routes[self::METHOD_GET]["/"] = [
            'method' => self::METHOD_GET,
            'fn' => $fn
        ];
        $this->active = true;
    }


    private function patternMatch($routes, $uri, &$matches): bool
    {
        $pattern = preg_replace('~{(.*)}~mU', '(?<$1>\S+)', $routes);
        return boolval(preg_match('#^' . $pattern . '$#', $uri, $matches));
    }

    private function handler($routes)
    {
        $uri = $this->request->getPath();
        foreach ($routes as $route => $value) {
            $fn = $value['fn'];
            $isMatch = $this->patternMatch($route, $uri, $matches);
            $this->PatternMatch = boolval($isMatch);

            if ($isMatch) {
                if (!$matches) {
                    continue;
                }

                $matches = array_filter($matches, function ($key) {
                    return is_int($key) === false;
                }, ARRAY_FILTER_USE_KEY);

                if (is_callable($fn)) {
                    return $fn(...$matches);
                }
            }
        }
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $fn = $this->routes[$method][$path]['fn'] ?? false;
        $callback = $this->handler($this->routes[$method]);

        if ($this->staticPage($fn)) {
            return $this->siteController->render($fn);
        } else {

            if (is_string($fn)) {
                return $this->siteController->render($fn);
            }

            if (!is_array($fn) && $this->PatternMatch) {
                return $callback;
            }

            if (!$fn) {
                throw new NoFoundException();
            }

            foreach ($this->routes[$method] as $route => $value) {
                $isMatch = $this->patternMatch($route, $path, $matches);
                if (!$isMatch) {
                    continue;
                }

                $matches = array_filter($matches, function ($key) {
                    return is_int($key) === false;
                }, ARRAY_FILTER_USE_KEY);

                $this->request->setParams($matches);
                $fn = $value['fn'];
            }

            if (is_array($fn)) {
                $fn[0] = new $fn[0]();
            }

            return call_user_func_array($fn, [$this->request, $this->response]);

        }
    }

    public function run(): void
    {
        try {
            echo $this->resolve();
        } catch (\Exception $e) {
            $this->response->setStatusCode($e->getCode());
            echo $this->siteController->renderError('error', [
                'exception' => $e
            ]);

        }
    }
}