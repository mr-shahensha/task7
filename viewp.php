<?php
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Document</title>
</head>
<body>
<table border="2">
        <tr>
            <td><a href="index.php">home</a></td>
            <td><a href="search.php">search</a></td>
            <td><a href="vdwa.php">vdwa</a></td>
            <td><a href="viewp.php">view status</a></td>
        </tr>
    </table>
    <br>
    <h1>view by search</h1>
    <table border="2">
        <tr>
            <td>application id <input type="text" placeholder="enter applicationi d to search" id="apid"></td>
            <td>date of birth <input type="date" name="" id="dob"></td>
            <td><input type="button" value="search" onclick="search()"></td>
        </tr>
    </table>
    <p style="color:red;" id="red"></p>

    <div id="search"></div>

</body>
</html>
<script>
    function search(){
        var apid=document.getElementById('apid').value;
        var dob=document.getElementById('dob').value;
        if(apid=='' && dob==''){
                    text="please fill all the data";
                    document.getElementById('red').innerHTML=text;
                    return false;
        }else{
        $('#search').load('vbs.php?apid='+apid+'&dob='+dob).fadeIn('fast');
        }
}
</script>