<?php

namespace Api;

use PDO;
class Database{
    private readonly array $c;
    private $Server;
    private $User;
    private $Password;
    private $Database;
    public $Pdo;
    private static $Instance = null;

    private function __construct(array $c = []){
        $this->c = $c;
        
        $this->Server = $this->c['database']['DB_SERVER'];
        $this->User = $this->c['database']['DB_USER'];
        $this->Password = "";
        $this->Database = $this->c['database']['DB_NAME'];
        $this->Pdo = new PDO("mysql:host=$this->Server;dbname=$this->Database", $this->User, $this->Password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8MB4"));
    }
    public static function GetInstance(){
        if(self::$Instance === null){
            self::$Instance = new self();
        }
        return self::$Instance->Pdo;
    }
}