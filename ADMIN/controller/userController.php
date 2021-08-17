<?php
	session_start();
	require_once('../model/usersModel.php');

    if(isset($_POST['edit'])){
        
        if($_POST['id']!=""
        &&$_POST['username']!=""
        &&$_POST['password']!=""
        &&$_POST['email']!=""
        &&$_POST['type']!=""
        &&$_POST['name']!=""
        &&$_POST['location']!=""
        &&$_POST['phone']!=""
        ){
		$id 	= $_POST['id'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
        $email 	= $_POST['email'];
        $type 	= $_POST['type'];
        $name 	= $_POST['name'];
        $location=$_POST['location'];
        $phone=$_POST['phone'];
        $current_image=$_POST['image_name'];
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
                            echo "error";
                            die();
                        }

                        if($current_image!="")
                        {
                            $remove_path = "..view/images/profile_pic/".$current_image;
                            $remove = unlink($remove_path);
                        }

                        if($remove==false)
                            {
                                echo "Failed to remove image";
                            }
                    }
                    else{
                        $image_name = $current_image;
                    }
		$user = [ 
            'id'=>$id,
            'username'=> $username, 
            'password'=> $password, 
            'name'=> $name,
            'email'=> $email,
            'type'=> $type,
            'location'=> $location,
            'phone'=> $phone,
            'image_name' => $image_name
		];
		$status = updateUser($user, $id);

		if($status){
			header('location: ../view/users.php');
			}else{
			echo "Db error";
			}
        }else{
            echo "null value";
        }
        
    }


    if(isset($_POST['editcategory'])){
        
        if($_POST['id']!=""
        &&$_POST['title']!=""
        &&$_POST['featured']!=""
        &&$_POST['active']!=""
        ){
		$id 	= $_POST['id'];
		$title 	= $_POST['title'];
		$featured 	= $_POST['featured'];
        $active 	= $_POST['active'];
        $current_image=$_POST['image_name'];
        $image_name = $_FILES['image']['name'];

                if($image_name != "")
                    {
                        $ext = end(explode('.', $image_name));
                        $image_name = "Catagory_pic_".rand(000, 999).'.'.$ext; 
                        $source_path = $_FILES['image']['tmp_name'];
                        $destination_path = "../view/images/catagory/".$image_name;
                        $upload = move_uploaded_file($source_path, $destination_path);
                        if($upload==false)
                        {
                            echo "error";
                            die();
                        }

                        if($current_image!="")
                        {
                            $remove_path = "..view/images/catagory/".$current_image;
                            $remove = unlink($remove_path);
                        }

                        if($remove==false)
                            {
                                echo "Failed to remove image";
                            }
                    }
                    else{
                        $image_name = $current_image;
                    }
		$user = [ 
            'id'=>$id,
            'title'=> $title, 
            'featured'=> $featured, 
            'active'=> $active,
            'image_name' => $image_name
		];
		$status = updateCategory($user, $id);

		if($status){
			header('location: ../view/viewcatagories.php');
			}else{
			echo "Db error";
			}
        }else{
            echo "null value";
        }
        
    }

    if(isset($_POST['editfood'])){
        
        if($_POST['id']!=""
        &&$_POST['title']!=""
        &&$_POST['description']!=""
        &&$_POST['price']!=""
        &&$_POST['category']!=""
        &&$_POST['featured']!=""
        &&$_POST['active']!=""
        ){
		$id 	= $_POST['id'];
		$title 	= $_POST['title'];
        $description 	= $_POST['description'];
        $price 	= $_POST['price'];
        $category 	= $_POST['category'];
		$featured 	= $_POST['featured'];
        $active 	= $_POST['active'];
        $current_image=$_POST['image_name'];
        $image_name = $_FILES['image']['name'];

                if($image_name != "")
                    {
                        $ext = end(explode('.', $image_name));
                        $image_name = "Food_pic_".rand(000, 999).'.'.$ext; 
                        $source_path = $_FILES['image']['tmp_name'];
                        $destination_path = "../view/images/food/".$image_name;
                        $upload = move_uploaded_file($source_path, $destination_path);
                        if($upload==false)
                        {
                            echo "error";
                            die();
                        }

                        if($current_image!="")
                        {
                            $remove_path = "..view/images/food/".$current_image;
                            $remove = unlink($remove_path);
                        }

                        if($remove==false)
                            {
                                echo "Failed to remove image";
                            }
                    }
                    else{
                        $image_name = $current_image;
                    }
		$user = [ 
            'id'=>$id,
            'title'=> $title, 
            'description'=> $description,
            'price'=> $price,
            'category'=> $category,
            'featured'=> $featured, 
            'active'=> $active,
            'image_name' => $image_name
		];
		$status = updateFood($user, $id);

		if($status){
			header('location: ../view/viewfoods.php');
			}else{
			echo "Db error";
			}
        }else{
            echo "null value";
        }
        
    }

    if(isset($_POST['editorder'])){
        
		$id 	= $_POST['id'];
		$stat=$_POST['status'];
        //echo $_POST['status'];
        
		$user = [ 
            'id'=>$id,
            'status'=> $stat
		];
		$status = updateOrder($user,$id);

		if($status){
			header('location: ../view/vieworder.php');
			}else{
			echo "Db error";
			}
    }





    if(isset($_REQUEST['delete'])){
		
        $id 	= $_POST['id'];
        /*$user_name 	= $_POST['user_name'];
        $Employer_name 	= $_POST['Employer_name'];
        $company_name 	= $_POST['company_name'];
        $Contact_no 	= $_POST['Contact_no'];
        $user_type 	= $_POST['user_type'];
        $password=$_POST['password'];*/

        /*$user = [
            'id'=>$id,
            'Name'	=>$Name, 
            'Buying_Price'=>$Buying_Price, 
            'Selling_Price'=>$Selling_Price,
        ];*/
        $status = deleteUser($id);

        if($status){
            header('location: ../view/users.php');
            }else{
            echo "Db error";
            }
    }
?>