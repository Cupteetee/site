<?php 
$host     = 'localhost';
$host     = 'u64476.mysql.masterhost.ru';
$user     = 'u64476_albert';
$pass     = 'REB6lSkat_sTi';
//  Connection
global $dbd;
$dbd = new mysqli();
$dbd->connect($host, $user, $pass,"u64476");
$dbd->set_charset("utf8");
//  Check Connection
if ($dbd->connect_errno) {
    printf("Connect failed: %s\n", $dbd->connect_error);
    exit();
}

//Имя Админа и пароль
$admlogin="Admin";
$admpass="Admin";


//Относительный путь на сервере для хранения изображений
$imgpath = "image/gallery/portfolio";
?>