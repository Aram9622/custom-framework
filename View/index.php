
<?php
    include_once 'config/route.php';
    $routeKeys = array_keys($routes);
    $route = [];

    if (isset($_SERVER['PATH_INFO'])) {
        $PATH_INFO = explode('/',  substr($_SERVER['PATH_INFO'], 1));
        if(isset($routes[$PATH_INFO[0]]) && $routes[$PATH_INFO[0]]){
            $route = $routes[$PATH_INFO[0]];
            if(isset($routes[$PATH_INFO[0]]["arg"]) && count($PATH_INFO) > 1 ){
                $_GET[$routes[$PATH_INFO[0]]["arg"]] = $PATH_INFO[1];
                if(file_exists($routes[$PATH_INFO[0]]['editPage'])){
                    include_once $routes[$PATH_INFO[0]]['editPage'];
                }
                else{
                    include "View/404.php";
                }

            }
            else {
                if(file_exists($routes[$PATH_INFO[0]]['redirect'])){
                    include_once $routes[$PATH_INFO[0]]['redirect'];
                }else {
                    include "View/404.php";
                }

            }

        }
        if(!in_array($PATH_INFO[0], $routeKeys)){
            http_response_code(404);
            include "View/404.php";
            die();
        }
    }
    else {
        include "View/welcome.php";
    }

    if(isset($_POST) && !empty($_POST)){
        if(!empty($route)){
            call_user_func([$route["route"]['controller'], $route["route"]['method']],$_POST);
        }
    }

    include_once "menu.php";
?>

