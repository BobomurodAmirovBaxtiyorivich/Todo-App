<?php

function views(string $file, array $data = []): void
{
    extract($data);
    require "views/" . $file . ".php";
}

