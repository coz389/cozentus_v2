<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require APPPATH . 'libraries/phpmailer/Exception.php';
require APPPATH . 'libraries/phpmailer/PHPMailer.php';
require APPPATH . 'libraries/phpmailer/SMTP.php';

class Phpmailer_lib {
    public function load() {
        $mail = new PHPMailer(true); // Passing `true` enables exceptions
        return $mail;
    }
}
