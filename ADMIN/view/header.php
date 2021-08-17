<?php
	session_start();
	require_once('../model/usersModel.php');
	$conn = getConnection();
	if(!isset($_COOKIE['flag'])){
		header('location: login.php');
	}

	$sql3="select * from users where type='admin' and username='{$_SESSION['username']}'";

	$result3=mysqli_query($conn,$sql3);

	$count3=mysqli_num_rows($result3);

	if($count3>0){

	}else{
    header('location: login.php');
	}
	/*<script defer src="../model/js/registerscript.js"></script>
	<script type="text/javascript" src="../model/js/script.js"></script>*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="../js/registerscript.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="viewindex.php" title="Logo">
                    <img src="images/logo.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
            <ul>
					<li>
						<a href="viewindex.php">Home</a>
					</li>
					<li>
						<a href="viewcatagories.php">Catagories</a>
					</li>
					<li>
						<a href="viewfoods.php">Foods</a>
					</li>
					<li>
						<a href="viewbook-a-table.php">Book a Table</a>
					</li>
                    <li>
						<a href="vieworder.php">Orders</a>
					</li>
					<li>
						<a href="viewcontacts.php">Contacts</a>
					</li>
					<li>
						<a href="viewabout.php">About</a>
					</li>
                    <li>
						<a href="users.php">Users</a>
					</li>
                    <li>
						<a href="userinfo.php"><?=$_SESSION['username']?></a>
					</li>
                    <li>
						<a href="../controller/logout.php">Logout</a>
					</li>
				</ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>