<?php

/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 1/7/16
 * Time: 3:36 PM
 */
class Config
{
    public static function get($value) {
        $data = explode(".", $value);
        $file = DD . "/app/config/" . $data[0] . ".php";
        if(file_exists($file)) {
            $config_data = include $file;
            return $config_data[$data[1]];
        } else {
            echo "Error!";
        }

    }

}