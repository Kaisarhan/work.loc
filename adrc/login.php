<?php
session_start();
require_once '../config/db.php';

$login = $_POST["login"];
$password = $_POST["password"];


$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'"); // пойск User and password  в таблице БД

//mysqli_num_rows показывает количество совподающих $login и $password в числах
if (mysqli_num_rows($check_user)>0) { // если $check_user больше
    $_SESSION["login"] = $login;  // тогда записываем в  $_SESSION login
    $_SESSION["password"] = $password; // тогда записываем в  $_SESSION password
    header('location:../admin/contant.php'); // перейти в contant.php
} else { //иначе
    $_SESSION['msg'] = 'Не правильный логин или пароль'; //передаем сообщение
    header('location: ../admin'); // и переходим в admin/index.php
}


