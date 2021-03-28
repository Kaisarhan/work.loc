<?php
require_once '../../config/db.php';

$id = $_POST['id'];
$login = $_POST['login'];
$password = $_POST['password'];
$fio = $_POST['fio'];
$status = $_POST['status'];

mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `password` = '$password', `fio` = '$fio', `comment` = '$status' WHERE `users`.`id` = '$id'");

header('location: /admin/contantAd.php');