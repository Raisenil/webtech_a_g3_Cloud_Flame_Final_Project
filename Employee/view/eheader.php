 <?php
	session_start();
	require_once('../model/eusersModel.php');
	$conn = getConnection();
	if(!isset($_COOKIE['mflag'])){
		header('location: elogin.php');


	}




$sql3="select * from users where type='employee' and username='{$_SESSION['username']}'";
$result3=mysqli_query($conn,$sql3);
$count3=mysqli_num_rows($result3); 
if($count3>0)
{

}
else{
	header('location: elogin.php');
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
    <script defer src="../js/registerscript.js"></script>
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
						<a href="eviewindex.php">Home</a>
					</li>
					<li>
						<a href="eviewcatagories.php">Catagories</a>
					</li>
					<li>
						<a href="eviewfoods.php">Foods</a>
					</li>
					<li>
						<a href="eviewbook-a-table.php">Book a Table</a>
					</li>
                    <li>
						<a href="evieworder.php">Orders</a>
					</li>
					<li>
						<a href="eviewcontacts.php">Contacts</a>
					</li>
					<li>
						<a href="eviewabout.php">About</a>
					</li>
                    <li>
						<a href="eusers.php">Users</a>
					</li>
                    <li>
						<a href="euserinfo.php"><?=$_SESSION['username']?></a>
					</li>
                    <li>
						<a href="../controller/elogout.php">Logout</a>
					</li>
				</ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>