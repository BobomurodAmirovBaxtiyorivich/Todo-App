<?php

$todo = new App\Todo();

$todos = $todo->get();
views("todos", [
    'todos' => $todos
]);