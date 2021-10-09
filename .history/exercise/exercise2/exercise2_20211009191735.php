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
    </style>
</head>
<body>
<?php

    ini_set('display_errors',0);
    $width = $_POST['width'];
    $height = $_POST['height'];
    $chu_vi = ($width+$height)*2;
    $dien_tich = $width*$height;
?>
    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    Diện tích và chu vi hình tròn
                </td>
            </tr>
            <tr>
                <td>
                    Bán kính
                </td>
                <td>
                    <input type="text" name="width">
                </td>
            </tr>
            <tr>
                <td>
                    Chu vi
                </td>
                <td>
                    <input type="text" name="height" value="<?php echo $chu_vi ?>" disabled>
                </td>
            </tr>
          
            <tr>
                <td>
                    Diện tích
                </td>
                <td>
                    <input type="text" name="acreage" value="<?php echo $dien_tich ?>" disabled>
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