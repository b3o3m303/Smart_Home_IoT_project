<?php
    include 'connection.php';
    $device = $_REQUEST['device'];
    $value = $_REQUEST['value'];
    $result=mysqli_query($con,"UPDATE $device SET $device=$value WHERE 1");
?>
