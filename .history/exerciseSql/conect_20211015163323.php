<?php
// 1. Ket noi CSDL huong doi tuong
$servername = "localhost";
$username = "root";
$password = "trieu1234";
$dbname = "quanly_ban_sua";
$conn = new mysqli($servername, $username, $password, $dbname);
//for vietnamese
mysqli_set_charset($conn, 'utf8');
// 1. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// 2. Chuan bi cau truy van 
$query = 'SELECT * FROM khach_hang';
// 3. Thuc thi cau truy van
$result=$conn->query($query);
//$result = mysqli_query($conn, $query);
if (!$result ) die ('<br> <b>Query failed</b>');
// 4. Xu ly du lieu tra ve
$nrow = $result->num_rows;
if($nrow !=0){
    while ($row = $result->fetch_array())
    {
        echo $row;
        for ($i=0; $i < $result->field_count; $i++)
             echo $row[$i] . " ";
    }
}
// 5. Xoa ket qua khoi vung nho va Dong ket noi
$conn->close()
?>