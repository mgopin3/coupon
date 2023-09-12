<?php

namespace App\Controller;
use SendGrid\Mail\Mail;

class Sendgridmailer 
{

    private $api_key = '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';
    private $email;
    private $sendgrid;
    private $response;
   
    public function getPostData(){

        if ( isset( $_POST['tomail'] )  && isset( $_POST['subject'] )  &&  isset( $_POST['message'] ) ) {
            $_POST['tomail']= trim( $_POST['tomail']);
            $_POST['subject']= trim( $_POST['subject']);
            $_POST['message']= trim( $_POST['message']);
            $this->response = $this->send($_POST['tomail'],$_POST['subject'],$_POST['message']);
        }else{
            wp_send_json_error(array("response" => 0));
        }

    }

    public function send($to, $subject, $message ){

        $this->email = new Mail();
        $this->email->setFrom('mohansethupathi@gmail.com', 'Mohan');
        $this->email->addTo($to);
        $this->email->setSubject($subject);
        $this->email->addContent("text/plain", $message);

        $this->sendgrid = new \SendGrid($this->api_key);
        $this->response = $this->sendgrid ->send($this->email);

        // echo "<pre>";
        // print_r($this->response);
        // echo "</pre>";

         wp_send_json_success(array("response" => $this->response->statusCode()));

    }

}