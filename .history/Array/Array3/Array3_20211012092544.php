<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
function tao_mang($text)
{
	$arr =[];
	for($i=0;$i<$text;$i++)
	{
		$arr[$i] = rand(0,20);
	}return $arr;
}

function GTLN($arr)
{
	$max = $arr[0];
	for($i=0;$i<count($arr);$i++)
	{
		if($arr[$i] >$max) $max = $arr[$i];
	}
	return $max;
}
function GTNN($arr)
{
	$min = $arr[0];
	for($i=0;$i<count($arr);$i++)
	{
		if($arr[$i] < $min) $min = $arr[$i];
	}
	return $min;
}

function tong_mang($arr)
{
	$tong = 0;
	foreach ($arr as $value) {
		$tong += $value;
	}
	return $tong;
}


if(isset($_POST['submit']))
{
	$text = $_POST['text'];
	$arr = tao_mang($text);
	$arr1 =implode(",", $arr); 
	$max = GTLN($arr);
	$min = GTNN($arr);
	$tong = tong_mang($arr);
}else if(isset($_POST['reset']))
{
	$text = $_POST['text'];
	$text = '';
}

?>
<body>
<form action="" method="post">
	<table align="center" bgcolor="">
		<tr>
			<td colspan="2" bgcolor="red">Phát sinh mảng và tính toán</td>
		</tr>
		<tr bgcolor="pink">
			<td>Nhập số phần tử: </td>
			<td><input type="text" name="text" required="" value="<?php if(isset($text)) echo $text ?>" ></td>

		</tr>
		<tr bgcolor="pink">
			<td></td>
			<td><input type="submit" name="submit" value="Phát sinh và tính toán"><input type="submit" name="reset" value="reset"></td>
		</tr>
		<tr>
			<td>Mảng: </td>
			<td><input type="text" readonly="" name="arr" size="30" value="<?php if(isset($arr1)) echo $arr1; ?>"></td>
		</tr>
		<tr>
			<td>GTLN(MAX) trong mảng: </td>
			<td><input type="text" readonly="" name="" value="<?php if(isset($max)) echo $max; ?>" ></td>
		</tr>
		<tr>
			<td>GTNN(MIN) trong mảng: </td>
			<td><input type="text" readonly="" name="min" value="<?php if(isset($min)) echo $min; ?>" ></td>
		</tr>
		<tr>
			<td>Tổng mảng </td>
			<td><input type="text" readonly="" name="" value="<?php if(isset($tong)) echo $tong; ?>"></td>
		</tr>
		<tr align="center">
			<td colspan="2"><span style="color: red">Ghi chú: </span>Các phần tử trong mảng sẽ có giá trị từ 0-20 </td>
		</tr>
	</table>
</form>

</body>
</html>