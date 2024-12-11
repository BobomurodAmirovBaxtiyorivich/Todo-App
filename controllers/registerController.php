<?php

if (isset($_POST['sub'])){
    if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['pass1']) and isset($_POST['pass2'])){
        if ($_POST['pass1'] === $_POST['pass2']){
            dd($_POST);
        } else {
            $_SESSION['wrong_pass'] = ['Passwords do not match'];
            header('Location: /register');
        }
    }
}