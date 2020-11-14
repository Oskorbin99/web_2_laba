<!DOCTYPE HTML>
<HTML>
<head>
    <title> Soviet Rock</title>
    <meta charset ="utf-8">
    <link href="style/block.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/data/data_time.js"></script>
    <script type="text/javascript" src="js/time.js"></script>
    <script type="text/javascript" src="js/data/data_dynamicHtml.js"></script>
    <script type="text/javascript" src="js/dynamicHtml.js"></script>
</head>
<body onload="dyn(0)">
<! -- Подключение модуля Реклама -->
<div class="wrapper">
    <div class="one">
        <! -- Подключение модуля Логотип -->
        <?php include "php/logo.php"; ?>
    </div>
    <div class="two">
        <! -- Подключение модуля Контактная_информация -->
        <?php include "php/contact.php"; ?>
    </div>
    <div class="three">
        <! -- Подключение модуля (Бокового) меню -->
        <?php include "php/menu.php"; ?>
    </div>
    <div class="four">
        <! -- Подключение модуля Основого контента -->
        <?php include "php/bodyContent.php"; ?>
    </div>
    <div class="five">
        <! -- Подключение модуля Реклама -->
            <?php include "php/ad.php"; ?>
    </div>
</div>
</body>
</HTML>