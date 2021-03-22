<?php
session_start();
require_once '../config/db.php';

$login = $_POST["login"];
$password = $_POST["password"];


$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
//echo mysqli_num_rows($check_user); //вывод результат совподающих user и password

if (mysqli_num_rows($check_user)>0) {
    $_SESSION["login"] = $_POST["login"];
    $_SESSION["password"] = $_POST["password"];
    header('location:../admin/contant.php');

} else {
    $_SESSION['msg'] = 'Не правильный логин или пароль';
    header('location: ../admin');
}





/*if ($login == $_POST['login'] && $password == $_POST['password']){


  //  $_SESSION["login"] = $_POST['login'];
    //$_SESSION["password"] = $_POST['password'];
   header('location:../admin/contant.php');
} else {
    echo "Не правильно работает логика php";
}*/


