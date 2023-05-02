<?php

namespace Pixel\src\SiteControllers;

use Pixel\core\Helper\Messages;
use Pixel\core\Http\SiteController;

class BaseController extends SiteController
{

    public function home()
    {
        return $this->render("home");
    }

    public function contact()
    {
        $data = $this->request->getBody();

        if ($this->request->isPost()) {
            if($this->validation->ContactFormValidation($data)) {
               if ($this->mail->ContactMail($data)) {
                   return $this->render("contact-us");
               }
            }
        }

        return $this->render("contact-us");
    }

    public function about()
    {
        return $this->render("about-us");
    }

    public function service()
    {
        return $this->render("service");
    }

    public function comingSoon()
    {
        $this->template = "blank";
        return $this->render("coming-soon");
    }
}