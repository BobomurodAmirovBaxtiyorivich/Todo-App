<?php
$bot = new App\Bot();

if (isset($_POST['sub'])) {
    $bot->makeRequest('sendMessage', [
        'chat_id' => $_POST['chat_id'],
        'text' => "Hello my friend!"
    ]);
}
header('Location: /telegram');