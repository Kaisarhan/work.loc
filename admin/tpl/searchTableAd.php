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
                <th scope="col">Редактировать</th>
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
                    <td>
                        <a href="../update.php?id=<?= $jurnalTable[0] ?>" class="btn btn-primary" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Редактировать"><i class="bi bi-pencil-square"></i></a>
                        <a href="adrc/delete.php?id=<?= $jurnalTable[0] ?>" class="btn btn-danger" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Удалить из журнала"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>


        </table>
    </div>
</section>