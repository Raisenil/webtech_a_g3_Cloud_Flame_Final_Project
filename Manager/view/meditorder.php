<?php
		$title = 'Edit Users';
		require_once('mheader.php');
?>

<section>
        <div class ="container ">
    <form method="post" action="../controller/muserController.php">
			<center>
                <h3>Edit order</h3><br>
			<table >
				<tr>
					<td width="90px">id </td>
					<td width="90px">:<?=$_GET['id']?></td>
                    <td><input type="hidden" name="id" value="<?=$_GET['id']?>"></td>
					<td></td>
				</tr>
                
                <tr>
					<td width="90px" height="30px">User Name </td>
					<td>:<?php echo $_GET['customer_name'];?></td>
					<td></td>
				</tr>
				<tr>
					<td width="90px" height="30px">Food Name </td>
					<td>:<?php echo $_GET['food'];?></td>
					<td></td>
				</tr>
                <tr>
                    <td width="90px" height="30px">Status </td>
                    <td>
                        <select name="status">
                            <option value="Ordered">Ordered</option>
                            <option value="On Delivery">On Delivery</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>

				<tr>
					<td></td>
					<td><br><input class="btn btn-small btn-small-primary" type="submit" name="editorder" value="Edit"></td>
					<td></td>
				</tr>
			</table>
	</form>
</div>
    </section>
</body>
</html>