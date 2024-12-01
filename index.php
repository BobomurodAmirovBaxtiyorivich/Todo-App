<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


require 'src/Todo.php';
require 'helpers.php';
require 'src/Route.php';

$todo = new Todo();

$route = new Route();

$route->getMethod('/', function () {
    echo '<h1 align="center"><a href="/todos">Todos</a></h1>';
});

$route->getMethod('/todos', function () use ($todo) {
    $todos = $todo->get();
    views("home", [
        'todos' => $todos
    ]);
});

$route->postMethod('/todos', function () use($todo){
    if (isset($_POST['task']) and isset($_POST['due_date']) and isset($_POST['sub'])) {
        $todo->store($_POST['task'], $_POST['due_date']);

        header('Location: /todos');
    }
});

$route->getMethod('/start', function () use ($todo) {
    if (!empty($_GET['id'])) {
        $todo->Start($_GET['id']);
        header('Location: /todos');
    }
});

$route->getMethod('/complete', function () use ($todo)
{
    if (!empty($_GET['id'])) {
        $todo->Complete($_GET['id']);
        header('Location: /todos');
    }
});

$route->getMethod('/delete', function () use ($todo)
{
    if (!empty($_GET['id'])) {
        $todo->Delete($_GET['id']);
        header('Location: /todos');
    }
});

$route->getMethod('/pending', function () use ($todo)
{
    if (!empty($_GET['id'])) {
        $todo->Pending($_GET['id']);
        header('Location: /todos');
    }
});

$route->getMethod("/full_title", function () use ($todo){#
    if (!empty($_GET['title'])) {
        echo "<h1 align='center'>" . $_GET['title'] . "</h1>";
        echo "<h1 align='center'><a href='/todos'>Back to main</a></h1>";
    }
});

echo '<h1 align="center">404 not found</h1>';