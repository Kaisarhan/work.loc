<?php
require_once '../../config/db.php';

$faim = $_POST['faim'];
$serial = $_POST['serial'];
$additionally = $_POST['additionally'];
$comment = $_POST['comment'];

mysqli_query($connect,"INSERT INTO `jurnarelements` (`id`, `faim`, `serial`, `additionally`, `comment`) VALUES (NULL, '$faim', '$serial', '$additionally', '$comment')");

print_r($faim, true);
header('location: /admin');