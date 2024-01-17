<?php session_start(); ?>
<?php
    unset($_SESSION['Event'][$_GET['id']]);
    echo 'イベントを削除しました。';
    echo '<hr>';
    require 'event.php';
    ?>