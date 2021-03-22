<?php
?>
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
            $jurnalTables = mysqli_query($connect, "SELECT * FROM `jurnarelements`");//подключения и выбор всей таблицы
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

                        <a href="../update.php?id=<?= $jurnalTable[0] ?>">Редактировать</a> / <a href="adrc/delete.php?id=<?= $jurnalTable[0] ?>">Удалить</a>


                        <!--<a href="" data-bs-toggle="modal" data-bs-target="#myModalUpdate">Редактировать</a>--></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</section>
