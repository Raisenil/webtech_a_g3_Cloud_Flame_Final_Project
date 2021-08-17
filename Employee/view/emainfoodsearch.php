<?php
		$title = 'Delete Users';
		require_once('eheader.php');
		require_once('../model/eusersModel.php');   
?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php $search=$_POST['search']; ?>
            <h2>Foods on Your Search <a href="#" class="text-white"><?php echo $search; ?></a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php
                
                require_once('../model/eusersModel.php');
				$conn = getConnection();
                $sql="SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);

                if($count>0){
                    while($row=mysqli_fetch_assoc($res)){
                        $id=$row['id'];
                        $title=$row['title'];
                        $price=$row['price'];
                        $description=$row['description'];
                        $image_name=$row['image_name'];
                        ?>
                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php
                                    if($image_name==""){
                                        echo "Image not available";
                                    }else{
                                        ?>
                                            <img src="images/food/<?php echo $image_name; ?>" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                
                            </div>

                            <div class="food-menu-desc">
                                <h4><?php echo $title; ?></h4>
                                <p class="food-price"><?php echo $price; ?></p>
                                <p class="food-detail">
                                    <?php echo $description; ?>
                                </p>
                                <br>

                                <a href="eorder.php?food_id=<?php echo $id;?>" class="btn-small btn-small-primary">Order now</a>
                            </div>
                        </div>

                        <?php
                    }
                }else{
                    echo "Food not found";
                }
            ?>
            <div class="clearfix"></div>
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!--social media start-->
	<section class="social">
		<div class="container text-center">
			<ul>
				<li>
					<a href="https://www.facebook.com/cloudflamebd"><img src="https://img.icons8.com/ios-filled/50/4a90e2/facebook-new.png"/></a>
				</li>
				<li>
					<a href="https://www.instagram.com/explore/locations/1798844937050755/cloud-flame/"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a>
				</li>
				<li>
					<a href="https://www.foodpanda.com.bd/restaurant/s5no/cloud-flame?r=1"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="-10px"
						width="35" height="40"
						viewBox="0 0 172 172"
						style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ff007f"><path d="M26.23,0c-6.11406,0 -12.42969,3.06375 -17.7375,8.6c-10.18563,10.62906 -11.22031,22.80344 -2.6875,31.7125c2.39188,2.39188 5.46906,4.35375 9.1375,5.9125c-9.41969,14.00188 -14.9425,30.4225 -14.9425,46.9775c0,28.51438 17.13281,47.59563 41.8175,56.545c6.07375,2.12313 11.66375,6.65156 17.0925,11.395c0.02688,0.01344 0.08063,-0.01344 0.1075,0c7.04125,6.27531 16.38031,10.8575 26.66,10.8575c10.17219,0 19.55156,-4.16562 26.66,-10.8575c0.04031,-0.04031 0.06719,-0.06719 0.1075,-0.1075c5.41531,-4.73 10.92469,-9.16437 16.985,-11.2875c25.37,-8.93594 42.57,-28.03062 42.57,-56.545c0,-16.555 -5.52281,-32.97562 -14.9425,-46.9775c3.66844,-1.55875 6.67844,-3.56094 9.03,-5.9125c3.92375,-3.74906 6.07375,-8.35812 6.1275,-13.4375c0.06719,-6.27531 -2.99656,-12.77906 -8.4925,-18.275c-5.34812,-5.34812 -11.7175,-8.2775 -17.9525,-8.2775c-5.14656,0 -9.80937,1.96188 -13.6525,5.805c-2.88906,2.88906 -5.29437,6.7725 -6.7725,10.965c-11.75781,-6.45 -25.12812,-10.2125 -39.345,-10.2125c-14.21687,0 -27.58719,3.7625 -39.345,10.2125c-1.47812,-4.1925 -3.81625,-8.00875 -6.665,-10.8575c-3.87,-4.04469 -8.64031,-6.235 -13.76,-6.235zM86,13.76c43.68531,0 79.12,39.84219 79.12,79.4425c0,25.84031 -14.47219,41.83094 -37.9475,50.095c-7.65937,2.67406 -13.80031,7.82063 -19.35,12.685c-0.04031,0.04031 -0.06719,0.06719 -0.1075,0.1075c-5.95281,5.64375 -13.67937,9.03 -22.0375,9.03c-8.26406,0 -16.125,-3.74906 -22.145,-9.1375c-5.54969,-4.86437 -11.69062,-10.01094 -19.35,-12.685c-22.79,-8.25062 -37.3025,-24.25469 -37.3025,-50.095c0,-39.60031 35.43469,-79.4425 79.12,-79.4425zM62.995,68.6925c-7.82062,0 -15.10375,2.74125 -19.995,7.6325c-10.14531,10.14531 -11.44875,25.77313 -2.795,34.83c3.81625,3.81625 9.16438,5.9125 14.9425,5.9125c7.14875,0 14.37813,-3.19812 19.8875,-8.7075c10.40063,-10.40062 8.85531,-28.23219 2.795,-34.7225c-2.94281,-3.14437 -8.46562,-4.945 -14.835,-4.945zM109.3275,68.8c-6.235,0 -11.87875,1.77375 -15.05,4.73c-3.03687,2.83531 -4.8375,8.15656 -4.945,14.2975c-0.13437,8.03563 2.60688,15.50688 7.6325,20.5325c5.50938,5.50938 12.73875,8.7075 19.8875,8.7075c5.77813,0 11.0725,-2.13656 14.9425,-6.02c8.6,-9.00312 7.35031,-24.57719 -2.795,-34.7225c-4.79719,-4.79719 -11.95937,-7.525 -19.6725,-7.525zM65.36,79.12c3.80281,0 6.88,3.07719 6.88,6.88c0,3.80281 -3.07719,6.88 -6.88,6.88c-3.80281,0 -6.88,-3.07719 -6.88,-6.88c0,-3.80281 3.07719,-6.88 6.88,-6.88zM106.64,79.12c3.80281,0 6.88,3.07719 6.88,6.88c0,3.80281 -3.07719,6.88 -6.88,6.88c-3.80281,0 -6.88,-3.07719 -6.88,-6.88c0,-3.80281 3.07719,-6.88 6.88,-6.88zM75.465,123.7325c-6.14094,0 -6.665,4.28656 -6.665,5.59c0,5.83188 7.87438,15.1575 17.2,15.1575c9.32563,0 17.2,-9.32562 17.2,-15.1575c0,-1.62594 -0.61812,-5.375 -6.7725,-5.375c-1.19594,0 -2.6875,0.06719 -4.3,0.215c-3.74906,0.33594 -8.61344,0.29563 -12.3625,-0.1075c-1.63937,-0.17469 -3.01,-0.3225 -4.3,-0.3225z"></path></g></g></svg></a>
				</li>
			</ul>
		</div>
	</section>
	<!--social media end-->

</body>
</html>