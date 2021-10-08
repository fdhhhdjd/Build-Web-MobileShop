<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pheptoan.php</title>
    <link href="exercise6.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
$pheptinh=$so1=$so2=$ketqua="";
if(isset($_POST["submit"])&& isset($_POST["phep_tinh"]))
{
    $so1=$_POST["n1st"];
    $so2=$_POST["n2nd"];
    switch ($_POST["phep_tinh"]) {
        case "Cong": {$pheptinh="Cong";$ketqua=$so1+$so2;break;}
        case "Tru": {$pheptinh="Tru";$ketqua=$so1-$so2;break;}
        case "Nhan": {$pheptinh="Nhan";$ketqua=$so1*$so2;break;}
        case "Chia": {
            $pheptinh="Chia";
            if ($so2==0) $ketqua="Khong duoc chia 0";
            else $ketqua=$so1/$so2;
            break;
        }
        case "Phan_Tram": {
            $pheptinh="Phan_Tram";
            if ($so2==0) $ketqua="Khong duoc chia 0";
            else $ketqua=$so1%$so2;
            break;
        }
        default: echo "Sai phep toan. Can nhap lai";
    };
}
?>


<table align="center">
    <tr>
        <td colspan="2">
            <h1 class="title">
                Phep tinh tren hai so
            </h1>
        </td>
    <tr>
        <td class="second-left">Phep tinh da chon: </td>
        <td class="second-right">
            <input type="radio" name="PhepTinh" checked> <?php echo $pheptinh?>
        </td>
    </tr>
    <tr>
        <td class="third-four-left">So 1: </td>
        <td>
            <input type="text" name="so1" value="<?php echo $so1 ?>">
        </td>
    </tr>
    <tr>
        <td class="third-four-left">So 2: </td>
        <td>
            <input type="text" name="so2" value="<?php echo $so2 ?>">
        </td>
    </tr>
    <tr>
        <td class="third-four-left">Ket qua: </td>
        <td> <input type="text" name="ketqua" value="<?php echo $ketqua ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <!-- <td><a href="javascript:window.history.back(-1);">Tro ve trang truoc</a></td> -->
        <td><a href="<?php echo "" .header('Location: exercise6.php') . ""; ?>">Back</a></td>
    </tr>
</table>

</body>
</html>