<?php
    session_start();

    unset($_SESSION["login"]); //уничтожения логина и пароля из кеш памяти (session)
    unset($_SESSION["password"]);

header('location:../admin');