<?php
/** @var TYPE_NAME $todoID */

$todo = new App\Todo();

if (isset($_POST['sub'])) {
    $todo->update($todoID, $_POST['title'], $_POST['status'], $_POST['due_date']);
}
header('Location: /todos-list');