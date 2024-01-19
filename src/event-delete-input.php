<?php session_start(); ?>
<?php require 'db-connect.php'; ?>

<?php
    echo '<table>';
    echo '<tr><th>イベント番号</th><th>イベント名</th><th>説明</th><th>場所名</th><th>住所</th><th>開催日時</th><th>終了日時</th><th>画像</th></tr>';
    $pdo = new PDO ($connect,USER,PASS);
    foreach($pdo->query('select * from Event' )as $row){
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
        echo '<td>';
        echo '<a href="event-delete-output.php? event_id=',$id,'">削除</a>';
        echo '</td>';
        echo '</tr>';
        echo "\n";
    }   

    echo '</table>';
    
    ?>
            <a href="top-page.php"><button type="submit">メニューに戻る</button></a>