<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SORT</title>
</head>
<body>
<?php
function our_swap(&$a,&$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}
function sxGiam ($arr)
{
    for($i=0;$i<count($arr)-1;$i++)
        for($j=$i+1;$j<count($arr);$j++)
            if($arr[$i] < $arr[$j]) our_swap($arr[$i],$arr[$j]);
    return $arr;
}
function sxTang ($arr)
{
    for($i=0;$i<count($arr)-1;$i++)
        for($j=$i+1;$j<count($arr);$j++)
            if($arr[$i] > $arr[$j]) our_swap($arr[$i],$arr[$j]);
    return $arr;
}
if (isset($_POST['submit'])){
    $text=$_POST['text'];
    $original=explode(",",$text);
    $result_decre = implode(",",sxGiam($original));
    $result_incre = implode(",",sxTang($original));
}
?>

<form action="" method="post">
<table align="center" bgcolor="#a9a9a9">
    <th colspan="3" style="text-transform: uppercase" bgcolor="aqua">
        SAP XEP MANG
    </th>
    <tr>
        <td>Nhap Mang</td>
        <td> <input type="text" name="text" value="<?php if (isset($text)) echo $text;?>" placeholder="nhap pt cua mang" size="35"> </td>
        <td style="color: red"><h4>(*)</h4> </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="Sap xep tang hoac giam">
        </td>
        <td></td>
    </tr>
    <tr>
        <td style="color: red"> <b>Sau khi sap xep</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Tang Dan</td>
        <td>
            <input type="text" value="<?php if (isset($result_incre)) echo  $result_incre;?>" size="35">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>Giam Dan</td>
        <td>
            <input type="text" value="<?php if (isset($result_decre)) echo  $result_decre;?>" size="35">
        </td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: center">
            <b style="color: red">(*)</b> cac so cach nhau bang dau "<b>,</b>"
        </td>
    </tr>
</table>
</form>
</body>
</html>