<?php
require_once '../config/db.php';
$search = $_GET['searchInput'];
$faim = $_POST['faim'];
$serial = $_POST['serial'];
$additionally = $_POST['additionally'];
$comment = $_POST['comment'];

mysqli_query($connect, "SELECT * FROM `jurnarelements` WHERE `faim` LIKE '%$search%'");

?>
<?php
require '../tpl/searchHeader.php'
?>

<!--buttons add, edit, search-->
<?php
require '../tpl/panelSearch.php'
?>
<!--end buttons add, edit, search-->

<!-- searchTabel -->
<?php
require '../tpl/searchTable.php'
?>
<!-- end searchTabel -->


<?php
require '../tpl/footer.php'
?>

