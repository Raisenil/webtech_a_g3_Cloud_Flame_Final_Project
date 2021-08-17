<?php
		$title = 'Delete Users';
		require_once('header.php');
        
?>



    <section>
        <div class ="container ">
    <form method="post" action="../controller/userController.php" enctype="multipart/form-data">
		<fieldset>
			<legend>Delete User</legend>
			<table>
				<tr>
					<td>id</td>
					<td><?=$_GET['id']?></td>
                    <td><input type="hidden" name="id" value="<?=$_GET['id']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>username</td>
                    <td><?=$_GET['username']?></td>
					<td><input type="hidden" name="username" value="<?=$_GET['username']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>password</td>
                    <td><?=$_GET['password']?></td>
					<td><input type="hidden" name="password" value="<?=$_GET['password']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>email</td>
                    <td><?=$_GET['email']?></td>
					<td><input type="hidden" name="email" value="<?=$_GET['email']?>"></td>
					<td></td>
				</tr>
                <tr>
					<td>type</td>
                    <td><?=$_GET['type']?></td>
					<td><input type="hidden" name="type" value="<?=$_GET['type']?>"></td>
				</tr>
                <tr>
					<td>name</td>
                    <td><?=$_GET['name']?></td>
					<td><input type="hidden" name="name" value="<?=$_GET['name']?>"></td>
					<td></td>
				</tr>
                <tr>
					<td>location</td>
                    <td><?=$_GET['location']?></td>
					<td><input type="hidden" name="location" value="<?=$_GET['location']?>"></td>
				</tr>
                <tr>
					<td>phone</td>
                    <td><?=$_GET['phone']?></td>
					<td><input type="hidden" name="phone" value="<?=$_GET['phone']?>"></td>
				</tr>
                <tr>
					<td>image</td>
					<td>
                    
                    <?php 
                            if($_GET['image_name'] != "")
                            {
                                ?>
                                <img src="images/profile_pic/<?=$_GET['image_name']?>" width="150px">
                                <input type="hidden" name="image_name" value="<?=$_GET['image_name']?>">
                                <?php
                            }
                        ?>
                
                    </td>
				</tr>

				<tr>
					<td></td>
					<td><input class="btn btn-red btn-red-primary" type="submit" name="delete" value="Delete"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
    </section>
</body>
</html>