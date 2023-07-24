<?php 
include("connection.php");
$stat=$_REQUEST['stat'];
$date1=$_REQUEST['date1'];
$date2=$_REQUEST['date2'];
$sa=$_REQUEST['sa'];

if($stat!=""){
    $q0=" and stat='$stat'";
}else{
$q0='';
}

if($date1!="" && $date2!="")
{
    $q1=" and dt between '$date1' and '$date2'";
}else{
    $q1="";
}
if($sa!=""){
    $q2=" and (`id` LIKE '%$sa%' or `nm` LIKE '%$sa%' or `fnm` LIKE '%$sa%' or `mno` like '%$sa%') ";
}else{
    $q2="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <td>sl</td>
            <td>sid</td>
            <td>date</td>
            <td>name</td>
            <td>fathers name</td>
            <td>mobile number</td>
            <td>date of birth</td>
            <td>email id</td>
            <td>address</td>
            <td>status</td>
        </tr>
        <?php
        $f=0;
        $query=mysqli_query($con,"SELECT * FROM main_application where sl>'0' $q0 $q1 $q2");
        while($result=mysqli_fetch_assoc($query)){
            $f++;
            $id=$result['id'];
            $dt=$result['dt'];
            $nm=$result['nm'];
            $fnm=$result['fnm'];
            $mno=$result['mno'];
            $dob=$result['dob'];
            $email=$result['email'];
            $address=$result['address'];
            $edtm=$result['edtm'];
            $stat=$result['stat'];

            $date = date('d-m-Y',strtotime($dt));
?>
<tr>
            <td><?php echo $f;?></td>
            <td><?php echo $id;?></td>
            <td><?php echo $date;?></td>
            <td><?php echo $nm;?></td>
            <td><?php echo $fnm;?></td>
            <td><?php echo $mno;?></td>
            <td><?php echo $dob;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $address;?></td>
            <td>
                <div id="stat_res<?php echo $id;?>">
                <?php
            if($stat==0){
                ?>
                <table border="2">
                <tr>
                    <td colspan="2"><span style="color:red;text-align:centre;">pedning</span></td>
                </tr>
                <tr>
                    <td><input type="button" value="approve" onclick="stat(1,<?php echo $id;?>)"> </td>
                    <td><input type="button" value="reject" onclick="stat(2,<?php echo $id;?>)"></td>
                </tr>
                </table>
                <?php
            }else if($stat==1){
                    echo "approved";
            }else if($stat==2){
                echo "rejected";
        }
            ?></div></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
<script>
    function stat(a,b){
        if(confirm("are you sure ?")){
                $('#stat_res'+b).load('stat_res.php?a='+a+'&b='+b).fadeIn('fast');
        }
    }
</script>