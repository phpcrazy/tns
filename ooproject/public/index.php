<?php

define("DD", realpath(__DIR__ . "/.."));

require DD . "/vendor/autoload.php";


$products = DB::table("products")->get();

var_dump($products);

$products = DB::table("products")->where("id", "=", 1)->get();

echo "<br />";

var_dump($products);


$data = [
    "name"  => "iPod Nano",
    "price" =>  2300000
];

DB::table("products")->insert($data);

DB::table("products")->delete(1);


?>