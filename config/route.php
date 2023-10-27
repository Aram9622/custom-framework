<?php
$routes = [
    "login" =>  [
        "redirect" => "View/User/login.php",
        "editPage" => "View/User/edit.php",
        "route" => [
            "controller" => "App\\Classes\\Product\\User",
            "method" => "login"
        ],
        "arg" => "id"
    ],
    "contact" => [
        "redirect" => "View/Contact/contact.php",
        "route" => [
            "controller" => "App\\Classes\\Product\\Contact",
            "method" => "contact"
        ]
    ]

];
return $routes;