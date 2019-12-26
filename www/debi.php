<?php 
//скрипт удаляет файл из базы и диска
include "cfg.php";  

if (isset($_POST['par'])) {
	$sql="SELECT * FROM `0dbimage` WHERE `id`='".$_POST['par']."'";

		if ($result = $dbd->query($sql)) {
			while ($row = $result->fetch_row()) {$file=$row[2];} 
	}

$sqls="DELETE FROM `0dbimage` WHERE `id`='".$_POST['par']."'";
$result= $dbd->query($sqls) ;

unlink($file);
#echo "Удалено.";
}?>

