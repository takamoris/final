<?php session_start(); ?>
<?php require 'db-connect.php' ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>削除</title>
</head>
<body>
<?php
    $pdo = new PDO($connect,USER,PASS);

    $sql = $pdo->prepare('delete from Event where event_id=?');
    if($sql -> execute([$_GET['event_id']])){
        echo '削除に成功しました';
    }else{
        echo '削除に失敗しました。';
    }
    ?>
    <a href="top-page.php"><button type="submit">トップページに戻る</button></a>
</body>
</html>

    