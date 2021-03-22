<?php
$connect = mysqli_connect('localhost','root','root','jurnal') or die('Ой Ёй что-то не так с плдключениям БД');
mysqli_set_charset($connect, 'utf8') or die("Can't set sharset");