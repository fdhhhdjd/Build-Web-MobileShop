<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
<?php
$text="";
$arr=array();
if (isset($_POST['submit'])){
$text=$_POST['dayso'];
$arr=explode(",",$text);
$kq=1;
foreach ($arr as $value) $kq=$kq*$value;
if (isset($_POST['reset'])){
    print_r($arr);
    $text=$kq="";
}
}
?>
<form method="post" action="">
    <table align="center" bgcolor="#7fffd4">
        <tr>
            <td colspan="3" align="center"> <h1> Nhap va tinh tren day so</h1> </td>
        </tr>
        <tr>
            <td>Nhap day so</td>
            <td><input type="text" name="dayso" size="50"
                value="<?php echo  $text;?>"></td>
            <td style="color: #ff0a07">*</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Tinh tich day so">
                <input type="submit" name="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td>Tich day so</td>
            <td><input type="text" name="ketqua" value="<?php echo $kq;?>" readonly></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center"> (*) Cac so duoc nhap cach nhau bang dau "," </td>
        </tr>
    </table>
</form>
</body>
</html>