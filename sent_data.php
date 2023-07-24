<?php
include("connection.php");
$nm=$_REQUEST['name'];
$fname=$_REQUEST['fname'];
$mno=$_REQUEST['mno'];
$dob=$_REQUEST['dob'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$id=date("Ymdhis");

date_default_timezone_set("asia/kolkata");
$datetime = date('Y-m-d H:i:s');

$edt=date('Y-m-d');
//$date = date('d-m-Y',strtotime($edt));

$query=mysqli_query($con,"INSERT INTO `main_application` (`sl`, `id`, `nm`, `fnm`, `mno`, `dob`, `email`, `address`, `edt`, `edtm`, `stat`) VALUES (NULL, '$id', '$nm', '$fname', '$mno', '$dob', '$email', '$address', '$edt', '$datetime', '0');");
?>
