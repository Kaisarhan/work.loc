<?php ?>
<!-- modal window add db -->
<form action="adrc/create.php" method="post">
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
<form action="../adrc/update.php" method="post">
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
