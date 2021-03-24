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
            </tr>
            </thead>

            <tbody>
            <?php

            if (isset($_GET['page'])) {
                $page = htmlspecialchars($_GET['page']);
            }else{
                $page = 1;
            }
            if (ctype_digit($page) == false) {
                $page = 1;
                // echo "не правельный адрес";                                                                             //не забыть до делать фитчи для того что бы когда не правельный GET запросы отправляли (инекций)
            }

            $countQuery = mysqli_query($connect,"SELECT COUNT(*) FROM `jurnarelements`");
            $countArray = $countQuery->fetch_array(MYSQLI_NUM);
            $count = $countArray[0];// вычесления количество записей в Таблице

            $Limit = 10; //количество выводимых результатов на 1-ой странице
            $LimitStart = ($page*$Limit)-$Limit; // с какого место будет выводить записи
            $length = ceil($count/$Limit); // ренешие для разделения по страницам (количество страниц с округлением, фунуция "ceil")

            echo "количество записей ", $count; // количество записей в таблице "jurnarelements"

            /*  $Offset = 10; //количество сколько нужно убрать первые результаты
              $numOffsetPlus = 10;
              $nurOffsetSum = $numOffsetPlus+10;*/



            // $jurnalTables = mysqli_query($connect, "SELECT * FROM `jurnarelements` LIMIT $Limit OFFSET $Offset");//подключения и выбор всей таблицы
            $jurnalTables = mysqli_query($connect, "SELECT * FROM `jurnarelements` ORDER BY `id` DESC LIMIT $LimitStart, $Limit");//подключения и выбор всей таблицы

            function pagination ($length, $page){ //количество страниц, get параметр страницы
                if ($length < 5){ // если 10 < 5  тогда
                    foreach (range(1, $length) as $p)
                        echo '<li class="page-item"><a class="page-link" href="?page='.$p.'">'.$p. '</a></li>';
                }
                if ($length > 4 && $page <5){ //если страницы болтше 4-х и
                    foreach (range(1, 5) as $p)
                        echo '<li class="page-item"><a class="page-link" href="?page='.$p.'">'.$p. '</a></li>';
                }
                if ($length - 5 < 5 && $page >5 && $length - 5 > 0){
                    foreach (range($length - 4, $length) as $p)
                        echo '<li class="page-item"><a class="page-link" href="?page='.$p.'">'.$p. '</a></li>';
                }
                if ($length > 4 && $length - 5 < 5 && $page == 5){  // тут надо доработать
                    foreach (range($page - 2, $length) as $p)
                        echo '<li class="page-item"><a class="page-link" href="?page='.$p.'">'.$p. '</a></li>';
                }
                if ($length > 4 && $length - 5 > 5 && $page >= 5 && $page <= $length - 4){
                    foreach (range($page - 2, $page +2) as $p)
                        echo '<li class="page-item"><a class="page-link" href="?page='.$p.'">'.$p. '</a></li>';
                }
                if($length > 4 && $length-5 > 5 && $page > $length -4){
                    foreach (range($length - 4, $length) as $p)
                        echo '<li class="page-item"><a class="page-link" href="?page='.$p.'">'.$p. '</a></li>';
                }
            }



            $jurnalTables = mysqli_fetch_all($jurnalTables); //вывод обьека в нормальном виде массива
            foreach ($jurnalTables as $jurnalTable ) {//используем цикл для вывода таблицы по нужным нам полям
                ?>
                <tr>
                    <th scope="row"><?= $jurnalTable[0]?></th>
                    <td><?= $jurnalTable[1]?></td>
                    <td><?= $jurnalTable[2]?></td>
                    <td><?= $jurnalTable[3]?></td>
                    <td><?= $jurnalTable[4]?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php
                pagination ($length, $page);
                ?>
            </ul>
        </nav>
    </div>

</section>