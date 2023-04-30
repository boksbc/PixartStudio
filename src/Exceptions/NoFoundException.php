<?php

namespace Pixel\src\Exceptions;

class NoFoundException extends \Exception
{
    protected $code = 404;
    protected $message = "Seite nicht gefunden";
    public $headline = "Es scheint, als ob hier Nichts wäre.";
    public $p_tag_1 = "Der gesuchte Inhalt existiert nicht. Entweder wurde es entfernt oder Sie haben sich beim Link vertippt.";
    public $p_tag_2 = "Das tut mir leid! Bitte besuchen Sie unsere Homepage, um dorthin zu gelangen, wo Sie hin müssen.";

}