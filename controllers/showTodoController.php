<?php
/** @var TYPE_NAME $todoID */

$todo = new App\Todo();

$getTodo = $todo->getTodo($todoID);
views('edit', ['todo' => $getTodo]);