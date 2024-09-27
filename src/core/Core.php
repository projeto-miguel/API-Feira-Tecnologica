<?php
namespace Api\Core;

class Core{
    public static function load(array $routes): void{
        $url = isset($_GET['url']) ? '/' . $_GET['url'] . '/' : '/';

        $controllerPrefix = "Api\\Controllers\\";

        foreach ($routes as $route) {
            $pattern = '#^' . preg_replace('/\{id\}/', '([\w-]+)', $route['url']) . '$#';

            if(preg_match($pattern, $url, $matches)){
                array_shift($matches);

                [$controller ,$action] = explode('@', $route['action']);
                $controller = $controllerPrefix . $controller;
                $extendController = new $controller();
                $extendController->$action();
            }
        }
    }
}