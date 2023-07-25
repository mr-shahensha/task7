<?php 
include("connection.php");
$date1=$_REQUEST['date1'];
$date2=$_REQUEST['date2'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <td>Date</td>
            <td>Number of Application</td>
            <td>Number of Approve</td>
            <td>Number of Reject</td>
            <td>Number of pending</td>

        </tr>
        <?php 
        for($i=$date1;$i<=$date2;$i++){
        $query=mysqli_query($con,"SELECT * FROM `main_application` where  dt='$i'");
        $count=mysqli_num_rows($query);
        
        $query1=mysqli_query($con,"SELECT * FROM `main_application` where  dt='$i' and stat='1'");
        $count1=mysqli_num_rows($query1);
        $query2=mysqli_query($con,"SELECT * FROM `main_application` where  dt='$i' and stat='2'");
        $count2=mysqli_num_rows($query2);
        $query3=mysqli_query($con,"SELECT * FROM `main_application` where  dt='$i' and stat='0'");
        $count3=mysqli_num_rows($query3);
    
            ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $count;?></td>
                    <td><?php echo $count1;?></td>
                    <td><?php echo $count2;?></td>
                    <td><?php echo $count3;?></td>

                </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>