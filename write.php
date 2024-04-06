<?php
// データがなかったら変数を未定義にして空にする
if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["memo"])){
    $name = $_POST["name"];
    $memo = $_POST["memo"];
    $email = $_POST["email"];

    $c   = ",";
    $str = $name.$c. $email.$c.$memo; //aaaa, bbbb, 
    //文字作成
    //$str = date("Y-m-d H:i:s");
    //File書き込み
    $file = fopen("date.csv","a");
    fwrite($file, $str."\n"); //1改行して書き出してほしいのは\n
    fclose($file);
    //入力画面に戻す
    // header ("Location: index.php");
    //read画面に戻す
    header ("Location: read.php");
    exit;   
} else {
    //入力画面に戻す
    header ("Location: index.php");
    exit;
}

?>
