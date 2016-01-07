<?php

define("DD", __DIR__ . "/..");
require DD . "/tns/functions.php";
require  DD . "/app/controller/controllers.php";

$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];
$request_uri = explode("/", $request_uri);
$script_name = explode("/", $script_name);

$request = array_diff($request_uri, $script_name);

$request = array_values($request);

if(empty($request)) {
    $page = "home";
} else {
    $page = $request[0];
}

$routes = include DD . "/app/routes.php";
if(array_key_exists($page, $routes)) {
    $controller = $routes[$page];
    array_shift($request);
    call_user_func_array($controller, $request);
} else {
    echo "404";
}
?>