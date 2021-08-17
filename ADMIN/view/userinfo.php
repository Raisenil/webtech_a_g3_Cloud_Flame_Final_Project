<?php
		$title = 'Delete Users';
		require_once('header.php');
		require_once('../model/usersModel.php');
		$user=getUserByID($_SESSION["username"]);    
?>


<section class="catagories">
		<div class="container">
			<h2 class="text-center">User Info</h2>

			<div class="clearfix"></div>
		</div>
</section>

<section class="userinfo">
    <div class="container">
		<center>
			<table >
				<tr>
					<td>Profile pic</td>
					<td><img src="images/profile_pic/<?=$user['image_name']?>" width="150px"></td>
				</tr>
				<tr>
					<td>id</td>
					<td>: <?=$user['id']?></td>
					
				</tr>
				<tr>
					<td>username</td>
					<td>: <?=$user['username']?></td>
				</tr>
				
				<tr>
					<td>password</td>
					<td>: <?=$user['password']?></td>
				</tr>
				<tr>
					<td>email</td>
					<td>: <?=$user['email']?></td>
				</tr>
				<tr>
					<td>user type</td>
					<td>: <?=$user['type']?></td>
				</tr>
				<tr>
					<td>full name</td>
					<td>: <?=$user['name']?></td>
				</tr>
				<tr>
					<td>location</td>
					<td>: <?=$user['location']?></td>
				</tr>
				<tr>
					<td>phone</td>
					<td>: <?=$user['phone']?></td>
				</tr>
			</table>
		</center>
    <div class="clearfix"></div>
    </div>
</section>