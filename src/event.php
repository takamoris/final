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
    echo '<tr><th>イベント番号</th><tr>イベント名</tr><tr>説明</tr><tr>場所名</tr><tr>住所</tr><tr>開催日時</tr><tr>終了日時</tr><tr>画像</tr></tr>';
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
        echo '<td>',$row['img_id'],'</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
