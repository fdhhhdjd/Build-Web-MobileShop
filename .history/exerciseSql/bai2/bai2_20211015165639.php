<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th{
            color: red;
        }
    </style>
</head>
<body>
    <h3 style="text-transform: uppercase;" align="center">Thông tin khách hàng</h3>
    <table align="center" border="true">
        <tr>
            <th>Mã KH</th>
            <th>Tên khách hàng</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
        </tr>

        <?php
            require("../Connect.php");
            $query = "select * from khach_hang";
            $result = $conn->query($query);
            if(!$result) echo "Query failed: " .$conn->error;
            $dem=0;
            while($row=$result->fetch_array()){
                if($dem % 2 ==0)
                    echo "<tr bgcolor='yellow'>";
                else echo "<tr>";
                for($i=0;$i<$result->field_count;$i++){
                    if($i==2){
                        if($row[$i] == 0){
                            echo "<td align='center'><img width='50px' height='50px' src='../QL_BanSua/boy.png'></td>";
                        }else{
                            echo "<td align='center'><img width='50px' height='50px' src='../QL_BanSua/girl.png'></td>";
                        }
                    }else echo "<td>" .$row[$i] ."</td>";
                    
                }
                echo "</tr>";
                $dem++;
            }
        ?>

    </table>
</body>
</html>