<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS</title>
    <style type="text/css">
        .header{
            align-content: center;
            text-align: center;
            text-transform: uppercase;
            width: 600px;
        }
        .f-grid {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex-flow: row wrap;
        }

        .f-grid-col {
            flex: 8%;
            text-align: left;
        }
        .f-grid-col1 {
            flex:92%;
        }
    </style>
</head>
<body>

<?php
if (isset($_POST['submit'])){
    $soN=$_POST['soN'];
    if (is_numeric($soN)&& is_int(0+$soN)&& $soN>0){
        $arr=array();
        for($i=0;$i<$soN;$i++)
        {
            $x=rand(-100,200);
            $arr[$i]=$x;
        }
        $ketqua="Mảng được tạo là:\n" .implode(" ",$arr)."\n";
        $count=0;
        foreach ($arr as $i){
            if($i%2==0) $count++;
        }
        if ($count==2) $ketqua.="Co $count so chan trong mang \n";

        $count=0;
        foreach ($arr as $i){
            if($i<100) $count++;
        }
        $ketqua.="Co $count phần tử trong mảng có giá trị là số nhỏ hơn 100 \n";
        $sum=0;
        foreach ($arr as $i){
            if($i<0) $sum=$sum+$i;
        }
        $ketqua.="Tổng của các phần tử trong mảng có giá trị là số âm la: $sum \n";
        $index=0;
        foreach ($arr as $key=>$value){
            if ($value==0) $index=$key;
        }
        if ($index!=0) $ketqua.="vị trí của các phần tử trong mảng có giá trị bằng 0 la: $index \n";
        else $ketqua.="Khong co phan tu co gia tri bang 0 \n";
        asort($arr);
//        print_r($arr);
        $ketqua.="Mang sap xep la: \n" .implode(" ",$arr)."\n";


    } else $ketqua="$soN khong phai la so nguyen duong";
};
?>
<div class="header">
    <h3>Bai tap 1 <br></h3>
</div>
<form action="" method="post">
<div class="f-grid">
    <div class="f-grid-col">
        Nhap vao so n: <br>
        Ket qua: <br>
    </div>
    <div class="f-grid-col1">
        <input type="text" name="soN" value="<?php if(isset($_POST['soN'])) echo $soN; ?>"> <br>
        <textarea cols="50" rows="10" name="ketqua"><?php if (isset($_POST['ketqua'])) echo $ketqua?></textarea> <br>
        <input type="submit" value="Thuc hien" name="submit">
    </div>
</div>
</form>

</body>
</html>