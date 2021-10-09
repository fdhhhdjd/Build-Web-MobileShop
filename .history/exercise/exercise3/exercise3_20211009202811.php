<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán tiền điện</title>
    <style type="text/css">
        table {
            align: center;
            width: 400px;
            background-color: #efce6966;
        }

        td{
            padding-left: 10px;
        }

        h2{
            color: #e14c12;
        }

        #kq{
            background: pink;
        }
    </style>
</head>

<body>
<?php
    if(isset($_POST["tinh"]))
    {
        $dg = 20000;
        $ten = $_POST["ten"];
        $csc = $_POST["csc"];
        $csm = $_POST["csm"];
        $dg = $_POST["dg"];
        $total = $_POST["total"];

        if($ten <= 0 || $csc <= 0 || $csm <= 0 || $dg <= 0
            || !is_numeric($csc) || !is_numeric($csm)
            || !is_numeric($dg) || $csm < $csc)
            $thongbao = "Nhập lại tên chủ hộ, chỉ số cũ, chỉ số mới";
        else
            $total = ($csm - $csc) * $dg;
    }
?>
    <form action="bai3.php" method="post" name="Thanh toan tien dien">
        <table align="center">
            <tr bgcolor="#efce69">
                <td colspan="2">
                    <h2 style="text-align: center;">DIỆN TÍCH HÌNH CHỮ NHẬT</h2>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; color: red;">
                    <?php if(isset($thongbao)) echo $thongbao ?>
                </td>
            </tr>

            <tr>
                <td>Tên chủ hộ:</td>
                <td>
                    <input type="text" name="ten" value="<?php if(isset($ten)) echo $ten ?>" required>
                </td>
            </tr>

            <tr>
                <td>Chỉ số cũ:</td>
                <td>
                    <input type="text" name="csc" value="<?php if(isset($csc)) echo $csc ?>" required>
                    <span>(KW)</span>
                </td>
            </tr>

            <tr>
                <td>Chỉ số mới:</td>
                <td>
                    <input type="text" name="csm" value="<?php if(isset($csm)) echo $csm ?>" required>
                    <span>(KW)</span>
                </td>
            </tr>

            <tr>
                <td>Đơn giá:</td>
                <td>
                    <input type="text" name="dg" value="<?php if(isset($dg)) echo $dg ?>" required>
                    <span>(VND)</span>
                </td>
            </tr>

            <tr>
                <td>Só tiền thanh toán:</td>
                <td>
                    <input type="text" name="total" id="kq" value="<?php if(isset($total)) echo $total ?>" readonly>
                    <span>(VND)</span>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Tính" name="tinh">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>