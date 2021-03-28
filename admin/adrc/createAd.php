<?php
require_once '../../config/db.php';

$login = $_POST['login'];
$password = $_POST['password'];
$fio = $_POST['fio'];
$status = $_POST['status'];

mysqli_query($connect,"INSERT INTO `users` (`id`, `login`, `password`, `fio`, `status`) VALUES (NULL, '$login', '$password', '$fio', '$status')");

print_r($login, true);
header('location: /admin/contantAd.php');