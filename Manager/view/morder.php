<?php
		require_once('mheader.php');
?>


<?php
    $food=getFoodByID($_GET['food_id']);
    $user=getUserByID($_SESSION["username"]);
?>
<!-- fOOD sEARCH Section Starts Here -->
<section>
        <div class="container">
            
            <h2 class="text-center">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                            <img class="img-responsive img-curve" src="images/food/<?php echo $food['image_name']; ?>"> 
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $food['title']; ?></h3>
                        <input type="hidden" name="food" value="<?php echo $food['title']; ?>">

                        <p class="food-price">TK <?php echo $food['price']; ?></p>
                        <input type="hidden" name="price" value="<?php echo $food['price']; ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                <br>
                <br>
                <fieldset>
                    <legend>Delivery Details</legend>

                    <div class="order-label">User Name : <?php echo $user["username"]?></div>
                    <input type="hidden" name="user-name"  value="<?php echo $user["username"]?>" required>

                    <div class="order-label">Phone Number : <?php echo $user["phone"]?></div>
                    <input type="hidden" name="contact" value="<?php echo $user["phone"]?>" required>

                    <div class="order-label">Email : <?php echo $user["email"]?></div>
                    <input type="hidden" name="email" value="<?php echo $user["email"]?>" required>

                    <div class="order-label">Address :</div>
                    <textarea name="address" rows="10"  required><?php echo $user["location"]?></textarea>
                    <div>
                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-small btn-small-primary">
                    </div>
                </fieldset>

            </form>

            <?php 

                if(isset($_POST['submit']))
                {

                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty; 

                    $order_date = date("Y-m-d h:i:sa"); 

                    $status = "Ordered";

                    $customer_name = $_POST['user-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];


                    $sql2 = "INSERT INTO tbl_order SET 
                        food = '$food',
                        price = $price,
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address'
                    ";

                    $res2 = mysqli_query($conn, $sql2);


                    if($res2==true)
                    {
                        echo "Food Ordered Successfully.";
                    }
                    else
                    {
                        echo "Food Ordered Failed.";
                    }
                }
            ?>
        </div>
    </section>