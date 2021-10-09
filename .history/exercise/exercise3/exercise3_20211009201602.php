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
            background: gray;
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
    $chi_so_cu = $_POST['chi_so_cu'];
    $chi_so_moi = $_POST['chi_so_moi'];
    define("don_gia",20000);
    $so_tien_thanh_toan=($chi_so_moi-$chi_so_cu)*don_gia
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
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                 Chỉ số củ
                </td>
                <td>
                    <input type="text" name="chi_so_cu" value="<?php echo $chi_so_cu?>">
                </td>
                
            </tr>
          
            <tr>
                <td>
                   Chỉ số mới
                </td>
                <td>
                    <input type="text" name="chi_so_moi" value="<?php echo $chi_so_moi?>" >
                </td>
            </tr>
            <tr>
                <td>
                  Đơn giá
                </td>
                <td>
                    <input type="text" name="don_gia" value="<?php echo $don_gia ?>" >
                </td>
            </tr>
            <tr>
                <td>
                  Số tiền thanh toán
                </td>
                <td>
                    <input type="text" name="acreage" value="<?php $so_tien_thanh_toan ?>" class="money" disabled >
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