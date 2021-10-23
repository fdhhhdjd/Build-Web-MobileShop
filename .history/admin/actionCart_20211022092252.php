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
		$query="INSERT INTO cart(cart_id, user_id, item_id)VALUES(?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sss",$cart,$user,$item);
		$stmt->execute();
		header('location:cart.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";

	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];
		$sql="SELECT FROM cart WHERE 0";
		$stmt2=$conn->prepare($sql);
		$query="DELETE FROM cart WHERE cart_id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$cart);
		$stmt->execute();
		header('location:cart.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		$query="SELECT * FROM users WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$name=$row['username'];
		$email=$row['email'];
		$password=$row['password'];
		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$query="UPDATE users SET username=?,email=?,password=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssss",$name,$email,$password,$id);
		$stmt->execute();
		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:index.php');
	}

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM cart WHERE cart_id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$cart);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
		$vcart=$row['cart_id'];
		$vuser=$row['user_id'];
		$vitem=$row['item_id'];
	}
?>
