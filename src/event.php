<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<form action="event.php">
    イベント検索
    <input type="text" name="keyword">
    <input type="submit" value="検索">
</form>
<hr>
<?php
    echo '<table>';
    echo '<tr><th>イベント番号</th><th>イベント名</th><th>説明</th><th>場所名</th><th>住所</th><th>開催日時</th><th>終了日時</th><th>画像</th></tr>';
    $pdo = new PDO ($connect,USER,PASS);
    if(isset($_POST['keyword'])){
        $sql = $pdo -> prepare('select * from Event where event_name like ?');
        $sql -> execute(['%'.$_POST['keyword'].'%']);
    }else{
        $sql = $pdo -> query('select * from Event');
    }
    foreach($sql as $row){
        $id = $row ['event_id'];
        echo '<tr>';
        echo '<td>',$id,'</td>';
        echo '<td>',$row['event_name'],'</td>';
        echo '<td>',$row['explanation'],'</td>';
        echo '<td>',$row['place_name'],'</td>';
        echo '<td>',$row['address'],'</td>';
        echo '<td>',$row['start_day'],'</td>';
        echo '<td>',$row['finish_day'],'</td>';
        echo '<td>','<img alt "image" src="img/',$row['img_id'],'.png" width="100">','</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
