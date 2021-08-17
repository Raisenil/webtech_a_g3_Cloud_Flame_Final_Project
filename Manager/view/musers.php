<?php
		$title = 'Manager Home';
        require_once('mheader.php');
		require_once('../model/musersModel.php');
		$users=getAllUsers();
?>



    <section class="catagories">
		<div class="container">
			<h2 class="text-center">Manage Users</h2>

			<div class="clearfix"></div>
		</div>
	</section>


    <div class="menu container">
    <ul>
		<li>
			<a class="btn btn-small btn-small-primary" href="manager-registration.php">Add User</a>
		</li>
    </ul>
    
    <fieldset>
        <legend>All Users</legend>
        <table border="1">
    <tr>
                <th width="90px">id</th>
                <th width="90px">username</th>
                <th width="90px">password</th>
                <th width="90px">email</th>
                <th width="90px">type</th>
                <th width="90px">name</th>
                <th width="90px">location</th>
                <th width="90px">phone</th>
                <th width="90px">image_name</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
            </tr>

            <?php  for($i=0; $i<count($users); $i++){ ?>
						<tr>
							<td><?=$users[$i]['id']?></td>
							<td><?=$users[$i]['username']?></td>
                            <td><?=$users[$i]['password']?></td>
                            <td><?=$users[$i]['email']?></td>
                            <td><?=$users[$i]['type']?></td>
                            <td><?=$users[$i]['name']?></td>
                            <td><?=$users[$i]['location']?></td>
                            <td><?=$users[$i]['phone']?></td>
							<td><img src="images/profile_pic/<?=$users[$i]['image_name']?>" width="50px"></td>
							<td>
                            <a class='btn btn-small btn-small-primary' href='../view/medit-user.php?
                                id=<?=$users[$i]['id']?>
                                &username=<?=$users[$i]['username']?>
                                &password=<?=$users[$i]['password']?>
                                &email=<?=$users[$i]['email']?>
                                &type=<?=$users[$i]['type']?>
                                &name=<?=$users[$i]['name']?>
                                &location=<?=$users[$i]['location']?>
                                &phone=<?=$users[$i]['phone']?>
                                &image_name=<?=$users[$i]['image_name']?>
                                '>Edit</a>
							</td>

							
                            <td align='center'>
                                <a class='btn btn-red btn-red-primary' href='../view/mdelete-user.php?
                                id=<?=$users[$i]['id']?>
                                &username=<?=$users[$i]['username']?>
                                &password=<?=$users[$i]['password']?>
                                &email=<?=$users[$i]['email']?>
                                &type=<?=$users[$i]['type']?>
                                &name=<?=$users[$i]['name']?>
                                &location=<?=$users[$i]['location']?>
                                &phone=<?=$users[$i]['phone']?>
                                &image_name=<?=$users[$i]['image_name']?>
                                '>Delete</a>
                            </td>
						</tr>
					<?php } ?>
				</table></fieldset>
    </div>

</center>
</body>
</html>
</body>
</html>