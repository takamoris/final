<?php session_start(); ?>
<?php require 'db-connect.php';?>
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('update  Event set start_day=?,finish_day=? where event_name = ? ');
if(empty($_POST['event_name'])){
    echo 'イベント名を入力してください';

}else{
    if($sql->execute(
        [htmlspecialchars($_POST['start_day']),$_POST['finish_day'],$_POST['event_name']]
    )){
        echo '更新に成功しました。';
    }else{
        echo '更新に失敗しました。';
    }
}
?>
<br>
<a href="top-page.php"><button type="submit">メニューに戻る</button></a>