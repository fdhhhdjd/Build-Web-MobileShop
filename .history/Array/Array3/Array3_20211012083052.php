<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<table align="center" bgcolor="white" border="1px soild black">
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