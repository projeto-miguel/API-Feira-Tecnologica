<?php
require_once __DIR__ . "/vendor/autoload.php";

// PEGANDO CREDENCIAIS DO BANCO DE DADOS PELO ARQUIVO .ini
define("_CONF",parse_ini_file(__DIR__ . "/src/.ini",true));
