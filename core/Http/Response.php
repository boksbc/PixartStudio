<?php

namespace Pixel\core\Http;

class Response
{
    public function setStatusCode($code)
    {
        if(is_numeric($code)) {
            http_response_code($code);
        }
    }

    public function redirect($uri)
    {
        header("location: $uri" );
    }

}