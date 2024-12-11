<?php

/** @var TYPE_NAME $todoID */

$todo = new App\Todo();

$todo->Delete($todoID);
header('Location: /todos-list');