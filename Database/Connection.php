<?php

namespace Database;

use PDO;

class Connection {

    private $HOST;
    private $USER;
    private $PASS;
    private $DB;

    protected static $_instance;

    public function __construct(){
        if(empty(self::$_instance)){
            $this->setConnection();
            self::$_instance = new PDO("mysql:host={$this->HOST};dbname={$this->DB}", $this->USER, $this->PASS);
            self::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$_instance;
    }

    public function setConnection(){
        $this->HOST = env("DB_HOST");
        $this->USER = env("DB_USERNAME");
        $this->PASS = env("DB_PASSWORD");
        $this->DB = env("DB_DATABASE");
    }


}