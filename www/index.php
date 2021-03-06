<?php
include "../project/connect.php";
include "../project/mods/index/services.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta name="description"
          content="Производство наружной рекламы в Уфе. Изготовление сувенирной продукции, воздушных шаров с рисунками и логотипами.">
    <meta name="keywords" content="наружная реклама, воздушные шарики, баннер, печать на футболках, фотообои">
    <link rel="shortcut icon" href="image/favicon.png" type="image/png">
    <title>РЕАЛ - рекламное агенство</title>
    <link href="css/general.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/swiper.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Roboto:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.menuToggle').on('click', function () {
                $('.menu').slideToggle(300, function () {
                    if ($(this).css('display') === "none") {
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
                    <div class="menuToggle"><img src="image/menu-button-white.png" class="burger-menu"></div>
                    <ul class="menu">
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="services/services.php">Услуги</a></li>
                        <li><a href="portfolio.php">Портфолио</a></li>
                        <li><a href="customer.php">Клиентам</a></li>
                        <li><a href="index.php#contacts">Контакты</a></li>
                    </ul>
                </div>
                <img src="image/logo.png" class="logo">
                <nav class="top-menu">
                    <ul id="menu">
                        <li href="index.php"><a href="index.php">Главная</a></li>
                        <li><a href="services/services.php">Услуги</a></li>
                        <li><a href="portfolio.php">Портфолио</a></li>
                        <li><a href="customer.php">Клиентам</a></li>
                        <li><a href="index.php#contacts">Контакты</a></li>
                    </ul>
                </nav>
                <div class="top-info">
                    <p>info@real-ufa.ru<br>
                        real-ufa@yandex.ru</p>
                    <p>+7 (347) 274-06-45<br>
                        +7 (901) 810-90-70</p>
                </div>
                <img src="image/logo.png" class="burger-logo">
            </div>
        </div>
    </div>
</header>
<section class="first-screen for-first-section">
    <div class="container">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="services/balloons.php"><img src="image/slide-1.jpg"></a></div>
                <div class="swiper-slide"><a href="services/textile_print.php"><img src="image/slide-2.jpg"></a></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
</section>
<section class="second-screen">
    <div class="container">
        <h1>Услуги для Вас!</h1>
        <div class="wrapper">
            <?php
            $serv = viewServicesContent();//

            for ($i = 0; $i < count($serv)-1; $i++) {
                ?>
                <div class="printer">
                    <img src="<?=$serv[$i]["icon"];?>" class="service">
                    <article class="service-text">
                        <h2><?=$serv[$i]["title"];?></h2>
                        <a href="<?=$serv[$i]["link"];?>">ПОДРОБНЕЕ</a>
                    </article>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <hr>
</section>
<section class="about-us">
    <div class="container">
        <h1>Немного о нас</h1>
        <div class="wrapper">
            <div style="margin-top: -10px">
                <p><b>
                        &laquo;РЕАЛ&raquo; &mdash; одно из ведущих рекламных агентств на рынках Уфы и Башкортостана!
                    </b></p>
                <p>
                    Мы выполняем работы точно и в сжатые сроки. А специалисты нашей компании произведут регистрацию
                    вашей рекламы.
                </p>
                <p>
                    Предоставляем огромный спектр услуг в сфере наружной рекламы, интерьерной печати, сувенирной
                    продукции, гравировки и фрезеровки.
                </p>
                <p>
                    Так же мы занимаемся оформлением праздников, общественных мероприятий, культурно-массовых событий
                    городского масштаба. Наши профессионалы прикладывают все силы, что бы создать позитивную атмосферу,
                    которая надолго останется в памяти.
                </p>
                <p>
                    На нашем производстве возможно изготовление изделий из оргстекла и пластика &mdash; визитницы,
                    подставки под мобильные телефоны и тарелки, меню-холдеры, ценникодержатели, ящики для пожертвований.
                </p>
            </div>
            <img src="image/about.jpg">
        </div>
    </div>
    <hr>
</section>
<section class="parthners">
    <div class="container">
        <h1>Наши партнеры</h1>
        <div class="wrapper">
            <img src="image/gorod.png">
            <img src="image/zorge.png">
            <img src="image/cinema-park.png">
            <img src="image/uyuterra.png">
            <img src="image/transneft.png">
        </div>
    </div>
    <hr>
</section>
<a name="contacts"></a>
<section class="contacts">
    <div class="container">
        <h1>Наши контакты</h1>
        <div class="wrapper">
            <div class="contacts-width">
                <div class="contact">
                    <h2>ООО&nbsp;"Реал"</h2>
                    <p><b>Адрес:</b> г.&nbsp;Уфа, ул.&nbsp;Народная&nbsp;18</p>
                    <p><b>Телефон:</b> +7&nbsp;(347)&nbsp;274&#8209;06&#8209;45, +7&nbsp;(901)&nbsp;810&#8209;90&#8209;70
                    </p>
                    <p><b>E-mail:</b> info@real&#8209;ufa.ru, real&#8209;ufa@yandex.ru</p>
                    <br>
                    <p><b>Время работы:</b><br>
                        Понедельник - пятница
                        с&nbsp;9:00&nbsp;до&nbsp;17:30</p>
                </div>
                <div class="send">
                    <p><b>Форма для обратной связи:</b><br>
                    <form action="send0.php" method="POST">
                        <input type="text" name="name" placeholder="Ваше имя">
                        <input type="text" name="phone" placeholder="Ваш телефон">
                        <input type="submit" class="btn">
                    </form>
                </div>
                <div class="bank-info">
                    <h2>Юридическая информация</h2>
                    <p>ИНН: 0278149170</p>
                    <p>КПП: 027801001</p>
                    <p>р/с: 40702810522530000320 в УФИМСКОМ ФИЛИАЛЕ АКБ “АБСОЛЮТ БАНК”&nbsp;(ОАО)</p>
                    <p>БИК: 048073976</p>
                    <p>к/с: 30101810680730000976</p>
                    <p>450015, Россия, Республика Башкортостан, г.Уфа, ул.&nbsp;Революционная&nbsp;д.31 (вход со
                        двора)</p>
                </div>
            </div>
            <div class="map">
                <center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d770.8937023615462!2d55.928027863500894!3d54.735514574950116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d93a6443a0dfbd%3A0x15a42811aae7c9f7!2z0J3QsNGA0L7QtNC90LDRjyDRg9C7LiwgMTgsINCj0YTQsCwg0KDQtdGB0L8uINCR0LDRiNC60L7RgNGC0L7RgdGC0LDQvSwgNDUwMDc2!5e0!3m2!1sru!2sru!4v1555267730236!5m2!1sru!2sru"
                            width="640" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
                </center>
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
<!-- Swiper JS -->
<script src="js/swiper.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>

