<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        div{
            border: 1px solid black;
            position: relative;
        }

        h3{
            position: absolute;
            top: -30px;
            background: white;
            left: 20px;
        }

        td{
            padding: 10px 0 0 20px;
        }
    </style>
</head>

<body>
    <form action="PageSend.php" method="post">
        <div>
            <h3>Enter Your Information</h3>
            <table>
                <tr>
                    <td style="padding-top: 20px;">Fullname</td>
                    <td style="padding-top: 20px;">
                        <input type="text" name="fullname"/>
                    </td>
                </tr>
    
                <tr>
                    <td>Address</td>
                    <td>
                        <input type="text" name="address">
                    </td>
                </tr>
    
                <tr>
                    <td>Phone</td>
                    <td>
                        <input type="text" name="phone">
                    </td>
                </tr>
    
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" checked> Nam
                        <input type="radio" name="gender"> Nữ
                    </td>
                </tr>
    
                <tr>
                    <td>Country</td>
                    <td>
                        <select name="country" id="country">
                            <option value="Việt Nam">Việt Nam</option>
                            <option value="Anh">Anh</option>
                        </select>
                    </td>
                </tr>
    
                <tr>
                    <td>Study</td>
                    <td>
                        <input type="checkbox" name="checkbox[]" value="PHP & MySQL">PHP & MySQL
                        <input type="checkbox" name="checkbox[]" value="ASP.NET">ASP.NET
                        <input type="checkbox" name="checkbox[]" value="CCNA">CCNA
                        <input type="checkbox" name="checkbox[]" value="Security+">Security+
                    </td>
                </tr>
    
                <tr>
                    <td>Note</td>
                    <td>
                        <textarea name="note" rows="10" cols="52"></textarea>
                    </td>
                </tr>
    
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Gửi"> 
                        <input type="reset" name="reset" value="Hủy"> 
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>