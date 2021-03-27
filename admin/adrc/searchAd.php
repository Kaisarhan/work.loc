<?php
require_once '../../config/db.php';
$search = $_GET['searchInput'];
$faim = $_POST['faim'];
$serial = $_POST['serial'];
$additionally = $_POST['additionally'];
$comment = $_POST['comment'];

mysqli_query($connect, "SELECT * FROM `jurnarelements` WHERE `faim` LIKE '%$search%'");

?>

<?php
require '../../tpl/searchHeader.php'
?>

<?php
require '../../tpl/ModalWindow.php'
?>

<!--panelSearchAd-->
<?php
require '../tpl/panelSearchAd.php'
?>
<!--end panelSearchAd-->

<!-- searchTableAd -->
<?php
require '../tpl/searchTableAd.php';
?>
<!-- end searchTableAd -->


<?php
require '../tpl/footer.php'
?>
