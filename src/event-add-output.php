<?php session_start(); ?>
<?php require 'db-connect.php' ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>イベント追加</title>
</head>
<body>
    <?php
    try{
        $pdo=new PDO($connect,USER,PASS);
         $user_id = $_SESSION['User']['id'];
         $event = $_POST['event'];
         $exp = $_POST['exp'];
         $place = $_POST['place'];
         $add = $_POST['add'];
         $s_date = $_POST['s_date'];
         $f_date = $_POST['f_date'];
         $img = $_POST['img'];
         
         $sql = "INSERT INTO Event(event_name,user_id,explanation,place_name,address,start_day,finish_day,img_id) VALUES (:event,:user_id,:exp,:place,:add,:s_date,:f_date,:img)";
         $stmt = $pdo ->prepare($sql);
         $params = array(':event' => $event,':user_id' => $user_id,':exp' => $exp, ':place' => $place, ':add'=> $add, ':s_date' => $s_date, ':f_date' => $f_date,':img' => $img);
         $stmt->execute($params);
         echo 'イベントを登録しました';
    }catch(PDOException $e){
        exit('データベースに接続できませんでした。'.$e->getMessage());
    }
    ?>
            <a href="top-page.php"><button type="submit">メニューに戻る</button></a>
</body>
</html> 