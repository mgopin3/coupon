<?php

namespace App;

use \App\Controller;

class Routes
{
   
   private $send_mail;

   public function __construct()
   {
      $this->send_mail = empty( $this->$send_mail) ?  new \App\Controller\Sendgridmailer() : $this->$send_mail;
      add_action( 'wp_ajax_my_action', array( $this->send_mail,'getPostData'));
   }

   public function AddActions()
   {
 
    add_action( 'admin_menu', array( $this, 'mailpage'));   
    
   }

   public function mailpage()
   {

      add_menu_page( 
         __( 'Mail', 'textdomain' ),
         'Mail',
         'manage_options',
         'mail',
          array($this,'sendgrid_callback'),
         'dashicons-email',
         10
      ); 

   }

   public function sendgrid_callback()
   {
      wp_enqueue_script('formvalidation', plugins_url( 'assets/js/script.js', __FILE__ ) );
      require_once WP_PLUGIN_DIR . "/sendgrid/App/View/send-mail.php";

   }

}

?>