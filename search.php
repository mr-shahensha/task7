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
    <h1>search</h1>
    <table border="2">
        <tr>

            <td>status: 
            <select name="" id="stat">
                <option value=""> all </option>
                <option value="0">pending</option>
                <option value="1">approve</option>
                <option value="2">rejected</option>
            </select>

            </td>
            <td>date1 : <input type="date" name="" id="date1" value="<?php echo date('Y-m-01');?>"></td>
            <td>date2 : <input type="date" name="" id="date2" value="<?php echo date('Y-m-d');?>"></td>
            <td>search all : <input type="text" name="" id="search_all" placeholder="search here "></td>
            <td><input type="button" value="search" onclick="search()"></td>
        </tr>
    </table>
    <div id="search"></div>
</body>
</html>
<script>
    function search(){
        var stat=document.getElementById('stat').value;
        var date1=document.getElementById('date1').value; 
        var date2=document.getElementById('date2').value;
        var sa=document.getElementById('search_all').value;

        $('#search').load('view.php?stat='+stat+'&date1='+date1+'&date2='+date2+'&sa='+sa).fadeIn('fast');
    }
</script>