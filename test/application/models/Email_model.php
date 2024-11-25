<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Email_model extends CI_Model {
     function  __construct(){

        parent::__construct();

    }

         function emailgmailconf($email=NULL,$subject=NULL,$body=NULL)

        { 
		
// Load PHPMailer library
 
        $this->load->library('phpmailer_lib');
        // PHPMailer object

        $mail = $this->phpmailer_lib->load();

        // SMTP configuration

        $mail->isSMTP();

        $mail->Host     = 'mail.ymtsindia.com';

        $mail->SMTPAuth = true;

        $mail->Username = 'no-reply@ymtsindia.com';

        $mail->Password = 'Takeoff@123';

        $mail->SMTPSecure = 'ssl';

        $mail->Port     = 465;
        $mail->setFrom('info@kammavaari.com', 'Kammavaari');

        $mail->addReplyTo('info@kammavaari.com', 'Kammavaari');
        // Add a recipient
        $mail->addAddress($email);
        // Add cc or bcc 

        /*        $mail->addCC('smkrishna1785@gmail.com');*/

        // Email subject

        $mail->Subject = $subject ;

        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mail->Body = $body;
        // Send email
        if(!$mail->send()){
            return 'Fail';
           // echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            return 'Success';

        }

        }

}