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
    <h1>view date wise application</h1>
    <table border="2">
            <tr>
                    <td>date1 : <input type="date" name="" id="date1" ></td>
                    <td>date2 : <input type="date" name="" id="date2" v></td>
                    <td><input type="button" value="search" onclick="search()"></td>
            </tr>
    </table>
</body>
<div id="search"></div>
</body>
</html>
<script>
    function search(){
        var date1=document.getElementById('date1').value; 
        var date2=document.getElementById('date2').value;
        $('#search').load('getvdwa.php?date1='+date1+'&date2='+date2).fadeIn('fast');
    }
</script>
