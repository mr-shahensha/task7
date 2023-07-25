<?php 
include("connection.php");
$date1=$_REQUEST['date1'];
$date2=$_REQUEST['date2'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        $f=0;
        for($i=$date1;$i<=$date2;$i++){
            $f++;
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
                  
                    <td><a onclick="myFunction('<?php echo $f;?>','','<?php echo $i;?>')"><?php echo $count;?></a></td>
                    <td><a onclick="myFunction('<?php echo $f;?>','1','<?php echo $i;?>')"><?php echo $count1;?></a></td>
                    <td><a onclick="myFunction('<?php echo $f;?>','2','<?php echo $i;?>')"><?php echo $count2;?></a></td>
                    <td><a onclick="myFunction('<?php echo $f;?>','0','<?php echo $i;?>')"><?php echo $count3;?></a></td>
                  

                </tr>


                <tr>
                    <td colspan="5"  id="div<?php echo $f;?>" style="display:none;">  
                       
                    </td>
                </tr>
            <?php
        }
        ?>
   
    </table>
</body>
</html>
<script>

         function myFunction(a,stat,dt) {
            var x= document.getElementById("div"+a);
                // var non= document.getElementById("div"+a).style.display = "none";
                    if(x.style.display == "none"){
                        x.style.display = 'block';
                        $('#div'+a).load('call_vdwa.php?stat='+stat+'&dt='+dt).fadeIn('fast');

                        } else {
                            x.style.display = 'none';
                        }
                }
</script>