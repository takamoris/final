<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <title>イベント追加</title>
    <body>
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
            <div>画像※.pngで入力してください</div>
            <input type="text" name="img">
            <br>
            <input type="submit" value="登録">
        </form>
    </body>
</html>