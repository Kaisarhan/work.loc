<!-- buttons add, edit, search -->
<section class="form_add_elemets">
    <h1 class="Title_name">Журнал для ведения учета USB</h1>
    <div class="container form_buttons">
        <div class="add_del">
            <a class="btn btn-outline-danger" href="../adrc/logOut.php" role="button" title="Выйти из Админ панели"><i class="bi bi-box-arrow-left"></i></a>
            <a class="btn btn-primary" href="/" role="button" title="Гостевая панель"><i class="bi bi-person-lines-fill"></i></a>
            <a class="btn btn-success" href="/admin" role="button" title="Полный список"><i class="bi bi-file-text"></i></a>
            <button type="button" class="btn btn-success" id="myInput" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-whatever="@mdo" title="Добавить новую запись"><i class="bi bi-clipboard-plus"></i></button>
        </div>
        <div class="search">
            <form class="d-flex" method="get" action="searchAd.php" id="search">
                <input class="form-control me-2" type="search" name="searchInput" placeholder="Пойск..." aria-label="Search">
                <button type="submit" class="btn btn-outline-success">Найти</button>
            </form>
        </div>
    </div>
</section>

