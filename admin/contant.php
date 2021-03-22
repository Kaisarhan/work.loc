<?php
session_start();
require_once '../config/db.php';

$login = $_POST["login"];
$password = $_POST["password"];

//$_SESSION["login"] = $_POST['login'];
//$_SESSION["password"] = $_POST['password'];


if ($_SESSION["login"] !== $login || $_SESSION["password"] !== $password) {

  header('Location: /admin'); //не забыть раскоментировать
}else{
    echo "правильный пароль";
}
?>
<a href="../adrc/logOut.php">Выход</a>


<?php
//require_once '../config/db.php';
?>

<!--header-->
<?php
require '../tpl/header.php'
?>
<!--end header-->

<!--ModalWindow-->
<?php
require '../tpl/ModalWindow.php'
?>
<!--end ModalWindow-->

<!--buttons add, edit, search-->
<?php
require '../tpl/panel.php'
?>
<!--end buttons add, edit, search-->

<!-- table -->
<?php
require '../tpl/table.php';
?>
<!-- end table -->

<!--footer-->
<?php
require '../tpl/footer.php';
?>
<!--end footer-->