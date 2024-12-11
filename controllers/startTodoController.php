<?php
/** @var TYPE_NAME $todoID */

$todo = new App\Todo();

$todo->Start($todoID);
header('Location: /todos-list');