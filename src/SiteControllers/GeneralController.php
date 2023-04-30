<?php

namespace Pixel\src\SiteControllers;

use Pixel\core\Http\SiteController;

class GeneralController extends SiteController
{
    public function privacy()
    {
        return $this->render("privacy");
    }

    public function impressum()
    {
        return $this->render("impressum");
    }

    public function agb()
    {
        return $this->render("agb");
    }
}