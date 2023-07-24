<?php
include("connection.php");
$stat=$_REQUEST['a'];
$id=$_REQUEST['b'];
$query=mysqli_query($con,"UPDATE `main_application` SET `stat` = '$stat' WHERE `main_application`.`id` = '$id';  ");
if($stat==1){
    echo "approved";
}else if($stat==2){
echo "rejected";
}
?>
