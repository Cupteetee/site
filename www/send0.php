
<?
ini_set("display_errors",1);
error_reporting(E_ALL);


if (isset($_POST['name'])) {$phone = $_POST['name'];}
if (isset($_POST['phone'])) {$name = $_POST['phone'];}
 
/* Сюда впишите свою эл. почту */
$mail_to  = "send@real-ufa.ru"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Заказ обратного звонка!\nТелефон: $phone\nИмя: $name";
 
$mail_to="send@real-ufa.ru, sioon-art@ya.ru";
$thema=$mes;
$html =$mes;



    $EOL = "\r\n"; // ограничитель строк, некоторые почтовые сервера требуют \n - подобрать опытным путём
    $boundary     = "--".md5(uniqid(time()));  // любая строка, которой не будет ниже в потоке данных.  
    $headers    = "MIME-Version: 1.0;$EOL";   
    $headers   .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";  
    $headers   .= "From: send@real-ufa.ru";  
      
    $multipart  = "--$boundary$EOL";   
    $multipart .= "Content-Type: text/html; charset=UTF-8$EOL";   
    $multipart .= "Content-Transfer-Encoding: base64$EOL";   
    $multipart .= $EOL; // раздел между заголовками и телом html-части 
    $multipart .= chunk_split(base64_encode($html));   

    $multipart .= "$EOL--$boundary--$EOL";   



//echo  $multipart; 
//echo "<br>";
//echo $headers;
      
        mail($mail_to, $thema, $multipart, $headers);

ini_set('short_open_tag', 'On');
//exit;
header('Refresh: 3; URL=index.html');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо <?php echo $name ?>! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Спасибо <?php echo $name ?>! Мы свяжемся с вами!</h1>
</body>
</html>