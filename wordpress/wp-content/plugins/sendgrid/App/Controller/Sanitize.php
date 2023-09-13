<?php

namespace App\Controller;

if( ! defined('ABSPATH') ) exit();

class Sanitize
{

    public function Text($value)
    {
        if (!$value) return;

        return sanitize_text_field($value);  
    }

    public function Email($mail_address)
    {
        if (!filter_var($mail_address, FILTER_VALIDATE_EMAIL)) return;

        return sanitize_text_field($mail_address);
        
    }
}

?>