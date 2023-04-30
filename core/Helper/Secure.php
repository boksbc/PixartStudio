<?php

namespace Pixel\core\Helper;

class Secure
{

    public static function generateUUID() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0x0fff ) | 0x4000,
            mt_rand( 0, 0x3fff ) | 0x8000,
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }

    public static function hash($value)
    {
        return password_hash($value, PASSWORD_DEFAULT);
    }

    public static function CSRF()
    {
        $csrf = md5(time());
        unset($_SESSION['csrf']);
        $_SESSION['csrf'] = $csrf;
        return $csrf;
    }

//    public static function CSRF()
//    {
//        return '<input id="csrf" type="hidden" value="'.$_SESSION['csrf'].'">';
//    }



    public static function getSessionKey($key)
    {
        session_unset($key);
        $_SESSION['key'] = $key;
    }

    public function isSessonNameMatched($key)
    {
        if(isset($_SESSION['key']) && $_SESSION['key'] === $key) {
            return true;
        }
        return false;
    }
}