<?php
	session_start();
    require_once('../model/usersModel.php');
    
    if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $location = $_POST['location'];
        $phone = $_POST['phone'];
        $type=$_POST['type'];
        $image_name = $_FILES['image']['name'];

        if($image_name != "")
        {
            $ext = end(explode('.', $image_name));
            $image_name = "Profile_pic_".rand(000, 999).'.'.$ext; 
            $source_path = $_FILES['image']['tmp_name'];
            $destination_path = "../view/images/profile_pic/".$image_name;
            $upload = move_uploaded_file($source_path, $destination_path);
            if($upload==false)
            {
                ('location: ../view/registration.php');
                die();
            }
            }else{
                $image_name="";
            }


		if(empty($username) ||
        empty($password) || 
        empty($email) ||
        empty($name) ||
        empty($location) || 
        empty($phone) 
        ){
            echo "Null value !";
        }elseif(strlen($password)<6 || strlen($password)>20){
            echo "Password should be between 6 to 20 !";

        }elseif (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            echo "Only letters and white space allowed";
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
			echo"Invalid email format";
		}
        elseif(!is_numeric($phone))
        {
			echo "Number should be numeric value";

		}
        elseif(is_numeric($name))
        {
			echo "Name cannot be numeric value";
		}
        else
        {
            $user=['username'=>$username,
            'password'=>$password,
            'email'=>$email,
            'name'=>$name,
            'location'=>$location,
            'phone'=>$phone,
            'type'=>$type,
            'image_name'=>$image_name];

            $status=insertUser($user);
        }
    }else{
        echo "Db error";
    }
?>