<?php session_start();?>
<?php require 'db-connect.php';?>
<h1>イベント更新</h1>
<hr>
<table>
<tr><th>イベント名</th><th>開催日時</th><th>終了日時</th></tr>
<?php
$pdo=new PDO($connect,USER,PASS);
foreach($pdo->query('select * from  Event')as $row){
    echo'<tr>';
    echo '<form action="event-update-output.php" method="POST">';
    echo'<td>',$row['event_name'],'<input type="hidden" name="event_name" value="',$row['event_name'],'"></td>';
    echo'<td><input type="date" name="start_day" value="',$row['start_day'],'"></td>';
    echo'<td><input type="date" name="finish_day" value="',$row['finish_day'],'"></td>';
    echo'<td><input type="submit" value="更新">';
    echo'</td>';
    echo '</form>';
    echo'</tr>';
}
?>
</table>
<a href="top-page.php"><button type="submit">メニューに戻る</button></a>