<?php
require_once 'config/db.php';

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



<!-- tabel -->
<?php
require 'tpl/tableTest.php';
?>
<!-- end table -->



<!--footer-->
<?php
require 'tpl/footer.php';
?>
<!--end footer-->
