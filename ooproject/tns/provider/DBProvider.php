<?php


/*
 *
 */

class DB extends PDO
{

    private static $_instance = null;
    private $_table_name;
    private $_where_key;
    private $_where_sign;
    private $_where_value;
    private $_is_where = false;

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    public function __construct(){
        $this->engine = Config::get("database.engine");
        $this->host = Config::get("database.hostname");
        $this->database = Config::get("database.dbname");
        $this->user = Config::get("database.username");
        $this->pass = Config::get("database.password");
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass );
    }

    public static function table($table_name) {
        if(!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        }

        self::$_instance->_table_name = $table_name;

        return self::$_instance;
    }

    public function where($key, $sign, $value) {

        $this->_where_key = $key;
        $this->_is_where = true;
        $this->_where_sign = $sign;
        $this->_where_value = $value;

        return $this;
    }

    public function get() {

        // SELECT * FROM products WHERE id = 1

        if($this->_is_where == true) {
            $sql = "SELECT * FROM " . $this->_table_name . " WHERE " .
                $this->_where_key . $this->_where_sign . $this->_where_value;
            $this->_is_where = false;
            $this->_where_key = null;
            $this->_where_sign = null;
            $this->_where_value = null;
        } else {
            $sql = "SELECT * FROM " . $this->_table_name;
        }
        $result = $this->query($sql);
        return $result->fetchAll();
    }






}