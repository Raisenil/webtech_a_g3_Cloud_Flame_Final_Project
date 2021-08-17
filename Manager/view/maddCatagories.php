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

            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Category Title">
                    </td>
                </tr>

                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
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
                        <input type="submit" name="submit" value="Add Category" class="btn btn-small btn-small-primary">
                    </td>
                </tr>

            </table>

        </form>
        

        <?php 
        
            
            if(isset($_POST['submit']))
            {
                

                
                $title = $_POST['title'];

                
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
                    $image_name = "Catagory_pic_".rand(000, 999).'.'.$ext; 
                    $source_path = $_FILES['image']['tmp_name'];
                    $destination_path = "../view/images/catagory/".$image_name;
                    $upload = move_uploaded_file($source_path, $destination_path);
                    if($upload==false)
                    {
                        echo "error uploading pic";
                        die();
                    }

                }else{
                        $image_name="";
                }
                



                $conn = getConnection();

                $sql = "INSERT INTO tbl_category SET 
                    title='$title',
                    image_name='$image_name',
                    featured='$featured',
                    active='$active'
                ";

                $res = mysqli_query($conn, $sql);

                if($res==true)
                {
                    header('location:mviewcatagories.php');
                }
                else
                {
                    header('location:maddcategory.php');
                }
            }
        
        ?>

</center></section></div>