<?php
	$title= "User list Page";
	include('header.php');
?>

   <div id="page_title">
		<h1>User List</h1>
	</div>

	<div id='nav_bar'>
		<a href="home.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">

    <?php require_once('../model/userModel.php'); getAllUser();?>

	<a href="edit.php?id=3">EDIT A USER</a> |
	<a href="delete.php?id=3">DELETE A USER</a> 
     

    </div>

<?php include('footer.php'); ?>