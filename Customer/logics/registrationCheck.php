<?php 
	//session_start();
	//$_SESSION['total']=0;
	//header('Location:Dashboard.php');
	if($_POST['name']=="" || $_POST['email']=="" ||$_POST['userName']=="" || $_POST['password']=="" || $_POST['comPassword']=="")
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form mathod="POST" action="../views/Registration.html" >
		<h1>Information Missing! Give Information Properly..</h1>
		<input type="Submit" name="" value="OK" width="30%" style="background-color:#00BFFF;">
	</form>
</body>
</html>

<?php
	}
	else if($_POST['password']!=$_POST['comPassword'])
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form mathod="POST" action="../views/Registration.html" >
		<h1>Confirm Password Not Match! Give Information Properly..</h1>
		<input type="Submit" name="" value="OK" width="30%" style="background-color:#00BFFF;">
	</form>
</body>
</html>

<?php
	}

	else
	{
		//file
		$conn=mysqli_connect('localhost','root','','webtech');
		$sql = "INSERT INTO users (username,password,email,type,name) VALUES ('{$_REQUEST['userName']}','{$_REQUEST['password']}','{$_REQUEST['email']}','{$_REQUEST['type']}','{$_REQUEST['name']}');";
		$s="";
		$s=mysqli_query($conn, $sql);
		echo $s."<br>";
		if($s)
		{
			//$_SESSION['temp']= "Data inserded...";
			header('location:../views/Login.html');
		}
		else
		{
			//$_SESSION['temp']="Data not inserded! ";
			header('location:../views/Registration.html');
		}
	}
?>