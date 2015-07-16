<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18.06.15
 * Time: 19:46
 */
function check(){
    $result = !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"]) && (strlen($_POST["message"])<=100);
    return $result;
}

if ($_POST){
    $message = check() ? "Success" : "Fail";

    header("Location: index.php?msg={$message}");
}