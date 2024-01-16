<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
            <input type="submit" value="登録">
        </form>
    </body>
</html>