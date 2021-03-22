<?php
?>
<!-- buttons add, edit, search -->
<section class="form_add_elemets">
    <h1 class="Title_name">Журнал для ведения учета USB</h1>
    <div class="container form_buttons">
        <div class="add_del">
            <button type="button" class="btn btn-success" id="myInput" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-whatever="@mdo">Добавить запись</button>
            <!-- <button type="button" class="btn btn-success">Редактировать</button> -->
        </div>
        <!--<form action="post" action="adrc/searchLogic.php" id="search">-->
        <div class="search">
            <!--<input class="form-control mr-sm-2" type="search" name="search" placeholder="Пойск..." aria-label="Search">
            <button type="submit" name="subBtn" class="btn btn-outline-success">Найти</button>-->
            <form class="d-flex" action="adrc/test_search.php" id="search">
                <input class="form-control me-2" name="searchInput" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
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
