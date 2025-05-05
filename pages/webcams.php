<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/shopstyles.css">
    <link rel="stylesheet" type="text/css" href="../css/katalog_drop.css">
    <title>Веб-камери</title>

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
                <ul id="#input-company-list">
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox">
                            A4tech
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox">
                            
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox">
                            
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox">
                            
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox">
                            
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li>
                        <label class="filtr-label">
                            <input type="checkbox">
                            
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li><label class="filtr-label">
                            <input type="checkbox">
                            
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li><label class="filtr-label">
                            <input type="checkbox">
                            
                            <span class="checkmark"></span>
                        </label></li>
                </ul>
                <hr width="100%" noshade size="2" color="#202020" style="margin-top: -2px; margin-bottom: -3px">
            </div>
            <div class="goods-katalog">
                <h1 style="height:459px">Сторінка в розробці.</h1>
                <?php
                require "./../php/goodsQuery.php";
                goodsBlocksShow("Microphones");
                ?>
            </div>
        </div>
    </div>

    <?php
    include "./components/footer.php";
    ?>
</body>

</html>