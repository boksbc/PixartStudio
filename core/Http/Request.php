<?php

namespace Pixel\core\Http;

class Request
{
    public array $params;


    public function getPath(): string
    {
        $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
        $parseUri = parse_url($requestUri);
        $path = $parseUri['path'];

        if($path !== '/') {
            $path = rtrim($path, '/');
        }

        return $path;
    }

    public function baseUrl(): string
    {
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $url = "https://";
        } else {
            $url = "http://";
        }
        $url .= $_SERVER['HTTP_HOST'];
        return $url;
    }

    public function fullUri()
    {
        return (new Request)->baseUrl() . $_SERVER['REQUEST_URI'];
    }

    public static function requestUri(): array
    {
        return explode("/",  (new Request)->getPath());
    }

    public function getMethod(): string
    {
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    public function isGet(): bool
    {
        return $this->getMethod() === 'GET';
    }

    public function isPost(): bool
    {
        return $this->getMethod() === 'POST';
    }

    public function getBody(): array
    {
        $body = [];
        if($this->getMethod() === 'GET') {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
        }

        if($this->getMethod() === 'POST') {
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
        }

        return $body;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function setParams(array $params): void
    {
        $this->params = $params;
    }

}