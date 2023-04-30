<?php

namespace Pixel\core\Http;

use Pixel\core\bootstrap\Bootstrap;

class View
{
    public string $title = '';
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function renderView($view, $template, $params = []): array|bool|string
    {
        $viewContent = $this->renderContent($view, $params);
        $layoutHeader = $this->layoutHeader();
        $layoutFooter = $this->layoutFooter();
        $layoutContent = $this->layoutContent($template);
        return str_replace(['{{header}}','{{content}}', '{{footer}}'], [$layoutHeader, $viewContent, $layoutFooter], $layoutContent);
    }

    public function renderNoFoundView($view, $template, $params = []): array|bool|string
    {
        $viewContent = $this->renderErrorContent($view, $params);
        $layoutHeader = $this->layoutHeader();
        $layoutFooter = $this->layoutFooter();
        $layoutContent = $this->layoutContent($template);
        return str_replace(['{{header}}','{{content}}', '{{footer}}'], [$layoutHeader, $viewContent, $layoutFooter], $layoutContent);
    }

    protected function layoutContent($template): bool|string
    {
        ob_start();
        include Bootstrap::$ROOT_DIR . "/src/Views/core/head.php";
        include Bootstrap::$ROOT_DIR . "/src/Views/templates/$template.template.php";
        include Bootstrap::$ROOT_DIR . "/src/Views/core/script.php";
        return ob_get_clean();
    }

    protected function layoutHeader(): bool|string
    {
        ob_start();
        include Bootstrap::$ROOT_DIR . "/src/Views/layouts/header.layout.php";
        return ob_get_clean();
    }

    protected function layoutFooter(): bool|string
    {
        ob_start();
        include Bootstrap::$ROOT_DIR . "/src/Views/layouts/footer.layout.php";
        return ob_get_clean();
    }

    protected function renderContent($view, $params): bool|string
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include Bootstrap::$ROOT_DIR . "/src/Views/routes/$view.view.php";
        return ob_get_clean();
    }

    protected function renderErrorContent($view, $params): bool|string
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include Bootstrap::$ROOT_DIR . "/src/Views/errors/$view.view.php";
        return ob_get_clean();
    }
}