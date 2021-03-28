<?php


require_once '../../config/db.php';
$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM `users` WHERE `users`.`id` = '$id'");

header('location: /admin/contantAd.php');