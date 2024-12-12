<?php

$user = new App\User();

if (isset($_POST['sub'])){
    if (!empty($_POST['email']) or !empty($_POST['pass'])){
        $check = true;
        $check2 = true;

        foreach ($user->getAllUsers() as $value){
            if ($value['email'] != $_POST['email']){
                $check = false;
            }
            if ($value['password'] != $_POST['pass']){
                $check2 = false;
            }
        }

        if (!$check){
            $_SESSION['error'] = ['Email does not exist'];
            header('Location: /log_in');
        }
        if (!$check2){
            $_SESSION['error'] = ['Password is incorrect'];
            header('Location: /log_in');
        }
    }
}
