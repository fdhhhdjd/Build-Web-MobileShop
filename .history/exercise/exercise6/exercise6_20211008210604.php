<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exercise6.css" />
    <title>Document</title>
</head>
<body>
<?php
$n1st=$n2nd="";
?>

<form method="post" name="phep_toan" action="pheptoan.php">
<table align="center">
<tr>
    <td colspan="2">
        <h1 class="title">
            Phep tinh tren hai so
        </h1>
    </td>
    <tr>
        <td class="second-left">Chon phep tinh: </td>
        <td class="second-right">
            <input type="radio" name="phep_tinh"  value="Cong"
                   <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Cong')) {echo 'checked="checked"';}?>>Cong
            <input type="radio" name="phep_tinh" value="Tru"
                   <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Tru')) {echo 'checked="checked"';}?>> Tru
            <input type="radio" name="phep_tinh" value="Nhan"
                   <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Nhan')) {echo 'checked="checked"';}?> checked> Nhan
            <input type="radio" name="phep_tinh" value="Chia"
                    <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Chia')) {echo 'checked="checked"';}?>> chia
            <input type="radio" name="phep_tinh" value="Phan_Tram"
                <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Phan_Tram')) {echo 'checked="checked"';}?>> Phan_Tram
        </td>
    </tr>
    <tr>
        <td class="third-four-left">So thu nhat: </td>
        <td>
            <input type="text" name="n1st" value="<?php if(isset($_POST["n1st"])) echo $n1st; else $n1st=""; ?>">
        </td>
    </tr>
    <tr>
        <td class="third-four-left">So thu hai: </td>
        <td>
            <input type="text" name="n2nd" value="<?php if(isset($_POST["n2nd"])) echo $n2nd; else $n2nd=""; ?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="submit" name="submit" value="Tinh"> </td>
    </tr>
</tr>
</table>
</form>
</body>
</html>