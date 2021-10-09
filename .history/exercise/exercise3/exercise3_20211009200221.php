<!DOCTYPE html>
<html>
<head>
    <title>Hình chữ nhật</title>
    <style>
        table{
            width: 500px;
            margin: auto;
            background: #ffca97;
        }
        td{
            padding: 10px;
        }
        .center{
            text-align: center;
            font-weight: bold;
            background: #ffa500;
            color: #ffffff;
        }
        input{
            width: 300px;
        }
        button{
            background: #34a853;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }
        button:hover{
            cursor: pointer;
        }
        .money{
            background:pink;
        }
    </style>
</head>
<body>
<?php
    ini_set('display_errors',0);
    $ban_kinh = $_POST['bankinh'];
    define("PI",3.14);
    $chu_vi=2*PI*$ban_kinh;
    $dien_tich=PI*pow($ban_kinh,2);
?>
    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                   Thanh Toán tiền điện
                </td>
            </tr>
            <tr>
                <td>
                    Tên chủ hộ
                </td>
                <td>
                    <input type="text" name="bankinh">
                </td>
            </tr>
            <tr>
                <td>
                 Chỉ số củ
                </td>
                <td>
                    <input type="text" name="height" value="<?php echo $chu_vi ?>">
                </td>
                
            </tr>
          
            <tr>
                <td>
                   Chỉ số mới
                </td>
                <td>
                    <input type="text" name="acreage" value="<?php echo $dien_tich ?>" >
                </td>
            </tr>
            <tr>
                <td>
                  Đơn giá
                </td>
                <td>
                    <input type="text" name="acreage" value="<?php echo $dien_tich ?>" >
                </td>
            </tr>
            <tr>
                <td>
                  Số tiền thanh toán
                </td>
                <td>
                    <input type="text" name="acreage" value="<?php echo $dien_tich ?>" class="money" disabled >
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">TÍNH</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>