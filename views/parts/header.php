<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>E-SHOPPER</title>
    <link href="<?php SITE_PATH?>/template/css/main.css" rel="stylesheet">
    <script src="<?php SITE_PATH?>/template/js/jquery-3.1.1.min.js"></script>

    <script type="text/javascript" src="<?php SITE_PATH?>/template/js/fancybox2/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php SITE_PATH?>/template/js/fancybox2/jquery.fancybox.css" media="screen"/>

    <link rel="stylesheet" type="text/css" href="<?php SITE_PATH?>/template/js/fancybox2/helpers/jquery.fancybox-thumbs.css"
      media="screen"/>


    <script type="text/javascript" src="<?php SITE_PATH?>/template/js/fancybox2/helpers/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="<?php SITE_PATH?>/template/js/fancybox2/helpers/jquery.fancybox-media.js?v=1.0.6"></script>


    <link rel="stylesheet" href="<?php SITE_PATH?>/template/js/jScrollPane/jquery.jscrollpane.css" type="text/css">
    <script src="<?php SITE_PATH?>/template/js/jScrollPane/jquery.jscrollpane.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <!-- <script src="<?php SITE_PATH?>/template/js/FormStyler/jquery.formstyler.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php SITE_PATH?>/template/js/FormStyler/jquery.formstyler.css" type="text/css"> -->

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

    <script src="<?php SITE_PATH?>/template/js/SliderPips/jquery-ui-slider-pips.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php SITE_PATH?>/template/js/SliderPips/jquery-ui-slider-pips.css" type="text/css">

    <script src="<?php SITE_PATH?>/template/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php SITE_PATH?>/template/js/jquery.maskedinput.js" type="text/javascript"></script>

    <script src="<?php SITE_PATH?>/template/js/scripts.js" type="text/javascript"></script>

</head>
<body>

<div id="wrapper">
<header id="header">
    <div class="header_top">
        <ul class="header_top_nav_1">
            <li><a href="#">8-800-555-35-35</a></li>
            <li><a href="#">Email: mistakovalev@gmail.com</a></li>
        </ul>
        <ul class="header_top_nav_2">
            <li><a href="#">FB</a></li>
            <li><a href="#">G+</a></li>
        </ul>
    </div>
    <div class="header_middle">
        <a href="/" class="logo"><img alt="" src="<?php SITE_PATH?>/template/images/logo.png" /></a>

        <ul class="header_middle_nav">
        <?php if(Model_User::isGuest()):?>
            <li><a href="/cart">
                    Корзина
            <!--(<span class="cart_count"><?php /*echo Cart::itemsCount();*/?></span>)   Пока не нужно-->
            </a></li>
            <li><a href="/user/register">Регистрация</a></li>
            <li><a href="/user/login">Вход</a></li>
        <?php else:?>
            <li><a href="/cart">
                    Корзина
                    (<span class="cart_count"><?php echo Model_Cart::itemsCount();?></span>)
                </a></li>
            <li><a href="/cabinet">Личный кабинет</a></li>
            <li><a href="/user/logout">Выход</a></li>
        <?php endif;?>
        </ul>
    </div>
    <div class="header_bottom">
        <ul class="header_bottom_nav">
            <li><a href="/">Главная</a></li>
            <li><a href="/catalog/">Каталог товаров</a></li>
            <li><a href="/cart">Корзина</a></li>
            <li><a href="/pricing/stepone">Расчет цен</a></li>
        </ul>
    </div>
</header>