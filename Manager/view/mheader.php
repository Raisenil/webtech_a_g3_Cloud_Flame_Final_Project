<?php
	session_start();
	require_once('../model/musersModel.php');
	$conn = getConnection();
	if(!isset($_COOKIE['mflag'])){
		header('location: mlogin.php');


	}




$sql3="select * from users where type='manager' and username='{$_SESSION['username']}'";
$result3=mysqli_query($conn,$sql3);
$count3=mysqli_num_rows($result3);
if($count3>0)
{

}
else{
	header('location: mlogin.php');
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="../model/js/registerscript.js"></script>
	<script type="text/javascript" src="../model/js/script.js"></script>
</head>
<body>
<section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="mviewindex.php" title="Logo">
                    <img src="images/logo.jpg" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
            <ul>
					<li>
						<a href="mviewindex.php">Home</a>
					</li>
					<li>
						<a href="mviewcatagories.php">Catagories</a>
					</li>
					<li>
						<a href="mviewfoods.php">Foods</a>
					</li>
					<li>
						<a href="mviewbook-a-table.php">Book a Table</a>
					</li>
                    <li>
						<a href="mvieworder.php">Orders</a>
					</li>
					<li>
						<a href="mviewcontacts.php">Contacts</a>
					</li>
					<li>
						<a href="mviewabout.php">About</a>
					</li>
                    <li>
						<a href="musers.php">Users</a>
					</li>
                    <li>
						<a href="muserinfo.php"><?=$_SESSION['username']?></a>
					</li>
                    <li>
						<a href="../controller/mlogout.php">Logout</a>
					</li>
				</ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>