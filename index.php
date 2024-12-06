<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require 'bootstrap.php';
require 'src/Todo.php';
require 'helpers.php';
require 'src/Route.php';

$todo = new Todo();

$route = new Route();

$route->getMethod('/', function () {
    views('home');
});

$route->getMethod('/telegram', function () {
    require 'telegram.php';
});

$route->postMethod('/send_message', function () {
    require 'src/Bot.php';

    $bot = new Bot();

    if (isset($_POST['sub'])) {
        $bot->makeRequest('sendMessage', [
            'chat_id' => $_POST['chat_id'],
            'text' => "Hello my friend!"
        ]);
    }
    header('Location: /telegram');
});

$route->putMethod('/update/{id}', function ($todoID) use ($todo) {
    if (isset($_POST['sub'])) {
        $todo->update($todoID, $_POST['title'], $_POST['status'], $_POST['due_date']);
    }
    header('Location: /todos-list');
});

$route->getMethod('/edit/{id}', function ($todoID) use ($todo) {
    $getTodo = $todo->getTodo($todoID);
    views('edit', ['todo' => $getTodo]);
});

$route->getMethod('/add-todos', function () {
    views('add_todos');
});

$route->postMethod('/add-todos', function () use ($todo) {
    if (isset($_POST['task']) and isset($_POST['due_date']) and isset($_POST['sub'])) {
        $todo->store($_POST['task'], $_POST['due_date']);

        header('Location: /add-todos');
    }
});

$route->getMethod('/todos-list', function () use ($todo) {
    $todos = $todo->get();
    views("todos", [
        'todos' => $todos
    ]);
});


$route->getMethod('/delete/{id}', function ($todoID) use ($todo) {
    $todo->Delete($todoID);
    header('Location: /todos-list');
});

$route->getMethod('/start/{id}', function ($todoID) use ($todo) {
    $todo->Start($todoID);
    header('Location: /todos-list');
});

$route->getMethod('/complete/{id}', function ($todoID) use ($todo) {
    $todo->Complete($todoID);
    header('Location: /todos-list');
});

$route->getMethod('/pending/{id}', function ($todoID) use ($todo) {
    $todo->Pending($todoID);
    header('Location: /todos-list');
});

$route->getMethod("/full_title/{id}", function ($todoID) use ($todo) {
    $full = $todo->full_title($todoID);
    views("full_title", [
        'full' => $full
    ]);
});

echo '<h1 align="center">404 not found</h1>';