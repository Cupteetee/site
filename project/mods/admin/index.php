<?php
$act = isset($_GET["act"]) ? $_GET["act"] : "";

function activeURL($act, $str)
{
    return ($act == $str) ? "active" : "";
}

function queryServices()
{
    $query = mysqli_query($GLOBALS['link'], "SELECT * FROM services");

    while ($arr[] = mysqli_fetch_assoc($query)) {
    }

    return $arr;
}

function itemDelete()
{
    if (!isset($_POST["itemDelete"]) || !isset($_POST["itemID"])) return;

    $id = mysqli_real_escape_string($GLOBALS["link"], $_POST["itemID"]);

    mysqli_query($GLOBALS["link"], "DELETE FROM services WHERE id = '{$id}'");
}

function itemRewrite()
{
    if (!isset($_POST["itemRewrite"]) || !isset($_POST["itemID"]) || !isset($_POST["itemText"])) return;

    $id = mysqli_real_escape_string($GLOBALS["link"], $_POST["itemID"]);
    $str = mysqli_real_escape_string($GLOBALS["link"], $_POST["itemText"]);

    mysqli_query($GLOBALS["link"], "UPDATE services SET title = '{$str}' WHERE id = '{$id}'");
}


function itemCreate()
{
    if (
        !isset($_POST["itemCreate"]) ||
        !isset($_POST["itemTitle"]) ||
        !isset($_POST["itemLinkPage"]) ||
        !isset($_POST["itemLinkIco"]) ||
        !isset($_POST["itemNumMenu"]) ||
        !isset($_POST["itemNumMain"])
    )

        return;

    $itemTitle = mysqli_real_escape_string($GLOBALS["link"], $_POST["itemTitle"]);
    $itemLinkPage = mysqli_real_escape_string($GLOBALS["link"], $_POST["itemLinkPage"]);
    $itemLinkIco = mysqli_real_escape_string($GLOBALS["link"], $_POST["itemLinkIco"]);
    $itemNumMenu = mysqli_real_escape_string($GLOBALS["link"], $_POST["itemNumMenu"]);
    $itemNumMain = mysqli_real_escape_string($GLOBALS["link"], $_POST["itemNumMain"]);

    mysqli_query($GLOBALS["link"], "INSERT INTO services (
        id, title, icon, link, turnNav, turnContent
    ) VALUES (
        NULL, '$itemTitle', '$itemLinkIco', '$itemLinkPage', '$itemNumMenu', '$itemNumMain'
    )");
}

?>
<div class="container mt-5 mb-5"></div>
<div class="container mt-3 mb-5 h3">
    Административная панель
</div>

<div class="container">
    <div class="admin-frame d-flex justify-content-around">
        <div class="panel-nav" style="width: 200px">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action <?= activeURL($act, 'services'); ?>"
                   href="?login=admin&act=services">Сервисы</a>
                <a class="list-group-item list-group-item-action <?= activeURL($act, 'contacts'); ?>"
                   href="?login=admin&act=contacts">Контакты</a>
            </div>
        </div>
        <div class="admin-function shadow-sm" style="width: 750px;">
            <?php
            if ($act == "services") {
                ?>
                <h6 class="p-2 pt-3 pb-3 bg-success">Редактирование услуги</h6>

                <table class="table" style="font-size: 15px">
                    <thead>
                    <tr class="bg-info">
                        <!--                        <th>#</th>-->
                        <th>Услуга</th>
                        <th>Редактирование</th>
                        <th>Удаление</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    itemCreate();
                    itemRewrite();
                    itemDelete();//удаляем существующие записи
                    $serv = queryServices();//получаем все существующие записи

                    for ($i = 0; $i < count($serv) - 1; $i++) {
                        ?>
                        <tr>
                            <!--                            <th scope="row">--><?//=$serv[$i]["id"]?><!--</th>-->
                            <td><?= $serv[$i]["title"] ?></td>
                            <td>

                                <form action="?login=admin&act=services" method="post" class="form-row">
                                    <input type="hidden" name="itemRewrite">
                                    <input type="hidden" value="<?= $serv[$i]["id"] ?>" name="itemID">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control btn-sm pt-0 pb-0 h-100" name="itemText"
                                               placeholder="введите текст" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-sm">изменить</button>
                                    </div>
                                </form>

                            </td>
                            <td>
                                <form action="?login=admin&act=services" method="post">
                                    <input type="hidden" name="itemDelete">
                                    <input type="hidden" value="<?= $serv[$i]["id"] ?>" name="itemID">
                                    <button type="submit" class="btn btn-danger btn-sm">удалить</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>

                <h6 class="p-2 pt-3 pb-3 bg-success">Добавление услуги</h6>
                <div class="container">
                    <form class="m-3" action="?login=admin&act=services" method="post">
                        <input type="hidden" name="itemCreate">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault01">Название</label>
                                <input type="text" name="itemTitle" class="form-control" placeholder="Название"
                                       required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Адрес страницы с услугой</label>
                                <input type="text" name="itemLinkPage" class="form-control" placeholder="Cсылка"
                                       required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationDefault02">Адрес иконки</label>
                                <input type="text" name="itemLinkIco" class="form-control" placeholder="Иконка"
                                       required>
                            </div>
                            <div class="mb-3 mr-3">
                                <label for="validationDefaultUsername">Порядковый номер (меню)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend2">№</span>
                                    </div>
                                    <input type="text" name="itemNumMenu" class="form-control" placeholder="Номер"
                                           aria-describedby="inputGroupPrepend2">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationDefaultUsername">Порядковый номер (главная)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend2">№</span>
                                    </div>
                                    <input type="text" name="itemNumMain" class="form-control" placeholder="Номер"
                                           aria-describedby="inputGroupPrepend2">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">добавить</button>
                    </form>
                </div>


                <?php
            } else if ($act == "contacts") {
                ?>

                <div class="w-100 h-100 d-flex justify-content-center align-items-center font-weight-bold">
                    Контакты (в разработке...)
                </div>

                <?php
            }
            ?>
        </div>
    </div>
</div>

