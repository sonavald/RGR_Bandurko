<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/shopstyles.css">
    <link rel="stylesheet" type="text/css" href="../css/katalog_drop.css">
    <script defer src="./../js/filterLib.js"></script>
    <script defer src="./../js/keyboardsFilter.js"></script>
    <title>Клавіатури</title>

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
                            <input type="checkbox" value="Asus">
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
                            <input type="checkbox" value="Game Pro">
                            Game Pro
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Keychrone">
                            Keychrone
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

                <p>Форм-фактор</p>
                <ul class="form-factor-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Повнорозмірна">
                            Повнорозмірна
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Компатна">
                            Компатна
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="65%">
                            Розмір 65%
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li><label class="filtr-label">
                            <input type="checkbox" value="60%">
                            Розмір 60%
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
                            <input type="checkbox" value="PS/2">
                            PS/2
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">

                <p>Тип клавіатури</p>
                <ul class="key-type-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Механічна">
                            Механічна
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Мембранна">
                            Мембранна
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Оптична">
                            Оптична
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
                goodsBlocksShow("Keyboards");
                ?>
            </div>
        </div>

    </div>

    <div class="footer">
        <div class="logo_footer">
            <div><img class="logo" src="../images/logo/Logo_dark.png"></div>
            <div>
                <h1>CyberGear</h1>
            </div>
        </div>
        <ul class="footer_nav">
            <li><a class="a_nav" href="../index.html">Головна</a></li>
            <li><a class="a_nav" href="../pages/contacts.html">Контакти</a></li>
            <li><a class="a_nav" href="../pages/about.html">Про нас</a></li>
        </ul>
        <img src="../images/logo/inst.svg" height="30px" style="position: absolute; right: 50px; bottom: 90px;">
        <ul class="license">
            <li>© 2024 Your Website. All rights reserved.</li>
            <li>Privacy Policy</li>
            <li>Terms of Service</li>
        </ul>
    </div>
</body>

</html>