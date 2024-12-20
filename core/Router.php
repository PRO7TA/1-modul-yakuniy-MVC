<?php

class Router
{
    private $routes = [];

    public function get($url, $action)
    {
        $this->routes['GET'][$url] = $action;
    }

    public function post($url, $action)
    {
        $this->routes['POST'][$url] = $action;
    }

    public function dispatch()
    {
        $url = strtok($_SERVER["REQUEST_URI"], '?');
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset($this->routes[$method][$url])) {
            list($controller, $action) = explode('@', $this->routes[$method][$url]);
            require_once "../app/Controllers/$controller.php";
            $controller = new $controller;
            $controller->$action();
        } else {
            echo "404 - Page Not Found";
        }
    }
}
