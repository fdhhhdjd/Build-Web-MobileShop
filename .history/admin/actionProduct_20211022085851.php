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
	$date="";

	if(isset($_POST['add'])){
		$brand=$_POST['brand'];
		$name=$_POST['name'];
		$price=$_POST['price'];
		$image=$_POST['oldimage'];
		$date=$_POST['date'];
		$query="INSERT INTO product(item_id, item_brand, item_name, item_price, item_image, item_register)VALUES(?,?,?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssssss",$id,$brand,$name,$price,$image,$date);
		$stmt->execute();
		// move_uploaded_file($_FILES['image'], $image);
		header('location:product.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";
		

	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];
		$sql="SELECT FROM product WHERE 0";
		$stmt2=$conn->prepare($sql);
		$query="DELETE FROM product WHERE item_id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		header('location:product.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	// if(isset($_GET['edit'])){
	// 	$id=$_GET['edit'];

	// 	$query="SELECT * FROM product WHERE item_id=?";
	// 	$stmt=$conn->prepare($query);
	// 	$stmt->bind_param("i",$id);
	// 	$stmt->execute();
	// 	$result=$stmt->get_result();
	// 	$row=$result->fetch_assoc();

	// 	$id=$row['item_id'];
	// 	$brand=$row['item_brand'];
	// 	$name=$row['item_name'];
	// 	$price=$row['item_price'];
	// 	$date=$row['item_image'];
	// 	$date=$row['item_register'];
	// 	$update=true;
	// }
	// if(isset($_POST['update'])){
	// 	$brand=$_POST['brand'];
	// 	$name=$_POST['name'];
	// 	$price=$_POST['price'];
	// 	$image=$_POST['oldimage'];
	// 	$date=$_POST['date'];
	// 	$query="UPDATE product SET item_id=?,item_brand=?,item_name=?,item_price=?,item_image=?,item_register=? WHERE 1";
	// 	$stmt=$conn->prepare($query);
	// 	$stmt->bind_param("ssssss",$id,$brand,$name,$price,$image,$date);
	// 	$stmt->execute();
	// 	$_SESSION['response']="Updated Successfully!";
	// 	$_SESSION['res_type']="primary";
	// 	header('location:product.php');
	// }
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM product WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
		$id=$row['item_id'];
		$brand=$row['item_brand'];
		$name=$row['item_name'];
		$price=$row['item_price'];
		$image=$row['item_image'];
		$date=$row['item_register'];
		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$brand=$_POST['brand'];
		$name=$_POST['name'];
		$price=$_POST['price'];
		$image=$_POST['oldimage'];
		$date=$_POST['date'];
		$query="UPDATE product SET item_id=?,item_brand=?,item_name=?,item_price=?,item_image=?,item_register=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sssss",$id,$brand,$name,$price,$image,$date);
		$stmt->execute();
		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:product.php');
	}


	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM product WHERE item_id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
		$vid=$row['item_id'];
		$vbrand=$row['item_brand'];
		$vname=$row['item_name'];
		$vprice=$row['item_price'];
		$vimage=$row['item_image'];
		$vregister=$row['item_register'];
	}
?>
