<?php

namespace Pixel\core\Helper;

class Messages
{
//  ERROR MESSAGES
    public const USER_LENGTH = "4";
    public const PASS_LENGTH = "8";
    public const MESS_LENGTH = "3";
    public const REQUIRED = "Dies ist ein Plichtfeld";
    public const MATCH = "Stimmt nicht überein";
    public const MIN_USER = "Tragen Sie mindestens " . self::USER_LENGTH . " Zeichen ein";
    public const MIN_PASS = "Tragen Sie mindestens " . self::PASS_LENGTH . " Zeichen ein";
    public const MIN_MESS = "Tragen Sie mindestens " . self::MESS_LENGTH . " Zeichen ein";
    public const EMAIL = "Ungültige Email Adresse";
    public const TAKEN = "Bereits vergeben";
    public const CSRF = "Ungültige Anfrage";
    public const VALID = "Ungültige Zeichen";
    public const NOVALID_LOGIN = "Falscher Benutzername oder Passwort";
    public const STATUS_DISABLE = "Ihr Account ist noch nicht freigeschalten.";
    public const INVALID_TOKEN = "Sie verwenden einen ungültigen Link. Prüfen Sie nochmals den Link den wir Ihnen zugesendet haben.";


//  SUCCESS MESSAGES
    public const MAIL_SUCCESS = "Wir haben Ihre Anfrage erhalten. Wir melden uns in kürze.";
    public const SUCCESS_SIGNUP = "Wir haben Ihnen eine E-Mail gesendet. Überprüfen Sie auch Ihren Spam-Ordner.";
    public const SUCCESS_RESET_PWD = "Sie haben Ihr Passwort erfolgreich zurückgesetzt.";
    public const SUCCESS_TOKEN_MAIL = "Wir haben Ihnen eine E-Mail gesendet. Überprüfen Sie auch Ihren Spam-Ordner.";
}
