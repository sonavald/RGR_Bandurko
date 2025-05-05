<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/shopstyles.css">
    <link rel="stylesheet" type="text/css" href="../css/katalog_drop.css">
    <script defer src="./../js/filterLib.js"></script>
    <script defer src="./../js/headphonesFilter.js"></script>
    <title>Навушники</title>

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
                            <input type="checkbox" value="GamePro">
                            GamePro
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="JBL">
                            JBL
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="JBL">
                            JVC
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li><label class="filtr-label">
                            <input type="checkbox" value="Logitech">
                            Logitech
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li><label class="filtr-label">
                            <input type="checkbox" value="Razer">
                            Razer
                            <span class="checkmark"></span>
                        </label></li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">

                <p>Тип</p>
                <ul class="headphone-type-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Вкладиші">
                            Вкладиші
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Вакуумні">
                            Вакуумні
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Накладні">
                            Накладні
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Повнорозмірні">
                            Повнорозмірні
                            <span class="checkmark"></span>
                        </label>
                    </li>

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
                            <input type="checkbox" value="mini-Jack (3.5 мм)">
                            mini-Jack (3.5 мм)
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">

                <p>Мікрофон</p>
                <ul class="microphone-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="На кабелі">
                            На кабелі
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Вбудований в корпус">
                            Вбудований в корпус
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Винесений на корпус">
                            Винесений на корпус
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="На дужці">
                            На дужці
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
                require "./../php/goodsQuery.php";
                goodsBlocksShow("headphones");
                ?>
            </div>
        </div>
    </div>

    <?php
    include "./pages/components/footer.php";
    ?>
</body>

</html>