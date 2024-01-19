<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add.css">
</head>
    <title>イベント追加</title>
    <body>
        <h1>新規イベント登録</h1>
        <form action="event-add-output.php" method="POST">
            <div>イベント名</div>
            <input type="text" name="event">
            <div>説明</div>
            <input type="text" name="exp">
            <div>場所名</div>
            <input type="text" name="place">
            <div>住所</div>
            <input type="text" name="add">
            <div>開催日時</div>
            <input type="date" name="s_date">
            <div>終了日時</div>
            <input type="date" name="f_date">
            <div>画像</div>
            <input type="text" name="img">
            <br>
            <input type="submit" value="登録">
        </form>
        <br>
        <a href="top-page.php"><button type="submit">メニューに戻る</button></a>
    </body>
</html>