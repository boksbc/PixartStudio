<?php

namespace Pixel\src\Models;

use Pixel\core\Helper\Messages;
use Pixel\core\Helper\Secure;
use Pixel\core\Http\Model;
use Pixel\src\Providers\Mail;

class Validation extends Model
{
    public Mail $mail;
    public function __construct()
    {
        $this->mail = new Mail();
    }
    public function ContactFormValidation($request)
    {
        $valid = true;
        $error = [];
        $data = [];
        $privacy = [];

        if($request['csrf'] === $_SESSION['csrf']) {
            Secure::CSRF();

            $firstname = trim($request['firstname']);
            $lastname = trim($request['lastname']);
            $email = trim($request['email']);
            $company = trim($request['company']);
            $message = trim($request['textarea']);
            $checkbox = $request['privacy'];

            if ($this->isInputValid($firstname)) {
                $valid = false;
                $error['firstname'] = Messages::REQUIRED;
            }

            if ($this->isInputValid($lastname)) {
                $valid = false;
                $error['lastname'] = Messages::REQUIRED;
            }

            if ($this->isInputValid($email)) {
                $valid = false;
                $error['email'] = Messages::REQUIRED;
            } else {
                if (!$this->isEmailValid($email)) {
                    $valid = false;
                    $error['email'] = Messages::EMAIL;
                }
            }

            if ($this->isInputValid($message)) {
                $valid = false;
                $error['textarea'] = Messages::REQUIRED;
            } else {
                if ($this->isLengthValid($message, Messages::MESS_LENGTH)) {
                    $valid = false;
                    $error['textarea'] = Messages::MIN_MESS;
                }
            }

            if ($checkbox === "false") {
                $valid = false;
                $privacy['privacy'] = $request['privacy'];
            }


        } else {
            $valid = false;
            $data['data'] = [
                'error' => Messages::CSRF,
            ];
            echo json_encode($data);
        }

        if (!$valid) {
            $data['data'] = [
                'privacy' => $privacy,
                'error' => $error,
                'csrf' => $_SESSION['csrf']
            ];
            echo json_encode($data);
        } else {
            if($this->mail->ContactMail($request)) {
                $data['data'] = [
                    'complete' => true,
                    'csrf' => $_SESSION['csrf']
                ];
                echo json_encode($data);
                return true;
            } else {
                $data['data'] = [
                    'fail' => 'Beim Versenden ist etwas schief gelaufen. 
                               Schicken Sie uns eine Nachricht per E-Mail.',
                    'csrf' => $_SESSION['csrf']
                ];
                echo json_encode($data);
                return false;
            }
        }
    }

}