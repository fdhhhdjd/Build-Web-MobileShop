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
            background-color: #FFFFCC;
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
        $ten = $_POST["toan"];
        $ho = $_POST["ly"];
        $diachi = $_POST["hoa"];
        $Idcualop = $_POST["dc"];

        if($ten <= 0 || $ho <= 0 || $diachi <= 0 || $Idcualop <= 0
            || !is_numeric($ten) || !is_numeric($ho) || !is_numeric($diachi)
            || !is_numeric($Idcualop))
            $thongbao = "Nhập lại toán, lý, hóa, điểm chuẩn";
        else
        {
            $total = $ten + $ho + $diachi;
            if($total > $Idcualop && $ten > 0 && $ho > 0 && $diachi > 0)
                $kq = "Đậu";
            else
                $kq = "Rớt";
        }
    }
    if(isset($_POST['reset']))
    {
        $ten = '';
        $ho="";
        $diachi ="";
        $Idcualop ="";
    }
?>
    <form action="" method="post" name="ket qua thi dai hoc">
        <table align="center">
            <tr bgcolor="#FFFFCC">
                <td colspan="2">
                    <h2 style="text-align: center; color: #333">KẾT QUẢ THI ĐẠI HỌC</h2>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; color: red;">
                    <?php if(isset($thongbao)) echo $thongbao ?>
                </td>
            </tr>

            <tr>
                <td>Tên:</td>
                <td>
                    <input type="text" name="toan" value="<?php if(isset($ten)) echo $ten ?>" required>
                </td>
            </tr>

            <tr>
                <td>Họ:</td>
                <td>
                    <input type="text" name="ly" value="<?php if(isset($ho)) echo $ho ?>" required>
                </td>
            </tr>

            <tr>
                <td>Địa chỉ:</td>
                <td>
                    <input type="text" name="hoa" value="<?php if(isset($diachi)) echo $diachi ?>" required>
                </td>
            </tr>

            <tr>
                <td>Id của lớp:</td>
                <td>
                    <input type="text" name="dc" value="<?php if(isset($Idcualop)) echo $Idcualop ?>" required>
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