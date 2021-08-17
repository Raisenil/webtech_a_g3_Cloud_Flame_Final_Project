<?php
		$title = 'Edit Users';
		require_once('header.php');
        
?>



    <section>
        <div class ="container ">
    <form method="post" action="../controller/userController.php" enctype="multipart/form-data">
		<fieldset>
			<legend>EDIT Catagory</legend><center>
			<table>
				<tr>
					<td>id </td>
					<td>:<?=$_GET['id']?></td>
                    <td><input type="hidden" name="id" value="<?=$_GET['id']?>"></td>
					<td></td>
				</tr>
				<tr>
					<td>Title </td>
					<td>:<input type="text" name="title" value="<?=$_GET['title']?>"></td>
					<td></td>
				</tr>
                <tr>
					<td>current image :</td>
					<td>
                    
                    <?php 
                            if($_REQUEST['image_name'] != "")
                            {
                                ?>
                                <img src="images/catagory/<?=$_GET['image_name']?>" width="150px">
                                <input type="hidden" name="image_name" value="<?=$_GET['image_name']?>">
                                <?php
                            }
                        ?>
                
                    </td>
				</tr>

                <tr>
                    <td>new image</td>
                    <td>
                        :<input id="image" type="file" name="image" value="">
                    </td>
                </tr>

                <tr>
                    <td>Featured  </td>
                    <td>
                        :<input <?php if($_GET['featured']=="Yes"){echo "checked";} ?> type="radio" name="featured" value="Yes"> Yes 
                        <input <?php if($_GET['featured']=="No"){echo "checked";} ?> type="radio" name="featured" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td>Active  </td>
                    <td>
                        :<input <?php if($_GET['active']=="Yes"){echo "checked";} ?> type="radio" name="active" value="Yes"> Yes 
                        <input <?php if($_GET['active']=="No"){echo "checked";} ?> type="radio" name="active" value="No"> No 
                    </td>
                </tr>

				<tr>
					<td></td>
					<td><input class="btn btn-small btn-small-primary" type="submit" name="editcategory" value="Edit"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
    </section>
</body>
</html>