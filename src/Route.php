<?php

class Route
{
    public $currentRoute;

    public function __construct(){
        $this->currentRoute = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getResourse(): int
    {
        if (isset(explode('/', $this->currentRoute)[2])){
            $resourseID = (int)explode('/', $this->currentRoute)[2];
            return $resourseID ? $resourseID : false;
        }
        return false;
    }

    public function getMethod($route, $callback){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $resourseID = $this->getResourse();
            $route = str_replace('{id}', $resourseID, $route);
            if ($route == $this->currentRoute) {
                $callback($resourseID);
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