<?php 
	session_start();
	if($_COOKIE['flag']==1)
	{
		$data=json_decode( $_POST['data']);
		//$_SESSION[$data->id];
		//echo $_SESSION[$data->id];
		$price=$data->price;
		$id=$data->id;
		$quantity=$data->quantity;
		if(($_SESSION['total']+$price)<0)
		{
			//echo "if";
			//$id=$_POST['id'];
			//$_SESSION['f1']+=1;

		//echo $data->price;
			//$_SESSION[$id]-=1;
			echo $_SESSION['total'];
		}
		else if(($_SESSION['total']+$price)>=0)
		{
			$_SESSION[$id]=$quantity;
			$_SESSION['total']+=$price;
			//echo $id;
			echo $_SESSION['total'];
			//echo "else";
		}
	}
	else
	{
		echo"<h1> Invalid Request! Go Back..</h1>";
	}
?>
