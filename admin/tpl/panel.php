<?php
?>
<!-- buttons add, edit, search -->
<section class="form_add_elemets">
    <h1 class="Title_name">Журнал для ведения учета USB</h1>
    <div class="container form_buttons">
        <div class="add_del">
            <a class="btn btn-outline-danger" href="../adrc/logOut.php" role="button" title="Выйти из Админ панели"><i class="bi bi-box-arrow-left"></i></a>
            <a class="btn btn-primary" href="/" role="button" title="Гостевая панель"><i class="bi bi-person-lines-fill"></i></a>
            <button type="button" class="btn btn-success" id="myInput" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-whatever="@mdo" title="Добавить новую запись"><i class="bi bi-clipboard-plus"></i></button>
        </div>
        <div class="search">
            <form class="d-flex" action="adrc/searchAd.php" id="search">
                <input class="form-control me-2" name="searchInput" type="search" placeholder="Пойск..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Найти</button>
            </form>
        </div>
    </div>
</section>
<!-- end buttons add, edit, search -->
