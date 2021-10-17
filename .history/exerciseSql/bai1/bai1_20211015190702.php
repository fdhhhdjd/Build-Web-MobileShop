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
    <form action="result.php" method="post" name="ket qua thi dai hoc">
        <table align="center">
            <tr bgcolor="#FFFFCC">
                <td colspan="2">
                    <h2 style="text-align: center; color: #333">KẾT QUẢ THI ĐẠI HỌC</h2>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center; color: red;">
                   
                </td>
            </tr>

            <tr>
                <td>Tên:</td>
                <td>
                    <input type="text" name="ten"  required>
                </td>
            </tr>

            <tr>
                <td>Họ:</td>
                <td>
                    <input type="text" name="ho" required>
                </td>
            </tr>

            <tr>
                <td>Địa chỉ:</td>
                <td>
                    <input type="text" name="diachi"  required>
                </td>
            </tr>

            <tr>
                <td>Id của lớp:</td>
                <td>
                    <input type="text" name="idcualop"  required>
                </td>
            </tr>


            <tr>
                <td></td>
                <td>
                <input type="submit" value="Gửi" name="gui">
                    <input type="submit" value="Xem kết quả" name="xemketqua">
                    <input type="submit" value="Reset" name="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>