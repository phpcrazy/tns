<?php


/*
 *
 */

class DB extends PDO
{

    private static $_instance = null;
    private $table_name;

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

        self::$_instance->table_name = $table_name;

        return self::$_instance;
    }

    public function get() {
        $sql = "SELECT * FROM " . $this->table_name;
        $result = $this->query($sql);
        return $result->fetchAll();
    }






}