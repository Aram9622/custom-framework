<?php

function route($route, $id = null){
    $baseRoute =  env("APP_URL").'/'.$route;
    if($id){
        $baseRoute .= '/'.$id;
    }
    return $baseRoute;
}

function env($key){
    return $_ENV[$key] ?? null;
}