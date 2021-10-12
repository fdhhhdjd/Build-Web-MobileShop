<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php 
function bubble_sort($array)
{
	for($i = 0;$i<count($array)-1;$i++)
	{
		for($j = $i+1;$j<count($array);$j++)
		{
			if($array[$i] > $array[$j])
			{
				$temp = $array[$i];
				$array[$i] = $array[$j];
				$array[$j] = $temp;
			}
		}
	}return $array;
}

function bubble_sort1($array)
{
	for($i = 0;$i<count($array)-1;$i++)
	{
		for($j = $i+1;$j<count($array);$j++)
		{
			if($array[$i] < $array[$j])
			{
				$temp = $array[$i];
				$array[$i] = $array[$j];
				$array[$j] = $temp;
			}
		}
	}return $array;
}

if(isset($_POST['submit']))
{
	$array = $_POST['array'];
	$arr1 =  explode(',', $array);
	$tangdan = bubble_sort($arr1);
	$giamdan = bubble_sort1($arr1);

	$tangdan1 =  implode(",", $tangdan);
	$giamdan1 =  implode(",", $giamdan);
}


?>

</head>
<body>
<form action="" method="post">
	<table>
		<tr>
			<td>Sap xep mang</td>
		</tr>
		<tr>
			<td>Nhập mảng: </td>
			<td><input type="text" name="array" value="<?php if(isset($array)) echo $array; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Sắp xếp tăng/giảm"></td>
		</tr>
		<tr>
			<td>Tăng dần</td>
			<td><input type="text" name="" readonly="" value="<?php if(isset($tangdan1)) echo $tangdan1 ?>"></td>
		</tr>
		<tr>
			<td>Giảm dần</td>
			<td><input type="text" name="" readonly="" value="<?php if(isset($giamdan1)) echo $giamdan1 ?>"></td>
		</tr>
	</table>
</form>


</body>
</html>