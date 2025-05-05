<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/shopstyles.css">
    <link rel="stylesheet" type="text/css" href="../css/katalog_drop.css">
    <script defer src="./../js/filterLib.js"></script>
    <script defer src="./../js/moucesFilter.js"></script>
    <title>Комп'ютерні миші</title>
</head>

<body>
    <?php
    include "./components/header.php";
    ?>

    <div class="main">
        <?php
        include "./components/catalogMenu.php";
        ?>

        <div class="container">
            <div class="block-filtr">
                <p>Бренд</p>
                <ul class="brand-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="A4Tech">
                            A4Tech
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="ASUS">
                            ASUS
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Bloody">
                            Bloody
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Hator">
                            Hator
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Logitech">
                            Logitech
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Razer">
                            Razer
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li><label class="filtr-label">
                            <input type="checkbox" value="Vinga">
                            Vinga
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li><label class="filtr-label">
                            <input type="checkbox" value="XSTRIKE ME">
                            XSTRIKE ME
                            <span class="checkmark"></span>
                        </label></li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">

                <p>Максимальний dpi</p>
                <ul class="dpi-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="0-900">
                            До 900 dpi
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="901-2000">
                            901-2000 dpi
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="2001-4000">
                            2001-4000 dpi
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="4001-6000">
                            4001-6000 dpi
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="6001-8000">
                            6001-8000 dpi
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="8001-10000">
                            8001-10000 dpi
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li><label class="filtr-label">
                            <input type="checkbox" value="10001-15000">
                            10001-15000 dpi
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li><label class="filtr-label">
                            <input type="checkbox" value="150001-200000">
                            150001-200000 dpi
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li><label class="filtr-label">
                            <input type="checkbox" value="200001+">
                            Більше 200001 dpi
                            <span class="checkmark"></span>
                        </label></li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">
                <p>Інтерфейс підключення</p>
                <ul class="connection-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="USB">
                            USB
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Bluetooth">
                            Bluetooth
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Радіоканал">
                            Радіоканал
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="PS/2">
                            PS/2
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">
                <p>Кількітсь клавіш</p>
                <ul class="key-count-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="1-3">
                            3 шт.
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="4-6">
                            4-6 шт.
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="7-9">
                            7-9 шт.
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="10-12">
                            10-12 шт.
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="13+">
                            13 шт. і більше
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">
                <p>Колір</p>
                <ul class="color-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Білий">
                            Білий
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Червоний">
                            Червоний
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Рожевий">
                            Рожевий
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Сріблястий">
                            Сріблястий
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Сірий">
                            Сірий
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Синій">
                            Синій
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Чорний">
                            Чорний
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="goods-katalog">
                <?php
                require_once "../php/goodsQuery.php";

                goodsBlocksShow("Mouses");
                ?>
            </div>
        </div>
    </div>

    <?php
    include "./pages/components/footer.php";
    ?>
</body>

</html>