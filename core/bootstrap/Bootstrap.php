<?php

namespace Pixel\core\bootstrap;

use Dotenv;
use Pixel\core\Database\Database;
use Pixel\core\Http\Request;
use Pixel\core\Http\Response;
use Pixel\core\Http\Router;
use Pixel\core\Http\View;
use Pixel\src\Providers\Mail;

class Bootstrap
{
    public static string $ROOT_DIR;
    public static Bootstrap $app;
    public static Database $database;

    public Router $router;
    public Request $request;
    public Response $response;
    public View $view;
    public Mail $mail;

    public function __construct()
    {
        self::$ROOT_DIR = $this->root();
        self::$app = $this;
        self::$database = new Database();
        self::loadENV();

        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router();
        $this->view = new View($this->request);
        $this->mail = new Mail();
    }

    public static function loadENV(): void
    {
        $dotenv = Dotenv\Dotenv::createImmutable(self::$ROOT_DIR);
        $dotenv->load();
    }

    public static function env($name)
    {
        return $_ENV[$name];
    }

    public function boot(): void
    {
        session_start();
        $router = $this->router;

        if (Router::API_PREFIX === Request::requestUri()[1]) {
            require_once Bootstrap::$ROOT_DIR ."/routes/api.php";
        } else {
            require_once Bootstrap::$ROOT_DIR .'/routes/web.php';
        }
    }

    public function root(): string
    {
        return dirname(__DIR__, 2);
    }
}