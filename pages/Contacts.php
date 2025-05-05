<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../css/contacts.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <title></title>

</head>

<body>
    <?php
    include "./components/header.php"
    ?>
    <div class="main">
        <div class="container">
            <h3>Контакти</h3>
            <div>
                <img src="../images/logo/phone.svg" width="30px" height="30px">
                <p>Call-центр</p>
            </div>
            <div class="contacts-call-center">
                <div>
                    <p>+38 (067) 000-00-00<br>+38 (044) 000-00-00</p>
                </div>
                <div>
                    <p>sekocall@gmail.com<br>
                        <span>З загальних питань</span>
                    </p>
                </div>
                <div><span>Call-центр працює: <br>Пн-Пт: 09:00-20:00<br>Сб-Нд: 10:00-20:00</span></div>
            </div>
            <hr color="#766F74" size="1" noshade>
            <div>
                <img src="../images/logo/service.png" width="35px" height="35px">
                <p>Сервісний центр</p>
            </div>
            <div class="contacts-call-center">
                <div>
                    <p>+38 (097) 000-00-00</p>
                </div>
                <div>
                    <p>sekoservice@gmail.com<br>
                        <span>обмін/повернення та<br>гарантіне обслуговування</span>
                    </p>
                </div>
                <div>
                    <span>Сервіс-констультант<br>працює: <br>Пн-Пт: 09:00-18:00</span>
                </div>
            </div>

        </div>
        <div class="map">
            <h3>Наш магазин тут</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5349.026934203708!2d33.3832219!3d47.9071015!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40db20a4d0482681%3A0xd24b74a890f83ff0!2z0L_RgNC-0YHQv9C10LrRgiDQnNC40YDRgywgMjksINCa0YDQuNCy0LjQuSDQoNGW0LMsINCU0L3RltC_0YDQvtC_0LXRgtGA0L7QstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA1MDAwMA!5e0!3m2!1suk!2sua!4v1732982164944!5m2!1suk!2sua" width="102%" height="450" style="border-radius: 9px; border: 1px #766f74 solid; margin-left: -15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <?php
    include "./components/footer.php";
    ?>
</body>

</html>