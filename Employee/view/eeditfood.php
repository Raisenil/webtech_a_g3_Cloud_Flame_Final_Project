<?php
		$title = 'Edit Users';
		require_once('eheader.php');

?>



    <section>
        <div class ="container ">
    <form method="post" action="../controller/euserController.php" enctype="multipart/form-data">
		<fieldset>
			<legend>EDIT FOOD</legend><center>
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
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="30" rows="5" ><?php echo $_GET['description'];?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price: </td>
                    <td>
                        <input type="text" name="price" value="<?=$_GET['price']?>">
                    </td>
                </tr>
                <tr>
                    <td>Category: </td>
                    <td>
                        <select name="category">

                            <?php 
                                $sql1 = "SELECT * FROM tbl_category WHERE active='Yes'";
                                

                                $res = mysqli_query($conn, $sql1);

                                $count = mysqli_num_rows($res);

                                if($count>0)
                                {

                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        $id = $row['id'];
                                        $title = $row['title'];

                                        ?>

                                        <option <?php if($_REQUEST['catagory_id']==$id){echo "selected";} ?> value="<?php echo $id; ?>"><?php echo $title; ?></option>

                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <option value="0">No Category Found</option>
                                    <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
					<td>current image :</td>
					<td>
                    
                    <?php 
                            if($_REQUEST['image_name'] != "")
                            {
                                ?>
                                <img src="images/food/<?=$_GET['image_name']?>" width="150px">
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
					<td><input class="btn btn-small btn-small-primary" type="submit" name="editfood" value="Edit"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
    </section>
</body>
</html>