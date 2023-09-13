<?php

namespace App;
use \App\Controller;

if( ! defined('ABSPATH') ) exit();

class Routes
{
   
   private static $send_mail;
   private static $enqueue;

   public function __construct()
   {
      
      self::$send_mail = empty( self::$send_mail ) ? new \App\Controller\Sendgridmailer() : self::$send_mail;
      self::$enqueue = empty( self::$enqueue ) ? new \App\Controller\Enqueue() : self::$enqueue;
      
   }

   public function AddActions()
   {
       add_action('admin_enqueue_scripts',array(self::$enqueue,'EnqueueList'));
       add_action( 'wp_ajax_my_action', array( self::$send_mail,'getPostData'));
       add_action( 'admin_menu', array( $this, 'MailPage'));   
           
   }  

   public function MailPage()
   {
      
      add_menu_page( 
         __( 'Mail', 'textdomain' ),
         'Mail',
         'manage_options',
         'mail',
          array($this,'SendgridCallback'),
         'dashicons-email',
         10
      ); 

   }


   public function SendgridCallback()
   {
      
      require_once WP_PLUGIN_DIR . "/sendgrid/App/View/send-mail.php";

   }

}

?>