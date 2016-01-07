<?php

define("DD", realpath(__DIR__ . "/.."));

require DD . "/vendor/autoload.php";


$products = DB::table("products")->get();

var_dump($products);



?>