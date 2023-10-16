<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();

        $controllerFileName = '../app/controllers/' . $url[0] . '.php';

        if (file_exists($controllerFileName)) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once $controllerFileName;
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            $method = $url[1];

            if (method_exists($this->controller, $method)) {
                $this->method = $method;
                unset($url[1]);
            }
        }

        $this->params = array_values($url);

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}












