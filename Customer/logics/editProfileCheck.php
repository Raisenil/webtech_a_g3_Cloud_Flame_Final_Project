<?php 
	if($_COOKIE['flag']==1)
	{
		$location =  "picture/" . $_FILES["fileToUpload"]["name"];
		if(isset($_POST['picture']))
		{
			
			if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$location)) {
			    echo "File uploaded...";
			} 
			else {
			    echo "File not uploaded!";
			}
		}
		else
		{
			$conn=mysqli_connect('localhost','root','','cloud_flame');
			/*$_COOKIE['name']=$_POST['name'];
			$_COOKIE['password']=$_POST['password'];
			$_COOKIE['email']=$_POST['email'];
			$_COOKIE['phone']=$_POST['phone'];
			$_COOKIE['location']=$_POST['location'];*/
			//echo $_COOKIE['location'];
			$_COOKIE['name']=$_POST['name'];
			setcookie('name',$_POST['name'],time()+3600,'/');
			$_COOKIE['email']=$_POST['email'];
			setcookie('email',$_POST['email'],time()+3600,'/');
			//$_COOKIE['userName']=$_POST['username'];
			//setcookie('userName',$_POST['username'],time()+3600,'/');
			$_COOKIE['password']=$_POST['password'];
			setcookie('password',$_POST['password'],time()+3600,'/');
			
			$_COOKIE['location']=$_POST['location'];
			setcookie('location',$_POST['location'],time()+3600,'/');
			$_COOKIE['phone']=$_POST['phone'];
			setcookie('phone',$_POST['phone'],time()+3600,'/');
			$sql = "UPDATE users SET name='{$_POST['name']}', password='{$_POST['password']}', email='{$_POST['email']}',phone='{$_POST['phone']}',location='{$_POST['location']}' WHERE username='{$_COOKIE['userName']}'";
			$s="";
			$s=mysqli_query($conn, $sql);
			echo $s."<br>";
			if($s)
			{
				$s.= "Data updated...";
			}
			else
			{
				$s.="This data not found! ";
			}
				//return $s;
		}
	 	header('Location:../views/Profile.php');

	}
?>