<?php

namespace Pixel\core\Providers;

use Pixel\core\bootstrap\Bootstrap;
use Pixel\core\Helper\Secure;
use Pixel\core\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class MailProvider
{
    public Request $request;
    public Secure $secure;
    public PHPMailer $mailer;
    protected static string $EMAIL_TEMPLATE_PATH;

    public function __construct()
    {
        $this->request = new Request();
        $this->secure = new Secure();
        $this->mailer = new PHPMailer();
        self::$EMAIL_TEMPLATE_PATH = Bootstrap::$ROOT_DIR . "/src/Views/mails/";

        $this->GeneralMailSettings();
    }

    public function GeneralMailSettings()
    {
        $this->mailer->CharSet = Bootstrap::env('APP_UNICODE');
        $this->mailer->IsSMTP();
        $this->mailer->SMTPAuth = Bootstrap::env('MAIL_ENCRYPTION');
        $this->mailer->Host = Bootstrap::env('MAIL_HOST');
        $this->mailer->Port = Bootstrap::env('MAIL_PORT');
        $this->mailer->FromName= Bootstrap::env('MAIL_FROM_NAME');
    }

    public function OfficeMailData()
    {
        $this->mailer->Username = Bootstrap::env('MAIL_NO_REPLY');
        $this->mailer->Password = Bootstrap::env('MAIL_NO_REPLY_PASS');
        $this->mailer->From= Bootstrap::env('MAIL_NO_REPLY');
        $this->mailer->AddAddress(Bootstrap::env('MAIL_OFFICE'));
        $this->mailer->FromName = "Office";
        $this->mailer->Subject = "Kundenanfrage";
    }
}