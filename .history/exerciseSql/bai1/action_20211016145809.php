<?php
    session_start();
    include './config.php';

    $update = false;
    $masv = "";
    $ho = "";
    $ten = "";
    $diachi = "";
    $check = false;
    if(isset($_POST['add'])){
        // $masv = $_POST['MaSV'];
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $diachi = $_POST['diachi'];
        $id_lop = $_POST['id_lop'];

        $sql = "INSERT INTO sv(Ho,Ten,DiaChi,ID_Lop) VALUES ('$ho','$ten','$diachi','$id_lop')";
        
        if($conn->query($sql) === TRUE){
            $_SESSION['thongbao'] = "Đăng ký thành công";
            $_SESSION['type'] = "success";
            header('location: xemkq.php');
        } else echo "that bai";

        // $stmt=$conn->prepare($sql);
		// $stmt->bind_param("ssss",$ho,$ten,$diachi,$id_lop);
		// $stmt->execute();
        
        $conn->close();
    }

    if(isset($_GET['delete'])){
        $mssv = $_GET['delete'];
        $sql = "DELETE FROM sv WHERE MaSV = '$mssv' ";
        if($conn->query($sql) === TRUE){
            $_SESSION['thongbao'] = "Xóa thành công";
            $_SESSION['type'] = "success";
            header('location: xemkq.php');
        }
        else{
            $_SESSION['thongbao'] = "Xóa thất bại";
            $_SESSION['type'] = "danger";
            header('location: xemkq.php');
        }
    }

    if(isset($_GET['mssv'])){
        $id=$_GET['mssv'];

        $query="SELECT * FROM sv WHERE MaSV= ?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
       
        $id = $row['MaSV'];
        $ho = $row['Ho'];
        $ten = $row['Ten'];
        $diachi = $row['DiaChi'];
        $id_lop = $row['ID_Lop'];
        
        $update=true;
    }

    if(isset($_POST['update'])){
        $mssv = $_POST['id'];
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $diachi = $_POST['diachi'];
        $id_lop = $_POST['id_lop'];

        $sql = "UPDATE sv SET Ho='$ho',Ten='$ten', DiaChi='$diachi', ID_Lop='$id_lop' WHERE MaSV=$mssv";
        if($conn->query($sql) === TRUE) {
            $_SESSION['thongbao'] = "Sửa thành công";
            $_SESSION['type'] = "success";
            header('location: xemkq.php');
        }
        else{
            $_SESSION['thongbao'] = "Sửa thất bại .$sql";
            $_SESSION['type'] = "danger";
            header('location: xemkq.php');
        }
        
    }
?>