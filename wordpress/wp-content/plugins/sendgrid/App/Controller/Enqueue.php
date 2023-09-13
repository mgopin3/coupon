<?php

namespace App\Controller;

if( ! defined('ABSPATH') ) exit();

class Enqueue
{
    
    public function EnqueueList()
    {
        self::Scripts();
        self::Styles();
    }

    public function Scripts()
    {
        wp_enqueue_script('boostrap-js', plugins_url( '../../assets/js/slim.js', __FILE__ ) );
        wp_enqueue_script('boostrap-js', plugins_url( '../../assets/js/popper.js', __FILE__ ) );
        wp_enqueue_script('boostrap-js', plugins_url( '../../assets/js/bootstrap.bundle.js', __FILE__ ) );
        wp_enqueue_script('js', plugins_url( '../../assets/js/jquery.js', __FILE__ ) );
        wp_enqueue_script('my-ajax-script', plugins_url() . '/sendgrid/assets/js/script.js', array('jquery'), '1.0', true);


    }

    public function Styles()
    {
        wp_enqueue_style('boostrap-css', plugins_url( '../../assets/css/bootstrap.css', __FILE__ ) );
        
    }
}

?>