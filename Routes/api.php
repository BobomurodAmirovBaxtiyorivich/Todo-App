<?php

$todo = new App\Todo();

$route = new App\Route();

$route->getMethod('/api/todos', function () use($todo){
    APIresponse($todo->getAllTodos());
});

$route->getMethod('/api/todos/{id}', function ($todoID) use($todo){
    APIresponse($todo->getTodo($todoID));
});