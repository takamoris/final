<?php session_start();?>
<?php require 'db-connect.php'; ?>
<?php
$msg='';
    unset($_SESSION['User']);
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from User where user_id=?');
    $sql->execute([$_POST['id']]);
    foreach($sql as $row){
        if($_POST['pass']==$row['password']){
            $_SESSION['User']=[
                'id'=>$row['user_id'],'password'=>$row['password']
            ];
        }
    }
if(isset($_SESSION['User'])){
    echo '<a href="top-page.php"></a>';
}else{
    $msg='ログインIDまたはパスワードが違います';
}
?>
