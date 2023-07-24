<?php
$server="localhost";
$user="root";
$password="";
$database="task";
if(!$con=mysqli_connect($server,$user,$password,$database)){
    echo "failed to connect";
}
?>