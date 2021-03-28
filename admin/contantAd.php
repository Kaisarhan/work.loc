<?php
session_start();
require_once '../config/db.php';

$login = $_POST["login"];
$password = $_POST["password"];

// Условния когда $_SESSION["login"] и $_SESSION["password"] значения null тогда возвращяет на admin/index.php
if ($_SESSION["login"] == null || $_SESSION["password"] == null) {
  header('Location: /admin');
}
?>

<!--header-->
<?php
require 'tpl/header.php'
?>
<!--end header-->

<!--ModalWindow-->
<?php
require 'tpl/ModalWindow.php'
?>
<!--end ModalWindow-->

<!--buttons add, edit, search-->
<?php
require 'tpl/panel.php'
?>
<!--end buttons add, edit, search-->

<!-- table -->
<?php
require 'tpl/tableAd.php';
?>
<!-- end table -->

<!--footer-->
<?php
require 'tpl/footer.php';
?>
<!--end footer-->
