<?php
	session_start();
    require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != "" || $password != ""){

			$_SESSION['flag'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

			$conn = getConnection();
			$sql="SELECT * FROM users where username = '$username' and password = '$password'";
			
			$result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);//new

            if($result->num_rows == 1  ){
                $status_admin = validate_admin($username, $password);
                $status_customer = validate_customer($username, $password);
                $status_manager = validate_manager($username, $password);
                $status_employee = validate_employee($username, $password);
                if($status_admin){
                    setcookie('flag', 'true', time()+3600, '/');
                    $_SESSION['username'] = $username;
                    header('location: ../view/admin.php');
                }elseif($status_customer){
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
                    //
                    header('location: ../../Customer/views/Dashboard.php');
                }elseif($status_manager){
                    setcookie('flag', 'true', time()+3600, '/');
                    $_SESSION['username'] = $username;
                    header('location: ../../manager/view/manager.php');
                }elseif($status_employee){
                    setcookie('flag', 'true', time()+3600, '/');
                    $_SESSION['username'] = $username;
                    header('location: ../../employee/view/employee.php');
                }else{
                    echo 'invalid username/password';
                }
            }else{
                echo "invalid username/password";
            }
        }else{
            echo "invalid request...";
        }
    }
?>