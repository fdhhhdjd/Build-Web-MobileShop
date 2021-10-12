<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .input1 {
            background: #FFFF00;
        }
        .input2{
            background: pink;
        }
    </style>
</head>
<body>
<?php
function createArr($text)
{
    $arr=[];
    for ($i=0; $i <$text ; $i++) { 
        $arr=[$i]=rand(0,20);
    }
    return $arr
}
if(isset($_POST['submit']))
{
    $text=$_POST['text'];
    $arr=createArr($arr);
    $arr1=implode(',',$arr);
    $Max=GTLN($Max);
    $Min=GTLN($Min);
    $result=Tong($result);

}

?>
<form action="" method="post">
<table align="center" bgcolor="white">
    <th colspan="3" style="text-transform: uppercase" bgcolor="	#C71585">
        Phat sinh va tinh toan
    </th>
    <tr bgcolor="pink">
        <td>Nhap so phan tu</td>
        <td> <input type="text" name="text" value="<?php if (isset($text)) echo $text;?>" placeholder="nhap pt cua mang" size="35"> </td>
        <td style="color: red"><h4>(*)</h4> </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="Phat sinh va tinh toan" class="input1">
        </td>
        <td></td>
    </tr>
    <tr>
    <td>Mang</td>
        <td>
            <input type="text" value="<?php if (isset($arr)) echo  $arr;?>" size="35" class="input2">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>GTLN (MAX)</td>
        <td>
            <input type="text" value="<?php if (isset($Max)) echo  $Max;?>" size="35" class="input2">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>GTNN (MIN)</td>
        <td>
            <input type="text" value="<?php if (isset($Min)) echo  $Min;?>" size="35" class="input2">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>Tong mang</td>
        <td>
            <input type="text" value="<?php if (isset($result)) echo  $result;?>" size="35" class="input2">
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