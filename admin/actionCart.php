<?php
	session_start();
	include 'config.php';
	mysqli_set_charset($conn,'utf8mb4');
	$update=false;
	$cart="";
	$user="";
	$item="";
	if(isset($_POST['add'])){
		$cart=$_POST['cart'];
		$user=$_POST['user'];
		$item=$_POST['item'];
		$query="INSERT INTO cart(cart_id, user_id, item_id)VALUES(?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sss",$cart,$user,$item);
		$stmt->execute();
		header('location:Cart.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";

	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];
		$sql="SELECT FROM cart WHERE 0";
		$stmt2=$conn->prepare($sql);
		$query="DELETE FROM cart WHERE cart_id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		header('location:Cart.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		$query="SELECT * FROM cart WHERE cart_id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
		$cart=$row['cart_id'];
		$user=$row['user_id'];
		$item=$row['item_id'];
		$update=true;
	}
	if(isset($_POST['update'])){
		$cart=$_POST['cart'];
		$user=$_POST['user'];
		$item=$_POST['item'];
		$query="UPDATE cart SET cart_id='$cart',user_id='$user',item_id='$item' WHERE cart_id";
		$stmt=$conn->prepare($query);
		$stmt->execute();
		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:Cart.php');
	}

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM cart WHERE cart_id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
		$vcart=$row['cart_id'];
		$vuser=$row['user_id'];
		$vitem=$row['item_id'];
	}
?>
