<?php
require_once '../../config/db.php';

$id = $_POST['id'];
$faim = $_POST['faim'];
$serial = $_POST['serial'];
$additionally = $_POST['additionally'];
$comment = $_POST['comment'];

mysqli_query($connect, "UPDATE `jurnarelements` SET `faim` = '$faim', `serial` = '$serial', `additionally` = '$additionally', `comment` = '$comment' WHERE `jurnarelements`.`id` = '$id'");

header('location: /admin');