<?php

class Route
{
    public $currentRoute;

    public function __construct(){
        $this->currentRoute = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getMethod($route, $callback){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($route == $this->currentRoute) {
                $callback();
                exit();
            }
        }
    }

    public function postMethod($route, $callback){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($route == $this->currentRoute) {
                $callback();
                exit();
            }
        }
    }
}