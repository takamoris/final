<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action="login-output.php" method="post">
        ログインID<input type="number" class="id" name="id">
        <br>
        パスワード<input type="password" class="password" name="pass">
        <br>
        <input type="submit" class="login" value="ログイン">
    </form>
</body>
</html>