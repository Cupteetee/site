<?php
include "../project/connect.php";
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <meta name="description" content="Производство наружной рекламы в Уфе. Изготовление сувенирной продукции, воздушных шаров с рисунками и логотипами.">
    <meta name="keywords" content="наружная реклама, воздушные шарики, баннер, печать на футболках, фотообои">
    <link rel="shortcut icon" href="image/favicon.png" type="image/png">
    <title>РЕАЛ - рекламное агенство</title>
    <link href="css/general.css" rel="stylesheet" type="text/css">
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
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
                        <li href="index.html"><a href="index.php">Главная</a></li>
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

<?php
if(array_key_exists("login", $_GET)) {

    if ($_GET['login'] == 'admin') {
        include "../project/mods/admin/index.php";
        die;
    }

}
?>
<section class="footer-glue for-first-section">
    <div class="container">
        <h1>Наши работы</h1>
        <div class="gallery">
            <!-- Ссылки для заполнения галереи -->
            <a href="image/gallery/obemnye bukvy/bukvi (1).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (1).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <!--<span><b>LightBox Image 2</b><br />Text to accompany 2nd lightbox image</span> -->
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (1).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (1).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (2).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (2).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>
            <a href="image/gallery/interernaja pechat/pechat (6).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (6).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (10).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (10).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (12).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (12).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>
            <a href="image/gallery/interernaja pechat/pechat (14).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (14).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (24).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (24).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (22).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (22).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>
            <a href="image/gallery/interernaja pechat/pechat (20).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (20).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (17).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (17).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (52).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (52).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (50).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (50).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (28).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (28).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/interernaja pechat/pechat (19).jpg" class="flipLightBox">
                <img src="image/gallery/interernaja pechat/pechat (19).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>

            <a href="image/gallery/lazernaja rezka/lazer (11).jpg" class="flipLightBox">
                <img src="image/gallery/lazernaja rezka/lazer (11).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (2).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (2).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/lazernaja rezka/lazer (10).jpg" class="flipLightBox">
                <img src="image/gallery/lazernaja rezka/lazer (10).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (3).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (3).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (13).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (13).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (14).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (14).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (12).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (12).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (23).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (23).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (24).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (24).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (25).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (25).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (26).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (26).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (21).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (21).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>

            <a href="image/gallery/pechat' na tekstile i metalle/Picture (20).jpg" class="flipLightBox">
                <img src="image/gallery/pechat' na tekstile i metalle/Picture (20).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>

            <a href="image/gallery/pechat' na tekstile i metalle/Picture (24).jpg" class="flipLightBox">
                <img src="image/gallery/pechat' na tekstile i metalle/Picture (24).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/pechat' na tekstile i metalle/Picture (21).jpg" class="flipLightBox">
                <img src="image/gallery/pechat' na tekstile i metalle/Picture (21).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>

            <a href="image/gallery/obemnye bukvy/bukvi (6).jpg" class="flipLightBox">
                <img src="image/gallery/obemnye bukvy/bukvi (6).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>

            <a href="image/gallery/pechat' na tekstile i metalle/Picture (25).jpg" class="flipLightBox">
                <img src="image/gallery/pechat' na tekstile i metalle/Picture (25).jpg" width="220" height="220" alt="flipLightBox Image 2" />
                <span></span>
            </a>

            <a href="image/gallery/pechat' na tekstile i metalle/Picture (26).jpg" class="flipLightBox">
                <img src="image/gallery/pechat' na tekstile i metalle/Picture (26).jpg" width="220" height="220" alt="flipLightBox Image 3" />
                <span></span>
            </a>

            <a href="image/gallery/pechat' na tekstile i metalle/Picture (27).jpg" class="flipLightBox">
                <img src="image/gallery/pechat' na tekstile i metalle/Picture (27).jpg" width="220" height="220" alt="flipLightBox Image 1" />
                <span></span>
            </a>
            <!-- Конец блока галереи -->
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="wrapper">
            <div class="copy">
                <p onclick="location.href='portfolio.php?login=admin'">
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
                        с 9:30 до 17::30
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="js/fliplightbox.min.js"></script>
<script type="text/javascript">$('body').flipLightBox()</script>

</body>
</html>
