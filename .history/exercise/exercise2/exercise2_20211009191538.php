<!DOCTYPE html>
<html>
<head>
    <title>Hình chữ nhật</title>
    <style>
        table{
            width: 500px;
            margin: auto;
            background: #ffca97;
        }
        td{
            padding: 10px;
        }
        .center{
            text-align: center;
            font-weight: bold;
            background: #ffa500;
            color: #ffffff;
        }
        input{
            width: 300px;
        }
        button{
            background: #34a853;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }
        button:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
<form method="POST" name="form">
<select name="luachon">
 <option value="dientich" >dientich</option>
 <option value="chuvi">chuvi</option>
</select><br>
Chiều dài  <input type="text" name="chieudai" />
Chiều rộng <input type="text" name ="chieurong" />
<input type ="submit" name="submit" value = "tinhtoan" />
<input type ="reset" name="reset" value="lammoi" />
</form>
<?php
$yeucau = $_POST["luachon"];
$chieudai = $_POST["chieudai"];
$chieurong = $_POST["chieurong"];
function tinh_toan($chieudai,$chieurong,$yeucau){
 if($yeucau ="dientich"){
 $tinh_toan = $chieudai * $chieurong;
 echo $tinh_toan;
 }
 else{
 $tinh_toan1 = $chieudai + $chieurong;
 $tinh_toan = $tinh_toan1 *2;
 return $tinh_toan;
 echo $tinh_toan;
 }
 return $tinh_toan;
 }
 tinh_toan($chieudai,$chieurong,$yeucau);
?>
</body>
</html>