<?php

namespace Pixel\src\SiteControllers;

use Pixel\core\Helper\Secure;

class AjaxController {

    public Secure $secure;
    public BaseController $baseController;

    public function __construct()
    {
        $this->secure = new Secure();
        $this->baseController = new BaseController();
    }

    public function AjaxCall()
    {
        ## BASE AJAX CALL
        if($this->secure->isSessonNameMatched("contact")) {
            $this->baseController->contact();
        }
    }
}