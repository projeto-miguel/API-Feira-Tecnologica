<?php
use Api\Database;

require_once __DIR__ . "/vendor/autoload.php";

define("_CONF",parse_ini_file(__DIR__ . "/src/.ini",true));

print_r(_CONF);die();
$db = Database::GetInstance();

