<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST["ten_chu_ho"]) && isset($_POST["chi_so_cu"]) && isset($_POST["chi_so_moi"]))
{
$ten_chu_ho=$_POST["ten_chu_ho"];
$chi_so_cu=$_POST["chi_so_cu"];
$chi_so_moi=$_POST["chi_so_moi"];
$don_gia=$_POST["don_gia"];
//$so_dung=$chi_so_moi – $chi_so_cu;
//$thanh_tien=$so_dung * $don_gia;
$thanh_tien=($chi_so_moi-$chi_so_cu)*$don_gia;
}
?>
<form id="form1" name="form1" method="post" action="">
<table width="400" border="0" align="center" bordercolor="#FFCC99" bgcolor="#FFCC99">
<tr>
<td colspan="2" align="center" bgcolor="#FF6600"><h2 class="style1">Thanh Toán Tiền Điện </h2></td>
</tr>
<tr>
<td width="142"><strong>Tên Chủ Hộ </strong></td>
<td width="242"><label>
<input name="ten_chu_ho" type="text" id="ten_chu_ho" value="<?php echo $_POST['ten_chu_ho']?>" />
</label></td>
</tr>
<tr>
<td><strong>Chỉ Số Cũ </strong></td>
<td><label>
<input name="chi_so_cu" type="text" id="chi_so_cu" value="<?php echo $_POST["chi_so_cu"];?>" />
(Kw)</label></td>
</tr>
<tr>
<td><strong>Chỉ Số Mới </strong></td>
<td><label>
<input name="chi_so_moi" type="text" id="chi_so_moi" value="<?php echo $_POST["chi_so_moi"];?>" />
(Kw)</label></td>
</tr>
<tr>
<td><strong>Đơn Giá </strong></td>
<td><label>
<input name="don_gia" type="text" id="don_gia" value="<?php echo $_POST["don_gia"];?>" />
(VNĐ)</label></td>
</tr>
<tr>
<td><strong>Số Tiền Thanh Toán </strong></td>
<td><label>
<input name="thanh_tien" type="text" id="thanh_tien" style="background-color:#FF99FF" value="<?php echo $thanh_tien;?>" readonly="true" />
(VNĐ) </label></td>
</tr>
<tr>
<td colspan="2" align="center" bgcolor="#FFCC99"><label>
<input type="submit" name="Submit" value="Tinh" />
</label></td>
</tr>
</table>
</form>
</body>
</html>