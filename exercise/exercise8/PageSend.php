<?php
    if(isset($_POST['submit'])){
        $fullName = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $study = $_POST['checkbox'];
        $note = $_POST['note'];
        $ret = "";

        echo "Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập: <br>";
        echo "Họ tên: ".$fullName;
        echo "<br> Address: ".$address;
        echo "<br> Phone: ".$phone;
        echo "<br> Gender: ".$gender;
        echo "<br> Country: ".$country;
        echo "<br> Study: ";
        if(isset($study)){
            foreach ($study as $value){
                echo $value;
                if (next($study)==true) echo $ret = ", ";
            }
        }
        echo "<br> Note: ".$note;
        echo "<br> <a href='javascript:window.history.back(-1);'>Quay về trang trước</a>";
    }
?>