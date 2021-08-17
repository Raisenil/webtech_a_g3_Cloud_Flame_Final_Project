<?php 
$temp=0;
session_start();
$conn=mysqli_connect('localhost','root','','webtech');
$username=$_REQUEST['userName'];
$password=$_REQUEST['password'];
	$sql = "select * from users where username='{$username}' and password='{$password}'";
	$result="";
	$result=mysqli_query($conn, $sql);
	$user = mysqli_fetch_assoc($result);
	//echo mysqli_num_rows($s)."<br>";
	if(mysqli_num_rows($result)>0)
	{
			$_SESSION['f1']=0;
			$_SESSION['f2']=0;
			$_SESSION['f3']=0;
			$_SESSION['f4']=0;
			$_SESSION['f5']=0;	
			$_SESSION['f6']=0;
			$_SESSION['f7']=0;
			$_SESSION['f8']=0;
			$_SESSION['f9']=0;
			$_SESSION['total']=0;
			$_SESSION['totalOrder']=0;
			$_COOKIE['flag']=1;
			setcookie('flag',1,time()+3600,'/');
			//for store data in browser
			$_COOKIE['name']=$user['name'];
			setcookie('name',$user['name'],time()+3600,'/');
			$_COOKIE['email']=$user['email'];
			setcookie('email',$user['email'],time()+3600,'/');
			$_COOKIE['userName']=$user['username'];
			setcookie('userName',$user['username'],time()+3600,'/');
			$_COOKIE['password']=$user['password'];
			setcookie('password',$user['password'],time()+3600,'/');
			
			$_COOKIE['location']=$user['location'];
			setcookie('location',$user['location'],time()+3600,'/');
			$_COOKIE['phone']=$user['phone'];
			setcookie('phone',$user['phone'],time()+3600,'/');
	 		header('Location:../views/Dashboard.php');
	 		$temp=1;
	}
	else if($temp==0)
	{
		echo"<h1> Password/Username Incorect! Go Back..</h1>";
	}

?>