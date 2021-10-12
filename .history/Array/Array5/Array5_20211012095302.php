<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php
function replace(&$arr,$cu,$moi)
{
	for($i=0;$i<count($arr);$i++)
	{
		if($arr[$i]==$cu)
			$arr[$i] = $moi;
	}
	return $arr;
}
function kt(&$arr,$cu)
{
for($i=0;$i<count($arr);$i++)
	{
		if($arr[$i] == $cu)
			return 1;
	}return 0;
}
	
if (isset($_POST['submit'])) {
	$cu = $_POST['cu'];
	$moi = $_POST['moi'];
	$arr = $_POST['arr'];

	$arr1 =  explode(',', $arr);
	$result1 = implode(",", $arr1);
	

	if(kt($arr1,$cu)==1)
	{
		replace($arr1,$cu,$moi);
		$thaythe =  implode(",", $arr1);
	}else $thaythe = "Không có phần tử cần thay thế";
}

?>
</head>
<body>
<form action="" method="post">
	<table>
		<tr>
			<td colspan="2" align="center">Thay thế</td>
		</tr>
		<tr>
			<td>Nhập các phần tử</td>
			<td><input type="text" name="arr" value="<?php if(isset($arr)) echo $arr ?>"></td>
		</tr>
		<tr>
			<td>Giá trị cần thay thế</td>
			<td><input type="text" name="cu" value="<?php if(isset($cu)) echo $cu ?>"></td>
		</tr>
		<tr>
			<td>Giá trị thay thế</td>
			<td><input type="text" name="moi" value="<?php if(isset($moi)) echo $moi ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Thay thế"></td>
		</tr>
		<tr>
			<td>Mảng cũ</td>
			<td><input type="text" name="" value="<?php if(isset($result1)) echo $result1; ?>"></td>
		</tr>
		<tr>
			<td>Mảng sau khi thay thế</td>
			<td><input type="text" name="" value="<?php if(isset($thaythe)) echo $thaythe; ?>"></td>
		</tr>
	</table>
</form>






</body>
</html>