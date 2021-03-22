<?php
    session_start();
    require_once '../config/db.php';

//$login = "admin";
//$password = "123123123";
$login = $_POST["login"];
$password = $_POST["password"];

if ($_SESSION["login"] == $login && $_SESSION["password"] == $password){
    header('Location: /admin/contant.php');
}

?>
<!--header-->
<?php
require '../tpl/header.php'
?>
<!--end header-->



<form action="../adrc/login.php" method="post">
    <div class="container ObjCentr">
        <div class="author">
            <h2>Аваторизация Админ панели</h2>
            <div class="LogPass">
                <div class="form-floating mb-3">
                    <input type="login" name="login" class="form-control" id="floatingInput" placeholder="Login">
                    <label for="floatingInput">Login</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="btnLog">
                    <button type="submit" class="btn btn-primary">Назад</button>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </div>
            </div>
            <div class="alert alert-warning" role="alert">
                Это уведомление-предупреждение с <a href="#" class="alert-link">примером ссылки</a>.
            </div>
        </div>
    </div>
    <pre>
    <?php
    echo  $password;
    echo $login;
    ?>
        </pre>
</form>



