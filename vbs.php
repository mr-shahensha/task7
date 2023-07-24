<?php 
include("connection.php");
$apid=$_REQUEST['apid'];
$dob=$_REQUEST['dob'];
$id=0;

$query=mysqli_query($con,"SELECT * FROM `main_application` where id='$apid' and dob='$dob'");
while($result=mysqli_fetch_assoc($query)){
    $id=$result['id'];
    $nm=$result['nm'];
    $ddob=$result['dob'];
    $fnm=$result['fnm'];
    $mno=$result['mno'];
    $email=$result['email'];
    $address=$result['address'];
    $edtm=$result['edtm'];
    $stat=$result['stat'];

}
if($apid==$id && $dob==$ddob){
?>
<table border="2">
            <tr>
                <td>name : </td>
                <td><input type="text" readonly value="<?php echo $nm;?>"></td>
            </tr>
            <tr>
                <td>fathers name : </td>
                <td><input type="text" readonly value="<?php echo $fnm;?>"></td>
            </tr>
            <tr>
                <td>mobile no : </td>
                <td><input type="text" readonly value="<?php echo $mno;?>"></td>
            </tr>
            <tr>
                <td>date of birth</td>
                <td><input type="date" readonly value="<?php echo $dob;?>"></td>
            </tr>
            <tr>
                <td>email id </td>
                <td><input type="email" readonly value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>address </td>
                <td><input type="text" readonly value="<?php echo $address;?>"></td>
            </tr>
            <tr>
                <td>status </td>
                <td><?php
            if($stat==0){
                ?>
            <span style="color:red;">pedning</span></td>
                <?php
            }else if($stat==1){
                    echo "approved";
            }else if($stat==2){
                echo "rejected";
        }
            ?></td>
            </tr>
        </table>

        <?php
}else{
?>
<h3 style="color:red;">the application and date of birthday maybe wrong</h3>
<?php

}
        ?>