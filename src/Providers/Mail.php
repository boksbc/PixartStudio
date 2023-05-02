<?php

namespace Pixel\src\Providers;

use Pixel\core\Providers\MailProvider;

class Mail extends MailProvider
{
    public function ContactMail($request)
    {
        $template = file_get_contents(self::$EMAIL_TEMPLATE_PATH . "contact.mail.phtml");
        $template = str_replace(
            [ '{{firstname}}', '{{lastname}}', '{{email}}', '{{company}}', '{{textarea}}'],
            [ $request['firstname'], $request['lastname'], $request['email'], $request['company'], $request['textarea']],
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