<?php
    session_start();
    require_once '../config/db.php';

    //если $_SESSION["login"] ровняется не NULL и $_SESSION["password"] ровняется не NULL тогда переходим в contant.php
if ($_SESSION["login"] == !null && $_SESSION["password"] == !null){
    header('Location: /admin/contant.php');
}

/*if ($_SESSION["login"] == $login && $_SESSION["password"] == $password){
    header('Location: /admin/contant.php');
} else{
    echo var_dump($_SESSION);
}       //не забыть разкомментировать*/

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
                    <button type="submit" class="btn btn-primary">Главная</button>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </div>
            </div>
                    <?php

                        if ($_SESSION['msg']) {
                            echo '<div class="alert alert-warning msg" role="alert"> <p>'. $_SESSION['msg'] .'</p>';
                        }
                        unset($_SESSION['msg']);
                    ?> <!--<a href="#" class="alert-link">примером ссылки</a>.-->
            </div>
        </div>
    </div>
</form>



