<?php

namespace App\Controller;
use SendGrid\Mail\Mail;

if( ! defined('ABSPATH') ) exit();

class Sendgridmailer 
{

    private $api_key = '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';
    private $email;
    private $sendgrid;
    private $response;
    private static $sanitization;
   
    public function getPostData(){
         
        if ( isset( $_POST['tomail'] )  && isset( $_POST['subject'] )  &&  isset( $_POST['message'] ) ) {

            self::$sanitization = empty( self::$sanitization ) ? new Sanitize() : self::$sanitization;

            $tomail = self::$sanitization->Email( $_POST['tomail'] );
            $subject = self::$sanitization->Text( $_POST['subject'] );
            $message = self::$sanitization->Text( $_POST['message'] );

            if( empty($tomail) ) wp_send_json_error( array("response" => "Invalid Email") );

            $this->response = $this->Send( $tomail, $subject, $message );

        }else{
            wp_send_json_error( array("response" => '0') );
        }

    }

    public function Send($to, $subject, $message )
    {

        $this->email = new Mail();
        $this->email->setFrom('mohansethupathi@gmail.com', 'Mohan');
        $this->email->addTo($to);
        $this->email->setSubject($subject);
        $this->email->addContent("text/plain", $message);

        $this->sendgrid = new \SendGrid($this->api_key);
        $this->response = $this->sendgrid ->send($this->email);

         wp_send_json_success( array("response" => $this->response->statusCode()) );

    }

}