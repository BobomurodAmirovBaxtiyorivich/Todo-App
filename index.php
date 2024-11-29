<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


require 'src/Todo.php';
require 'helpers.php';

$todo = new Todo();

if ($uri == '/') {
    $todos = $todo->get();
    views("home", [
        'todos' => $todos
    ]);
} elseif ($uri == '/store') {
    if (isset($_POST['task']) and isset($_POST['due_date']) and isset($_POST['sub'])) {
        $todo->store($_POST['task'], $_POST['due_date']);

        header('Location: /');
    }
} elseif ($uri == '/start') {
    if (!empty($_GET['id'])) {
        $todo->Start($_GET['id']);

        header('Location: /');
    }
} elseif ($uri == '/complete') {
    if (!empty($_GET['id'])) {
        $todo->Complete($_GET['id']);

        header('Location: /');
    }
} elseif ($uri == '/delete') {
    if (!empty($_GET['id'])) {
        $todo->Delete($_GET['id']);

        header('Location: /');
    }
} elseif ($uri == '/full_title') {
    if (!empty($_GET['title'])) {
        echo "<h1 align='center'>" . $_GET['title'] . "</h1>";
        echo "<h1 align='center'><a href='/'>Back to main</a></h1>";
    }
} elseif ($uri == '/pending') {
    if (!empty($_GET['id'])) {
        $todo->Pending($_GET['id']);

        header('Location: /');
    }
}