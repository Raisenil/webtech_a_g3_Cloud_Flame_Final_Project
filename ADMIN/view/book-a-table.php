<?php
    require_once('header.php');
?>

<?php
    $user=getUserByID($_SESSION["username"]);
?>

<section>
        <div class="container">
            
            <h2 class="text-center">Fill this form to Book a table</h2>
<br>
<br>
            <form action="" method="POST" class="book">
<center>
<table>
    <tr>
        <td>User Name </td>
        <td>:<?php echo $user["username"];?></td>
        <td><input type="hidden" name="username"  value="<?php echo $user["username"]?>" required></td>
    <tr>

    <tr>
        <td>Phone Number </td>
        <td>:<?php echo $user["phone"];?></td>
        <td><input type="hidden" name="phone"  value="<?php echo $user["phone"]?>" required></td>
    <tr>
    <tr>
        <td>Table no </td>
        <td>:<select name="table_no" id="table_no">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    </select></td>
    <tr>

    <tr>
        <td>Day </td>
        <td>:<select name="day" id="day">
                    <option value="12PM">SUN</option>
                    <option value="WED">WED</option>
                    <option value="THU">THU</option>
                    <option value="FRI">FRI</option>
                    <option value="SAT">SAT</option>
                    <option value="SUN">SUN</option>
                    </select></td>
    <tr>
    <tr>
        <td>Time </td>
        <td>:<select name="time" id="time">
                    <option value="1PM">1PM</option>
                    <option value="2PM">2PM</option>
                    <option value="3PM">3PM</option>
                    <option value="4PM">4PM</option>
                    <option value="5PM">5PM</option>
                    <option value="6PM">6PM</option>
                    <option value="7PM">7pm</option>
                    <option value="8PM">8PM</option>
                    <option value="9PM">9PM</option>
                    </select></td>
    <tr>
    <tr>
        <td colspan="2"><input type="submit" name="submit" value="Book" class="btn btn-small btn-small-primary"></td>
    </tr>
</table>
</center>
</form>

            <?php 

                if(isset($_POST['submit']))
                {

                    $username = $_POST['username'];
                    $phone = $_POST['phone'];
                    $table_no = $_POST['table_no'];
                    $day = $_POST['day'];
                    $time = $_POST['time'];

                    $conn = getConnection();
                    $sql2 = "INSERT INTO `tbl_book`(`id`, `username`, `phone`, `table_no`, `day`, `time`) VALUES 
                    ('','$username','$phone','$table_no','$day','$time')
                    ";

                    $res2 = mysqli_query($conn, $sql2);


                    if($res2==true)
                    {
                        header('location: ../view/viewbook-a-table.php');
                    }
                    else
                    {
                        echo "Book Failed.";
                    }
                }
            ?>
        </div>
    </section>