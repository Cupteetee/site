<?php
/**
 * подключаем сеанс
 */
session_start();

/**
 * 0 - off all errors
 * E_ALL - on all errors
 */
error_reporting(E_ALL);//меняем конфиг тут
/**
 * 0 - off all errors
 * 1 - on all errors
 */
ini_set("display_errors", 1);//меняем конфиг тут

/**
 * настройки подключения к базе данных
 */
$host = "localhost";
$user = "root";
$pass = "";
$db   = "reklama";

/**
 * подключение к базе данных
 */
$GLOBALS['link'] = mysqli_connect($host,$user,$pass,$db);

if(!$GLOBALS['link']){
    include "../project/error500.php";
    die;
}