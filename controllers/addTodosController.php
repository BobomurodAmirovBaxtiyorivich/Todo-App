<?php

$todo = new App\Todo();

if (isset($_POST['task']) and isset($_POST['due_date']) and isset($_POST['sub'])) {
    $todo->store($_POST['task'], $_POST['due_date']);

    header('Location: /add-todos');
}