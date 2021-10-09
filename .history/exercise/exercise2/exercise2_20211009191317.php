<!DOCTYPE html>
<html>
<head>
    <title>Hình chữ nhật</title>
</head>
<body>
<?php
if(isset($_POST["ban_kinh"]))
{
$ban_kinh=$_POST["ban_kinh"];
define(“PI",3.14);
// cách khai báo giá trị mặc định ban đầu
$dien_tich=PI*pow($ban_kinh,2);
//pi nhan ban kinh binh phuong
// pow = tính số mũ
$chu_vi=2*PI*$ban_kinh;
}
?>

   <form id="form1″ name="form1″ method="post" action="hinhtron.php">
<table width="500″ border="0″ align="center" bordercolor="#FFFF99″ bgcolor="#FFFF99″>
<tr>
<td colspan="2″ align="center" bgcolor="#FF9900″><h1 class="style1″>Diện Tích – Chu Vi Hình Tròn </h1></td>
</tr>
<tr>
<td width="111″><strong>Bán Kính </strong></td>
<td width="379″><label>
<input name="ban_kinh" type="text" id="ban_kinh" value="<?php echo $_POST["ban_kinh"];?>" />
</label></td>
</tr>
<tr>
<td><strong>Diện Tích </strong></td>
<td><label>
<input name="dien_tich" type="text" id="dien_tich" style="background-color:#FF99FF" value="<?php echo $dien_tich;?>"  readonly="true"/>
</label></td>
</tr>
<tr>
<td><strong>Chu Vi </strong></td>
<td><label>
<input name="chu_vi" type="text" id="chu_vi" style="background-color:#FF99FF" value="<?php echo $chu_vi;?>"  readonly="true" />
</label></td>
</tr>
<tr>
<td colspan="2″ align="center"><label>
<input type="submit" name="Submit" value="Tính " />
</label></td>
</tr>
</table>
</form>
</body>
</html>