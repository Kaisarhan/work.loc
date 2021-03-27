<section class="form_add_elemets">
    <h1 class="Title_name">Журнал для ведения учета USB</h1>
    <div class="container form_buttons">
        <div class="add_del">
            <a class="btn btn-primary" href="/admin" role="button">Admin Panel</a>
        </div>
        <div class="search">
            <form class="d-flex" action="search.php" id="search">
                <input class="form-control me-2" name="searchInput" type="search" placeholder="Найти" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Найти</button>
            <button type="submit" onclick="window.location.href='/'" class="btn btn-success">Полный список</button>
            <a class="btn btn-primary" href="/admin" role="button">Admin Panel</a>
        </div>
        <div class="search">
            <form class="d-flex" method="get" action="search.php" id="search">
                <input class="form-control me-2" type="search" name="searchInput" placeholder="Пойск..." aria-label="Search">
                <button type="submit" class="btn btn-outline-success">Найти</button>
            </form>
        </div>
    </div>
</section>

