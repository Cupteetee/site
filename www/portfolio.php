<?php 
ini_set("session.use_cookies",1);
session_start();
// старт сессий
//подключаем конфигурацию
include 'cfg.php';
$id=0;
foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        // basename() может спасти от атак на файловую систему;
        // может понадобиться дополнительная проверка/очистка имени файла
        $name = basename($_FILES["pictures"]["name"][$key]);
        move_uploaded_file($tmp_name, "$imgpath/$name");

$result = $dbd->query( " SELECT * FROM `0dbimage` ORDER BY `0dbimage`.`id` ASC  ");
while ($row = $result->fetch_row()) {
$id = $row[0]; }
$id++;
$sql= "INSERT INTO `0dbimage` (`id`, `dtapp`, `pach`, `descript`) VALUES ('$id', '" . date("Y-m-d H:i:s"). "' , '$imgpath/$name', '');";

$dbd->query($sql) ;
    } 
}
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

<style>
.prew {
    height: 130px;
    border: 1px solid #000;
    margin: 10px 5px 0 0;
  }
.rmbtn {
position: absolute; 
}
.imb {
    display: inline-block;
}

</style>
</head>
<body>

<header class="header">
	<div class="static">
	<div class="container">	
		<div class="wrapper">
			<div class="burger">
				<div class="menuToggle"><img src="image/menu-button-white.png" class="burger-menu"></div>
				<ul class="menu">
					<li href="index.html"><a href="index.html">Главная</a></li>
					<li><a href="services/services.html">Услуги</a></li>
					<li><a href="portfolio.php">Портфолио</a></li>
					<li><a href="customer.html">Клиентам</a></li>
					<li><a href="index.html#contacts">Контакты</a></li>
				</ul>
			</div>
			<img src="image/logo.png" class="logo">
			<nav class="top-menu">
				<ul id="menu">
					<li href="index.html"><a href="index.html">Главная</a></li>
					<li><a href="services/services.html">Услуги</a></li>
					<li><a href="portfolio.php">Портфолио</a></li>
					<li><a href="customer.html">Клиентам</a></li>
					<li><a href="index.html#contacts">Контакты</a></li>
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
<section class="footer-glue for-first-section">
	

	<div class="container">


		<h1>Наши работы</h1>



<?php


if (!isset($_SESSION['p'])) {
if (isset($_POST['auth_login']) and isset($_POST['auth_passwd']) ) {
$rc=0; //установка 
	if (($_POST['auth_login']==$admlogin) and ($_POST['auth_passwd']==$admpass)) 
	{ $_SESSION['p'] = 'admin'; $rc=1;}
if ($rc == 0) { echo "Heправильный логин or пароль!"; exit;}
} } //Авторизация и установка ссесии

if ( $_GET['adm']=='exit') { unset($_SESSION['p']); echo "<script>window.location = 'portfolio.php';</script>"; exit; } //Закрытие сессии

if ( $_GET['adm']=='login') {
if (!isset($_SESSION['p'])) {
echo '
<div id="lgn" style="width: 100%;height: 100%;">
<div style ="  
position: relative; 
    width: 215px; 
    height: 170px;
    left: 50%; 
    top: 50%; 
    margin-left: -150px;
    margin-top: -100px;	
    background: #e2e1da;
    border: solid 1px black; 
    padding: 10px;     overflow: auto; 
box-shadow: 0 0 60px rgba(0,0,0,0.5); ">
<FORM ACTION="portfolio.php?adm=login" METHOD="post" ENCTYPE="multipart/form-data" NAME="login_form">
<p style="margin: 10px;">
<label> Login &nbsp&nbsp&nbsp&nbsp&nbsp <INPUT TYPE="text" NAME="auth_login" SIZE="20" MAXLENGTH="50" AUTOCOMPLETE="off" autofocus></label><BR>
<label> Password <INPUT TYPE="password" NAME="auth_passwd" SIZE="20" MAXLENGTH ="200" AUTOCOMPLETE="off"></label><BR>
 <INPUT TYPE="submit" VALUE="&nbsp Войти &nbsp" style="margin: 10px;">
</p> </FORM> </div> </div> '; } } //диалог логина и пароля  ?>

<?php if ($_SESSION['p']=='admin') { 
?> 
<div class="container01" style="margin: 10px"> 
<div class="loadimage" style = "padding: 10px;    border: 1px solid #ccc;">
    <p>Добавление изображений.</p>
<form action="portfolio.php" METHOD="post" ENCTYPE="multipart/form-data" NAME="fl">
    <input type="file" id="files" name="pictures[]" multiple accept="image/*,image/jpeg"><br>
    <output id="thumbnails"></output>
    <br><button type="submit">Загрузить изображения </button>
    <button type="reset">Сброс </button>
</form>
</div>
	<div  style = "padding: 10px;    border: 1px solid #ccc;">
	<a href='?adm=exit'><button> Завершить редактирование страницы </button></a> 
	</div>
</div>
<?php } ?>

<div class="gallery">

		

<?php 
//ORDER BY `0dbimage`.`dtapp` DESC
//ORDER BY `0dbimage`.`dtapp` ASC

$sql="SELECT * FROM `0dbimage` ORDER BY `0dbimage`.`dtapp` DESC";

if ($result = $dbd->query($sql)) {
while ($row = $result->fetch_row()) {
?>
<div class="imb">
<?php if ($_SESSION['p']=='admin') { ?>

<small>Загружено: <?php echo $row[1];?> </small><br>
<button class="rmbtn" id='<?echo $row[0]?>' name='pa1' onclick='obr("<?echo $row[0]?>");'>  Удалить </button> <? } ?>

		<a href="<?php echo $row[2]; ?>" class="flipLightBox" >
		<img src="<?php echo $row[2]; ?>" width="220" height="220" alt="flipLightBox Image 1" />
		<span></span>
		</a> 

</div>
<?php  } }     
//$show_images;
?>
		<!-- Конец блока галереи -->
	</div>
</div> 
</section>
<footer>
	<div class="container">
		<div class="wrapper">
			<div class="copy">
				<p onclick="window.location = 'portfolio.php?adm=login'; ">
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="js/fliplightbox.min.js"></script>
<script type="text/javascript">$('body').flipLightBox()</script>
<?php if ($_SESSION['p']=='admin') { ?> 
<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="prew" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('thumbnails').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

 document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>

<script>
function obr(par) {

$.post("debi.php",{par:par}, function(data){  });
$('button').remove('#'+par);

}
</script>



<?php } ?>

</body>
</html>
