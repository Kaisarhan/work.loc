<?php
require_once 'config/db.php';

$table_id = $_GET['id'];
$jurnalTable = mysqli_query($connect, "SELECT * FROM `jurnarelements` WHERE `id` = '$table_id'");
$jurnalTable = mysqli_fetch_assoc($jurnalTable);
print_r($table_id);
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

    <title>Редактировать</title>
</head>
<body>
<!-- modal window update db -->
<form action="adrc/update.php" method="post">
    <div class="modal_fade" id="myModalUpdate" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Заполните нужные поля для редактирования</h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $jurnalTable['id']?>">
                    <div class="form-floating mb-3">
                        <input name="faim" type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="<?= $jurnalTable['faim']?>">
                        <label for="floatingInputValue">Фамилия и Имя</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="serial" type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com"  value="<?= $jurnalTable['serial']?>">
                        <label for="floatingInput">Серийный номер устройства</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input  name="additionally" type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="<?= $jurnalTable['additionally']?>">
                        <label for="floatingInput">Дополнительно</label>
                    </div>
                    <div class="form-floating">
                        <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?= $jurnalTable['comment']?></textarea>
                        <label for="floatingTextarea2">Комментарий</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Назад</button>
                    <button type="submit" class="btn btn-primary">Редактировать</button>
                </div>
            </div>
       </div>
    </div>
</form>
<!-- end modal window update db -->

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