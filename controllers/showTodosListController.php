<?php

if (!isset($_SESSION['user'])){
    header('Location: /log_in');
}

$todo = new App\Todo();

$todos = $todo->getAllTodos($_SESSION['user']['id']);

views("todos", [
    'todos' => $todos
]);