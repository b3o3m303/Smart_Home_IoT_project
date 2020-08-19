<?php
include 'connection.php';
$sql="INSERT INTO `on_connect`(`cellphoneNAME`, `MAC`) VALUES ('' ,'')";
if($con->query($sql)===TRUE){
echo 'OK';
}
else {
echo "NO";
}
?>
