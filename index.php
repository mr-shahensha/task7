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
    <h1>task7</h1>
        <table border="2">
            <tr>
                <td>name : </td>
                <td>*<input type="text" placeholder="enter your name" id="name"></td>
            </tr>
            <tr>
                <td>fathers name : </td>
                <td>*<input type="text" placeholder="enter your fathers name" id="fathers_name"></td>
            </tr>
            <tr>
                <td>mobile no : </td>
                <td>*<input type="text" placeholder="enter your mobile no" id="mobile_number"></td>
            </tr>
            <tr>
                <td>date of birth</td>
                <td>*<input type="date" id="date_o_b" ></td>
            </tr>
            <tr>
                <td>email id </td>
                <td><input type="email" placeholder="enter your emailid" id="email"></td>
            </tr>
            <tr>
                <td>address </td>
                <td>*<input type="text" placeholder="enter your address" id="address"></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"  onclick="sent_data()"></td>
            </tr>
        </table>
        <br>
        <p style="color:red;" id="red"></p>
        <div id="happy"></div>
</body>
</html>
<script>
        function sent_data(){
            var name=document.getElementById('name').value;
            var fathers_name=document.getElementById('fathers_name').value;
            var mobile_number=document.getElementById('mobile_number').value;
            var date_o_b=document.getElementById('date_o_b').value;
            var email=document.getElementById('email').value;
            var address=document.getElementById('address').value;
                if(name=='' && fathers_name=='' && mobile_number==''  && date_o_b==''  && address=='' ){
                    text="please fill all the data";
                    document.getElementById('red').innerHTML=text;
                    return false;
                }else{
                    $('#happy').load('sent_data.php?name='+name+'&fname='+fathers_name+'&mno='+mobile_number+'&dob='+date_o_b+'&email='+email+'&address='+address).fadeIn('fast');
                     text="all data submitted";
                    document.getElementById('red').innerHTML=text;

                    document.getElementById('name').value="";
                    document.getElementById('fathers_name').value="";
                    document.getElementById('mobile_number').value="";
                    document.getElementById('date_o_b').value="";
                    document.getElementById('email').value="";
                    document.getElementById('address').value="";
                }
}






//     function sent_data(){
//             var name=document.getElementById('name').value;
//             var fathers_name=document.getElementById('fathers_name').value;
//             var mobile_number=document.getElementById('mobile_number').value;
//             var date_o_b=document.getElementById('date_o_b').value;
//             var email=document.getElementById('email').value;
//             var address=document.getElementById('address').value;

//             $('#happy').load('sent_data.php?name='+name+'&fname='+fathers_name+'&mno='+mobile_number+'&dob='+date_o_b+'&email='+email+'&address='+address).fadeIn('fast');
//             text="all data submitted";
//             document.getElementById('red').innerHTML=text;

//             document.getElementById('name').="";
//             document.getElementById('fathers_name').="";
//             document.getElementById('mobile_number').="";
//             document.getElementById('date_o_b').="";
//             document.getElementById('email').="";
//             document.getElementById('address').="";
// }
</script>