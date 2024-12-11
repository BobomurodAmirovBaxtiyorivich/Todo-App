<?php

/** @var TYPE_NAME $todoID */

$todo = new App\Todo();

$todo->Complete($todoID);
header('Location: /todos-list');