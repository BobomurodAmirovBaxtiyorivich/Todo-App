<?php

/** @var TYPE_NAME $todoID */

$todo = new App\Todo();

$full = $todo->full_title($todoID);
views("full_title", [
    'full' => $full
]);