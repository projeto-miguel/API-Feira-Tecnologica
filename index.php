<?php

use Api\Core\Core;
use Api\Router\Router;

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/src/core/main.php";

// PEGANDO CREDENCIAIS DO BANCO DE DADOS PELO ARQUIVO .ini
define("_CONF",parse_ini_file(__DIR__ . "/src/.ini",true));

Core::load(Router::routes());