<?php
	session_start();
	include 'config.php';
	mysqli_set_charset($conn,'utf8mb4');
	$update=false;
	$id="";
	$brand="";
	$name="";
	$price="";
	$image="";
	$register="";

	// if(isset($_POST['add'])){
	// 	$name=$_POST['name'];
	// 	$email=$_POST['email'];
	// 	$password=$_POST['password'];
	// 	$query="INSERT INTO users(id,username,email,password)VALUES(?,?,?,?)";
	// 	$stmt=$conn->prepare($query);
	// 	$stmt->bind_param("ssss",$id,$name,$email,$password);
	// 	$stmt->execute();
	// 	header('location:index.php');
	// 	$_SESSION['response']="Successfully Inserted to the database!";
	// 	$_SESSION['res_type']="success";

	// }
	// if(isset($_GET['delete'])){
	// 	$id=$_GET['delete'];
	// 	$sql="SELECT FROM users WHERE 0";
	// 	$stmt2=$conn->prepare($sql);
	// 	$query="DELETE FROM users WHERE id=?";
	// 	$stmt=$conn->prepare($query);
	// 	$stmt->bind_param("i",$id);
	// 	$stmt->execute();
	// 	header('location:index.php');
	// 	$_SESSION['response']="Successfully Deleted!";
	// 	$_SESSION['res_type']="danger";
	// }
	// if(isset($_GET['edit'])){
	// 	$id=$_GET['edit'];

	// 	$query="SELECT * FROM users WHERE id=?";
	// 	$stmt=$conn->prepare($query);
	// 	$stmt->bind_param("i",$id);
	// 	$stmt->execute();
	// 	$result=$stmt->get_result();
	// 	$row=$result->fetch_assoc();

	// 	$id=$row['id'];
	// 	$name=$row['username'];
	// 	$email=$row['email'];
	// 	$password=$row['password'];
	// 	$update=true;
	// }
	// if(isset($_POST['update'])){
	// 	$id=$_POST['id'];
	// 	$name=$_POST['name'];
	// 	$email=$_POST['email'];
	// 	$password=$_POST['password'];
	// 	$query="UPDATE users SET username=?,email=?,password=? WHERE id=?";
	// 	$stmt=$conn->prepare($query);
	// 	$stmt->bind_param("ssss",$name,$email,$password,$id);
	// 	$stmt->execute();
	// 	$_SESSION['response']="Updated Successfully!";
	// 	$_SESSION['res_type']="primary";
	// 	header('location:index.php');
	// }

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM product WHERE item_id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
		$vid=$row['item_id'];
		$vname=$row['item_brand'];
		$vemail=$row['email'];
		$vpassword=$row['password'];
	}
?>
