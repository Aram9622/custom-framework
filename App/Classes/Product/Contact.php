<?php

namespace App\Classes\Product;

class Contact {
    public static function contact($request){
        echo "<pre>";
        print_r($request);
        echo "</pre>";
        die();
    }
}