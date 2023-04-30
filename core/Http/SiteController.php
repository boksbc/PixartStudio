<?php

namespace Pixel\core\Http;

use Pixel\src\Models\Validation;
use Pixel\src\Providers\Mail;

class SiteController
{
    public Mail $mail;
    public View $view;
    public Request $request;
    public Validation $validation;
    public string $template = "main";

    public function __construct()
    {
        $this->mail = new Mail();
        $this->view = new View();
        $this->request = new Request();
        $this->validation = new Validation();
    }

    public function render($view, $params = []): array|bool|string
    {
        return $this->view->renderView($view, $this->template, $params);
    }

    public function renderError($view, $params = []): array|bool|string
    {
        $this->template = "blank";
        return $this->view->renderNoFoundView($view, $this->template, $params);
    }

}