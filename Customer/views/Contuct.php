<?php 
	session_start();
	if($_COOKIE['flag']==1)
	{
?>
<!DOCTYPE html>
<html style="background-color:	#B0C4DE;">
<head>
	<title></title>
</head>
<body >
	<form method="POST" action="" >
		<table align= "center" border="1" width=100% height=700px style="background-color:#FF8000;">
			<tr height=70px><!-- r1-->
				<td rowspan="2" style="background-color:#FF8000;" width=80 align= "center" >
					<img src="picture/manu.png" height="40px" width="40px" ><br><br>
					<a href="Dashboard.php"><img src="picture/home.png" height="30px" width="30px" ></a><br>
					<a href="Profile.php"><img src="picture/profile.png" height="40px" width="40px" ></a>
					<a href="Help.php"><img src="picture/help.png" height="40px" width="40px" ></a><br>Help<br>
					<a href="../logics/logoutCheck.php"><img src="picture/logout.png" height="60px" width="60px" ></a>
				</td>
				<td  colspan="2" style="background-color:#FFB266;">
				</td>
			</tr>
			<tr style="background-color:white;">
				<td>
				<p>
					Employee		Contuct<br>
					Munna(manager)	019*******<br>
					Remon			017*******<br>
					Roni			018*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					Emp				016*******<br>
					__________________________
				</p>
				</td>
			</tr>
			
		</table>
	</form>
</body>
</html>
<?php  
}
else
{
	//$_SESSION['flag']=0;
echo"<h1> Invalid Request! Go Back..</h1>";
}

?>