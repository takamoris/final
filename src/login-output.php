<?php session_start();?>
<?php require 'db-connect.php'; ?>
<?php
$msg='';
    unset($_SESSION['User']);
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select * from User where user_id=?');
    $sql->execute([$_POST['id']]);
    foreach($sql as $row){
        if($row["pass"]==$_POST['password']){
            $_SESSION['User']=[
                'id'=>$row['user_id'],'password'=>$row['password']
            ];
        }
    }
if(isset($_SESSION['User'])){
    echo '<a href="toppage.php">';
}else{
    $msg='<div class ="error"><p>ログインIDまたはパスワードが違います。</p></div>';
}
?>