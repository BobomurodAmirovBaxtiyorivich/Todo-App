<?php

$route = new App\Route();

if ($route->isAPIcall()){
    require 'Routes/api.php';
} else {
    require 'Routes/web.php';
}