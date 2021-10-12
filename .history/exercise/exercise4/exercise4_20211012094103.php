<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
    <style type="text/css">
        table {
            align: center;
            width: 400px;
            background-color: #fce8f7;
        }

        td{
            padding-left: 10px;
        }

        h2{
            color: white;
        }

        #kq{
            background: #fff2ca66;
        }
    </style>
</head>

<body>
<?php
    if(isset($_POST["tinh"]))
    {
        $toan = $_POST["toan"];
        $ly = $_POST["ly"];
        $hoa = $_POST["hoa"];
        $dc = $_POST["dc"];

        if($toan <= 0 || $ly <= 0 || $hoa <= 0 || $dc <= 0
            || !is_numeric($toan) || !is_numeric($ly) || !is_numeric($hoa)
            || !is_numeric($dc))
            $thongbao = "Nhập lại toán, lý, hóa, điểm chuẩn";
        else
        {
            $total = $toan + $ly + $hoa;
            if($total > $dc && $toan > 0 && $ly > 0 && $hoa > 0)
                $kq = "Đậu";
            else
                $kq = "Rớt";
        }
    }
    if(isset($_POST['reset']))
    {
        $toan = '';
    }
?>
    <form action="" method="post" name="ket qua thi dai hoc">
        <table align="center">
            <tr bgcolor="#dd54b9">
                <td colspan="2">
                    <h2 style="text-align: center;">KẾT QUẢ THI ĐẠI HỌC</h2>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; color: red;">
                    <?php if(isset($thongbao)) echo $thongbao ?>
                </td>
            </tr>

            <tr>
                <td>Toán:</td>
                <td>
                    <input type="text" name="toan" value="<?php if(isset($toan)) echo $toan ?>" required>
                </td>
            </tr>

            <tr>
                <td>Lý:</td>
                <td>
                    <input type="text" name="ly" value="<?php if(isset($ly)) echo $ly ?>" required>
                </td>
            </tr>

            <tr>
                <td>Hóa:</td>
                <td>
                    <input type="text" name="hoa" value="<?php if(isset($hoa)) echo $hoa ?>" required>
                </td>
            </tr>

            <tr>
                <td>Điểm chuẩn:</td>
                <td>
                    <input type="text" name="dc" value="<?php if(isset($dc)) echo $dc ?>" required>
                </td>
            </tr>

            <tr>
                <td>Tổng điểm:</td>
                <td>
                    <input type="text" name="total" id="kq" value="<?php if(isset($total)) echo $total ?>" readonly>
                </td>
            </tr>

            <tr>
                <td>Kết quả thi:</td>
                <td>
                    <input type="text" name="kq" id="kq" value="<?php if(isset($kq)) echo $kq ?>" readonly>
                </td>
               
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Xem kết quả" name="tinh">
                    <input type="submit" value="Reset" name="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>