<?php
$name = $_POST["name"];
$email = $_POST["email"];
$memo = $_POST["memo"];
$c   = ",";
$str = $name.$c. $email.$c.$memo; //aaaa, bbbb, 
//文字作成
//$str = date("Y-m-d H:i:s");
//File書き込み
$file = fopen("date.csv","a");
fwrite($file, $str."\n"); //1改行して書き出してほしいのは\n
fclose($file);
//入力画面に戻す
header ("Location: index.php");
exit;
?>
