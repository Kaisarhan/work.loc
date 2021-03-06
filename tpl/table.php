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
                $currentPage = htmlspecialchars($_GET['page']);
            }else{
                $currentPage = 1;
            }
            if (ctype_digit($currentPage) == false) {
                $currentPage = 1;
                // echo "не правельный адрес";                                                                             //не забыть до делать фитчи для того что бы когда не правельный GET запросы отправляли (инекций)
            }



            $showRecordPerPage = 20;
            $startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage; // (1*5)-5=0
            //$totalEmpSQL = "SELECT * FROM jurnarelements"; //
            $jurnalTables = mysqli_query($connect, "SELECT * FROM `jurnarelements`");
            $totalEmployee = mysqli_num_rows($jurnalTables); // выводит количество строк в табице
            $lastPage = ceil($totalEmployee/$showRecordPerPage);// 100/5=20

            $firstPage = 1;
            $nextPage = $currentPage + 1; //1+1=2
            $previousPage = $currentPage - 1; //1-1=0
            //$empSQL = "SELECT * FROM `jurnarelements` LIMIT $startFrom, $showRecordPerPage";
            //  $jurnalTables = mysqli_query($connect, "SELECT * FROM `jurnarelements` LIMIT $startFrom, $showRecordPerPage");

            //////////////////////////////////////////////////////////////////////////////////////////////////////////////



            //  $countQuery = mysqli_query($connect,"SELECT COUNT(*) FROM `jurnarelements`");
            //  $countArray = $countQuery->fetch_array(MYSQLI_NUM);
            // $count = $countArray[0];// вычесления количество записей в Таблице
            //  echo "количество записей ", $count; // количество записей в таблице "jurnarelements"



          //  echo $totalEmployee; // Вывод количество записей в таблице

            // $jurnalTables = mysqli_query($connect, "SELECT * FROM `jurnarelements` LIMIT $Limit OFFSET $Offset");//подключения и выбор всей таблицы
            $jurnalTables = mysqli_query($connect, "SELECT * FROM `jurnarelements` ORDER BY `id` DESC LIMIT $startFrom, $showRecordPerPage");//подключения и выбор всей таблицы
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
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php if($currentPage != $firstPage) { ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
                            <span aria-hidden="true">В начало</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if($currentPage >= 2) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
                <?php } ?>
                <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
                <?php if($currentPage != $lastPage) { ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
                            <span aria-hidden="true">В конец</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</section>

