<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/shopstyles.css">
    <link rel="stylesheet" type="text/css" href="../css/katalog_drop.css">
    <script defer src="./../js/filterLib.js"></script>
    <script defer src="./../js/monitorsFilter.js"></script>
    <title>Монітори</title>
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
                <ul class="brend-list">
                    <li class="brend-list-item" data-id="acer">
                        <label class="filtr-label">
                            <input type="checkbox" value="Acer">
                            Acer
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="brend-list-item" data-id="asus">
                        <label class="filtr-label">
                            <input type="checkbox" value="Asus">
                            ASUS
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Gigabyte">
                            Gigabyte
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="MSI">
                            MSI
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="Samsung">
                            Samsung
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">

                <p>Частота оновлення</p>
                <ul class="frequency-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="60-74">
                            60-74 Гц
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="75-94">
                            75-94 Гц
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="100-143">
                            100-143 Гц
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="144-165">
                            144-165 Гц
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="166-239">
                            166-239 Гц
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="240+">
                            240 Гц і більше
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">

                <p>Тип матриці</p>
                <ul class="matrix-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="IPS">
                            IPS
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="VA">
                            VA
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="TN">
                            TN
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="OLED">
                            OLED
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">

                <p>Роздільна здатність</p>
                <ul class="resolution-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="1920x1080">
                            Full HD (1920x1080)
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="2560x1440">
                            Quad HD 2K (2560x1440)
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="3440x1440">
                            Ultra Wide QHD (3440x1440)
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox" value="3840x2160">
                            Ultra HD 4K (3840x2160)
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
                            <input type="checkbox" value="Сірий">
                            Сірий
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
                goodsBlocksShow("Monitors");
                ?>
            </div>
        </div>
    </div>

    <?php
    include "./pages/components/footer.php";
    ?>
</body>

</html>