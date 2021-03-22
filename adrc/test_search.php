<?php
require_once '../config/db.php';
$search = $_GET['searchInput'];
$faim = $_POST['faim'];
$serial = $_POST['serial'];
$additionally = $_POST['additionally'];
$comment = $_POST['comment'];

mysqli_query($connect, "SELECT * FROM `jurnarelements` WHERE `faim` LIKE '%$search%'");

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- my css -->
    <link  href="/css/dist/style.css" rel="stylesheet">

    <title>Поиск: <?php echo $_GET['searchInput']?></title>
</head>
<body>

<!-- modal window add db -->
<form action="create.php" method="post">
    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Введите информацию по вашему оборудованию</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input name="faim" type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" >
                        <label for="floatingInputValue">Фамилия и Имя</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="serial" type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" >
                        <label for="floatingInput">Серийный номер устройства</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input  name="additionally" type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" >
                        <label for="floatingInput">Дополнительно</label>
                    </div>
                    <div class="form-floating">
                        <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Комментарий</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- end modal window add db -->

<!-- modal window update db -->
<form action="adrc/update.php" method="post">
    <div class="modal fade" id="myModalUpdate" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Заполните нужные поля для редактирования</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $jurnalTabl['id'] ?>">
                    <div class="form-floating mb-3">
                        <input name="faim" type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="<?=$jurnalTabl['faim']?>">
                        <label for="floatingInputValue">Фамилия и Имя</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="serial" type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com"  value="<?= $jurnalTabl['serial'] ?>">
                        <label for="floatingInput">Серийный номер устройства</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input  name="additionally" type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="<?= $jurnalTabl['additionally'] ?>">
                        <label for="floatingInput">Дополнительно</label>
                    </div>
                    <div class="form-floating">
                        <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?= $jurnalTable['comment'] ?></textarea>
                        <label for="floatingTextarea2">Комментарий</label>
                    </div>
                </div>

                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Назад</button>-->
                    <button type="submit" class="btn btn-primary">Редактировать</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- end modal window update db -->


<!-- buttons add, btnHome, search -->
<section class="form_add_elemets">
    <h1 class="Title_name">Журнал для ведения учета USB</h1>
    <div class="container form_buttons">
        <div class="add_del">
            <button type="button" class="btn btn-success" id="myInput" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-whatever="@mdo">Добавить запись</button>
            <button type="submit" onclick="window.location.href='/'" class="btn btn-success">Полный список</button>
        </div>
        <!--<form action="post" action="adrc/searchLogic.php" id="search">-->
        <div class="search">
            <!--<input class="form-control mr-sm-2" type="search" name="search" placeholder="Пойск..." aria-label="Search">
            <button type="submit" name="subBtn" class="btn btn-outline-success">Найти</button>-->
            <form class="d-flex" method="get" action="test_search.php" id="search">
                <input class="form-control me-2" type="search" name="searchInput" placeholder="Пойск..." aria-label="Search">
                <button type="submit" class="btn btn-outline-success">Найти</button>
            </form>
        </div>
        <!-- </form>-->



        <!--<form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>-->

    </div>
</section>
<!-- end buttons add, edit, search -->

<!-- tabel -->
<h2 class="searchTitle">Поискавой запрос: <? echo $_GET['searchInput']?></h2>
<section>
    <div class="container">
        <table class="table table-dark table-hover border">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Фамилия и Имя</th>
                <th scope="col">Серийный номер</th>
                <th scope="col">Дополнительно</th>
                <th scope="col">Комментарий</th>
                <th scope="col">Удаление из журнала</th>
            </tr>
            </thead>

            <tbody>
            <?php
            $jurnalTables = mysqli_query($connect, "SELECT * FROM `jurnarelements` WHERE `faim` LIKE '%$search%' OR `serial` LIKE '%$search' OR `additionally` LIKE '%$search%' OR `comment` LIKE '%$search%'");//подключения и выбор из всей таблицы
            $jurnalTables = mysqli_fetch_all($jurnalTables); //вывод обьека в нормальном виде массива
            foreach ($jurnalTables as $jurnalTable ) {//используем цикл для вывода таблицы по нужным нам полям
                ?>
                <tr>
                    <th scope="row"><?= $jurnalTable[0]?></th>
                    <td><?= $jurnalTable[1]?></td>
                    <td><?= $jurnalTable[2]?></td>
                    <td><?= $jurnalTable[3]?></td>
                    <td><?= $jurnalTable[4]?></td>
                    <td><!--<button type="button" class="btn btn-success" id="myInput" data-bs-toggle="modal" data-bs-target="#myModalUpdate" data-bs-whatever="@mdo">Редактировать</button>-->

                        <a href="../update.php?id=<?= $jurnalTable[0] ?>">Редактировать</a> / <a href="delete.php?id=<?= $jurnalTable[0] ?>">Удалить</a>


                        <!--<a href="" data-bs-toggle="modal" data-bs-target="#myModalUpdate">Редактировать</a>--></td>
                </tr>
                <?php
            }
            ?>
            </tbody>


        </table>
    </div>
</section>
<!-- end table -->







<!-- my JS -->
<script src="/js/style.js"> </script>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
