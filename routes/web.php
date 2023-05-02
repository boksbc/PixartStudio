<?php
use Pixel\core\Http\Router;
use Pixel\src\SiteControllers\AjaxController;
use Pixel\src\SiteControllers\BaseController;
use Pixel\src\SiteControllers\GeneralController;

/** @var $router Router */

//$router->staticPage([BaseController::class, "comingSoon"]);

$router->get('/', [BaseController::class, "home"]);
$router->get('/about', [BaseController::class, "about"]);
$router->get('/service', [BaseController::class, "service"]);
$router->get('/contact', [BaseController::class, "contact"]);
$router->post('/contact', [BaseController::class, "contact"]);

$router->group("/general", function () use ($router) {
    $router->get('/privacy', [GeneralController::class, "privacy"]);
    $router->get('/impressum', [GeneralController::class, "impressum"]);
    $router->get('/agb', [GeneralController::class, "agb"]);
});

$router->post('/ajax', [AjaxController::class, "AjaxCall"]);

$router->run();
