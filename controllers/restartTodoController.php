<?php

/** @var TYPE_NAME $todoID */

$todo = new App\Todo();

$todo->Pending($todoID);
header('Location: /todos-list');