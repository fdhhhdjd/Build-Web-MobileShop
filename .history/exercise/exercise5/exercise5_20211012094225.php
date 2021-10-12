<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền Karaoke</title>
    <style type="text/css">
        table {
            align: center;
            width: 400px;
            background-color: #8dd2ddd9;
        }

        td{
            padding-left: 10px;
        }

        h2{
            color: white;
        }

        #kq{
            background: #f4fac6;
        }

        #tinh{
            background: #f2f6da;
        }
    </style>
</head>

<body>
<?php
    if(isset($_POST["tinh"]))
    {
        $start = $_POST["start"];
        $end = $_POST["end"];
        $tem = 0;

        if($start <= 0 || $end <= 0 || !is_numeric($start) || !is_numeric($end))
            $thongbao = "Nhập lại giờ bắt đầu, giờ kết thúc";
        else if($start < $end)
        {
            if($start > 10 && $start < 17 && $end <= 17)
                $total = ($end - $start) * 20000;
            else if($start >= 17 && $start <= 24 && $end <= 24)
                $total = ($end - $start) * 45000;
            else if($start >= 10 && $end > 17 && $end <= 24){
                $tem = 17 - $start;
                $total = ($tem * 20000) + ($end - 17)*45000;
            }
            else
                $thongbao = "Nhập lại giờ bắt đầu, giờ kết thúc (thời gian nghỉ)";
        }
        else
            $thongbao = "Giờ kết thúc phải > giờ bắt đầu";
    }
?>
    <form action="bai5.php" method="post" name="Tinh tien karaoke">
        <table align="center">
            <tr bgcolor="#25aeae">
                <td colspan="2">
                    <h2 style="text-align: center;">TÍNH TIỀN KARAOKE</h2>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; color: red;">
                    <?php if(isset($thongbao)) echo $thongbao ?>
                </td>
            </tr>

            <tr>
                <td>Giờ bắt đầu:</td>
                <td>
                    <input type="text" name="start" value="<?php if(isset($start)) echo $start ?>" required>
                    <span>(h)</span>
                </td>
            </tr>

            <tr>
                <td>Giờ kết thúc:</td>
                <td>
                    <input type="text" name="end" value="<?php if(isset($end)) echo $end ?>" required>
                    <span>(h)</span>
                </td>
            </tr>

            <tr>
                <td>Tiền thanh toán:</td>
                <td>
                    <input type="text" name="total" id="kq" value="<?php if(isset($total)) echo $total ?>" readonly>
                    <span>(VND)</span>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Tính tiền" id="tinh" name="tinh">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>