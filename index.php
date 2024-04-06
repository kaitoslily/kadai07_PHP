<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星空観測会アンケート</title>
</head>
<body>
<?php
include("inc/head.html");
include("inc/menu.html");
include("inc/foot.html");
?>
<p>登録フォーム</p>
    <form action="write.php" method="post">
    名前: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    コメント: <br>
    <textarea name="memo" cols="30" rows="10"></textarea><br>
    <!-- <input type="submit" value="送信"> -->
    <button type="submit">送信</button>
    </form>
</body>
</html>