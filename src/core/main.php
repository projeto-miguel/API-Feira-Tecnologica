<?php
use Api\Router\Router;

Router::get("/","HomeController@index");
Router::get("/getbyid/{id}/","HomeController@about");