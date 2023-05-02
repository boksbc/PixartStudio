<?php

namespace Pixel\src\Providers;

use Pixel\core\Providers\MailProvider;

class Mail extends MailProvider
{
    public function ContactMail($request)
    {
        $template = file_get_contents(self::$EMAIL_TEMPLATE_PATH . "contact.mail.phtml");
        $template = str_replace(
            [ '{{firstname}}', '{{lastname}}', '{{email}}', '{{company}}', '{{textarea}}', '{{HTTP_USER_AGENT}}'],
            [ $request['firstname'], $request['lastname'], $request['email'], $request['company'], $request['textarea'], $_SERVER['HTTP_USER_AGENT']],
            $template
        );
        $template .= $_SERVER['HTTP_USER_AGENT'];

        $this->OfficeMailData();
        $this->mailer->IsHTML(true);
        $this->mailer->Body = $template;

        if ($this->mailer->send()) {
            return true;
        } else {
            return false;
        }
    }

}