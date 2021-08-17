<?php
		$title = 'Edit Users';
		require_once('mheader.php');
        
?>



    <section>
        <div class ="container ">
    <form method="post" action="../controller/muserController.php" enctype="multipart/form-data">
		<fieldset>
			<legend>EDIT User</legend>
			<table>
				<tr>
					<td>id</td>
					<td><?=$_GET['id']?></td>
                    <td><input type="hidden" name="id" value="<?=$_GET['id']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" value="<?=$_GET['username']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="text" name="password" value="<?=$_GET['password']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="email" name="email" value="<?=$_GET['email']?>"></td>
					<td></td>
				</tr>
                <tr>
					<td>type</td>
					<td><input type="text" name="type" value="<?=$_GET['type']?>"></td>
					<td><small><i>Manager="manager"<br>
                        
                        Employee="Employee"<br>
                        Customer="customer"<br></i></small>
                    </td>
				</tr>
                <tr>
					<td>name</td>
					<td><input type="text" name="name" value="<?=$_GET['name']?>"></td>
					<td></td>
				</tr>
                <tr>
					<td>location</td>
					<td><input type="text" name="location" value="<?=$_GET['location']?>"></td>
				</tr>
                <tr>
					<td>phone</td>
					<td><input type="text" name="phone" value="<?=$_GET['phone']?>"></td>
				</tr>
                <tr>
					<td>current image</td>
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
                    <td>new image</td>
                    <td>
                        <input id="image" type="file" name="image" value="">
                    </td>
                </tr>

				<tr>
					<td></td>
					<td><input class="btn btn-small btn-small-primary" type="submit" name="edit" value="Edit"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
    </section>
</body>
</html>