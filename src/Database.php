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
        $this->Password = $this->c['database']['DB_PASS'];
        $this->Database = $this->c['database']['DB_NAME'];
        $this->Pdo = new PDO("mysql:host=$this->Server;dbname=$this->Database", $this->User, $this->Password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8MB4"));
    }
    // GERAR INSTANCIA DE FORMA ESTÁTICA
    public static function GetInstance(array $c): mixed{
        if(self::$Instance === null){
            self::$Instance = new self($c);
        }
        return self::$Instance->Pdo;
    }
}