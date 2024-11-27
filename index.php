<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'src/Todo.php';
require 'helpers.php';

$todo = new Todo();

if ($uri == '/') {
    $info = $todo->get();
    views("home", [$info]);
} elseif ($uri == '/store') {
    if (isset($_POST['sub'])) {
        $todo->store($_POST['task'], $_POST['due_date']);

        header('Location: /');
    }
}