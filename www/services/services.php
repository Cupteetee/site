<?php
include "../../project/connect.php";
include "../../project/mods/service/servicesMenu.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <meta name="description" content="Производство наружной рекламы в Уфе. Изготовление сувенирной продукции, воздушных шаров с рисунками и логотипами.">
    <meta name="keywords" content="наружная реклама, воздушные шарики, баннер, печать на футболках, фотообои">
    <link rel="shortcut icon" href="../image/favicon.png" type="image/png">
    <title>РЕАЛ - рекламное агенство</title>
    <link href="../css/general.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Roboto:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.menuToggle').on('click', function() {
                $('.menu').slideToggle(300, function(){
                    if( $(this).css('display') === "none"){
                        $(this).removeAttr('style');
                    }
                });
            });
        });
    </script>
</head>
<body>
<header class="header">
    <div class="static">
        <div class="container">
            <div class="wrapper">
                <div class="burger">
                    <div class="menuToggle"><img src="../image/menu-button-white.png" class="burger-menu"></div>
                    <ul class="menu">
                        <li><a href="../index.php">Главная</a></li>
                        <li><a href="services.php">Услуги</a></li>
                        <li><a href="../portfolio.php">Портфолио</a></li>
                        <li><a href="../customer.php">Клиентам</a></li>
                        <li><a href="../index.php#contacts">Контакты</a></li>
                    </ul>
                </div>
                <img src="../image/logo.png" class="logo">
                <nav class="top-menu">
                    <ul id="menu">
                        <li><a href="../index.php">Главная</a></li>
                        <li><a href="services.php">Услуги</a></li>
                        <li><a href="../portfolio.php">Портфолио</a></li>
                        <li><a href="../customer.php">Клиентам</a></li>
                        <li><a href="../index.php#contacts">Контакты</a></li>
                    </ul>
                </nav>
                <div class="top-info">
                    <p>info@real-ufa.ru<br>
                        real-ufa@yandex.ru</p>
                    <p>+7 (347) 274-06-45<br>
                        +7 (901) 810-90-70</p>
                </div>
                <img src="../image/logo.png" class="burger-logo">
            </div>
        </div>
    </div>
</header>
<section class="footer-glue for-first-section">
    <div class="container">
        <div class="wrapper-two-column">
            <aside class="sidebar">
                <h1 class="our-title">Наши услуги</h1>
                <div class="service-burger">
                    <div>
                        <img src="../image/menu-button.png">
                        <h1>Наши услуги</h1>
                    </div>
                </div>
                <ul class="service-menu">
                    <?php
                    $serv = viewServicesMenu();//

                    for ($i = 0; $i < count($serv)-1; $i++) {
                        ?>
                        <li><a href="../<?=$serv[$i]["link"];?>"><?=$serv[$i]["title"];?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </aside>
            <div id="ServiceChange">
                <img src="../image/banner.jpg">
                <h1>Широкоформатная печать</h1>
                <p>Широкоформатная печать – это печать изображений шириной до 3м и более (в склейку), которое применяется в наружной рекламе при любой погоде в любое время года. Стойкость печати на материалах европейских производителей достигает трех лет. Для краткосрочного использования можно применять китайские материалы. Материалы выдерживают воздействие ультрафиолетовых лучей, атмосферных осадков и температурных изменений.</p>
                <p>Широкоформатная печать осуществляется на собственной производственной базе на самых разнообразных материалах. «Реал» предоставляет следующие услуги:</p>
                <ul>
                    <li>Печать на баннерной ткани (производители: Европа, Китай, 330, 430 и 550гр). Он бывает матовым или глянцевым, блокирующим или светопропускающим, для долгосрочного и краткосрочного применения. Баннеры используются в наружной рекламе на магистральных щитах (щиты 3х6, 3х12, суперсайты, арки) и в крупноформатной рекламе (брандмауэры, оформление строительных лесов, фасадов зданий);</li>
                    <li>Печать на пленке (матовая, глянцевая, прозрачная, транслюсцентная, перфорированная для витрин). Пленка используется при изготовлении вывесок и лайтбоксов, и при оформлении витрин и выставочных стендов. Кроме того, пленка широко применяется в рекламе на транспорте и напольной графике.</li>
                    <li>Печать на бумаге (постерная 115-150 гр., для наружного применения, европейских производители). Этот способ печати используется для создания изображений, которые нужны рекламодателю на короткий срок, например, для выставки.</li>
                    <li>Печать на виниловой сетке (европейских производителей). Этот материал чаще используется для печати брандмауэрных панно больших размеров. Легкая структура материала позволяет изготавливать плакаты размерами в сотни квадратных метров, а также использовать для интересных дизайнерских решений.</li>
                </ul>
                <p>Цех широкоформатной печати и постпечатной обработки работают с 9.00 до 21.00ч., что позволяет выполнять заказы в кратчайшие сроки. Средний срок выполнения заказа составляет 1-2 дня. Современные методы печати позволяют создавать красочные плакаты любого размера и сложности.</p>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="wrapper">
            <div class="copy">
                <p>
                    ООО&nbsp;"Реал"&nbsp;&copy;&nbsp;2019<br>
                    г.&nbsp;Уфа,&nbsp;ул.&nbsp;Народная&nbsp;18
                </p>
            </div>
            <div class="footer-info">
                <div class="footer-spread">
                    <p>
                        +7 (347) 274-06-45<br>
                        +7 (901) 810-90-70
                    </p>
                </div>
                <div class="footer-spread">
                    <p>
                        info@real-ufa.ru<br>
                        real-ufa@yandex.ru
                    </p>
                </div>
                <div>
                    <p class="footer-spread-time">
                        Время работы:<br>
                        с 9:30 до 17:30
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    $(function(){
        $('.service-burger').on('click', function() {
            $('.service-menu').slideToggle(300, function(){
                if( $(this).css('display') === "none"){
                    $(this).removeAttr('style');
                }
            });
        });
    });
</script>
</body>
</html>
