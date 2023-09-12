<?php


/**
 * Plugin name: Sendgridmail
 * Plugin URI: http://www.Sendgridmail.org
 * Description:Sendgridmail
 * Author: Sendgridmail
 * Author URI: https://www.Sendgridmail.org
 * Version: 1.0
 * Slug: Sendgridmail
 * Text Domain: Sendgridmail
 * Domain Path: /i18n/languages/
 * Requires at least: 4.6.1
 * WC requires at least: 3.0
 * WC tested up to: 7.3
 */



defined('ABSPATH') or die('not access');


if(file_exists( WP_PLUGIN_DIR . '/sendgrid/vendor/autoload.php' )){
    require_once WP_PLUGIN_DIR . '/sendgrid/vendor/autoload.php';
}else{
    die();
}

if(class_exists('App\\Routes'))
{
    $routes =  new App\Routes();
    $routes->AddActions();
}else{
    die();
}

?>






