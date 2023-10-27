<?php
namespace App\Classes\Product;


class User {
    public static $name = "Aram";

    public static function login($request){
        echo "<pre>";
        print_r($request);
        echo "</pre>";
        die();
        echo "Login Request";
    }

}