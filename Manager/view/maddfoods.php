<?php
		require_once('mheader.php');
        require_once('../model/db.php');
?>

<section class="catagories">
		<div class="container">
			<h2 class="text-center">Add Catagories</h2>

			<div class="clearfix"></div>
		</div>
</section>

<div class="container">
<section><center>
<form action="" method="POST" enctype="multipart/form-data">

            <table>
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Title of the Food">
                    </td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="30" rows="5" placeholder="Description of the Food."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price: </td>
                    <td>
                        <input type="number" name="price">
                    </td>
                </tr>
                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
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

                                        <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

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
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes 
                        <input type="radio" name="featured" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes 
                        <input type="radio" name="active" value="No"> No 
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Food" class="btn btn-small btn-small-primary">
                    </td>
                </tr>

            </table>

        </form>
        

        <?php 
        
            
            if(isset($_POST['submit']))
            {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $category = $_POST['category'];

                if(isset($_POST['featured']))
                {
                    $featured = $_POST['featured'];
                }
                else
                {
                    $featured = "No";
                }

                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No";
                }

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
                        echo "error uploading pic";
                        die();
                    }

                }else{
                        $image_name="";
                }
                




                $sql2 = "INSERT INTO tbl_food SET 
                    title = '$title',
                    description = '$description',
                    price = $price,
                    image_name = '$image_name',
                    catagory_id = $category,
                    featured = '$featured',
                    active = '$active'
                ";


                $res2 = mysqli_query($conn, $sql2);

                if($res2 == true)
                {
                    echo "Food Added";
                }
                else
                {
                    echo "error";
                }

                
            }

        ?>

</center></section></div>