<?php
// 1. Ket noi CSDL Kieu thu tuc
$servername = "localhost";
$username = "root";
$password = "trieu1234";
$dbname = "quanly_ban_sua";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// 2. Chuan bi cau truy van 
$query = 'SELECT * FROM khach_hang';
// 3. Thuc thi cau truy van
$result = mysqli_query($conn, $query);
if (!$result ) die ('<br> <b>Query failed</b>');
// 4.Xu ly du lieu tra ve
if(mysqli_num_rows($result)!=0){
    while ($row = mysqli_fetch_array($result))
    {
        echo $row;
        for ($i=0; $i < mysqli_num_fields($result); $i++)
             echo $row[$i] . " ";
    }
}
// 5. Xoa ket qua khoi vung nho va Dong ket noi
mysqli_free_result($result);
mysqli_close($conn);
?>