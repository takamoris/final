<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト</title>
</head>
<body>
    <?php
        if(isset($_SESSION['User'])){
            unset($_SESSION['customer']);
            echo 'ログアウトしました';
            echo '<a href="login-input.php"><button type="submit">ログイン画面</button></a>';
        }else{
            echo '既にログアウトしています';
        }
    ?>
</body>
</html>