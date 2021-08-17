<?php
	require_once('db.php');
	
	
	function validate_admin($username, $password){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}' and type='admin'";
        $result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function validate_customer($username, $password){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}' and type='customer'";
        $result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function validate_manager($username, $password){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}' and type='manager'";
        $result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function validate_employee($username, $password){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}' and type='employee'";
        $result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function insertUser($user){
		$conn = getConnection();
		
		$sql="insert into users values ('{ }',
		'{$user['username']}',
		'{$user['password']}',
		'{$user['email']}',
		'{$user['type']}',
		'{$user['name']}',
		'{$user['location']}',
		'{$user['phone']}',
		'{$user['image_name']}')";
		
		if(mysqli_query($conn, $sql)){
			header('location: ../view/elogin.php');
		}else{
			echo "DB error";
		}
	}

	function updateUser($user, $id){
		$conn = getConnection();
		echo $user['id'];
		$sql="UPDATE `users` SET 
		`username`='{$user['username']}',
		`password`='{$user['password']}',
		`email`='{$user['email']}',
		`type`='{$user['type']}',
		`name`='{$user['name']}',
		`location`='{$user['location']}',
		`phone`='{$user['phone']}',
		`image_name`='{$user['image_name']}'
		WHERE `id`='{$user['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateCategory($user, $id){
		$conn = getConnection();
		echo $user['id'];
		$sql="UPDATE `tbl_category` SET 
		`title`='{$user['title']}',
		`image_name`='{$user['image_name']}',
		`featured`='{$user['featured']}',
		`active`='{$user['active']}'
		WHERE `id`='{$user['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateFood($user, $id){
		$conn = getConnection();
		echo $user['id'];
		$sql="UPDATE `tbl_food` SET 
		`title`='{$user['title']}',
		`description`='{$user['description']}',
		`price`='{$user['price']}',
		`catagory_id`='{$user['category']}',
		`image_name`='{$user['image_name']}',
		`featured`='{$user['featured']}',
		`active`='{$user['active']}'
		WHERE `id`='{$user['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateOrder($user,$id){
		$conn = getConnection();
		$sql="UPDATE `tbl_order` SET 
		`status`='{$user['status']}'
		WHERE `id`='{$user['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($username){

		$conn = getConnection();
		$sql = "select * from users where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getFoodByID($id){

		$conn = getConnection();
		$sql = "select * from tbl_food where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllUsers(){
		$conn = getConnection();
		$sql = "select * from users where type='employee' or type='customer' ";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}

	function getAllBook(){
		$conn = getConnection();
		$sql = "select * from tbl_book";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}

	function getAllOrders(){
		$conn = getConnection();
		$sql = "select * from tbl_order";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}

	function getAllCatagories(){
		$conn = getConnection();
		$sql = "select * from tbl_category";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}

	function getAllFoods(){
		$conn = getConnection();
		$sql = "select * from tbl_food";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}

?>