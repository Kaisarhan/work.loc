<?php


require_once '../../config/db.php';
$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM `jurnarelements` WHERE `jurnarelements`.`id` = '$id'");

header('location: /admin');