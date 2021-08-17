<?php
		$title = 'Delete Users';
		require_once('header.php');
		require_once('../model/usersModel.php');
		$users=getAllOrders();
?>

<section class="catagories">
		<div class="container">
			<h2 class="text-center">Manage Orders</h2>

			<div class="clearfix"></div>
		</div>
</section>

<section class="catagories">
		<div class ="container">
		<fieldset>
    <legend>Search Order</legend>
	<input type="text" name="" id="name" onkeyup="ordersearch()">
    <br>
    <div id="result"></div>
    </fieldset>
    <br>
	<fieldset>
	<legend>All Orders</legend>
			<center>
				<br>
				<table border="1">
					<tr>
						<th width="90px">id</th>
						<th width="90px">food</th>
						<th width="90px">price</th>
						<th width="90px">qty</th>
						<th width="90px">total</td>
						<th width="90px">order_date</th>
						<th width="90px">status</th>
						<th width="90px">customer_name</th>
						<th width="90px">customer_contact</th>
						<th width="90px">customer_email</th>
						<th width="90px">customer_address</th>
						<th width="90px">edit</th>
						<th width="90px">delete</th>
					</tr>
					<?php  for($i=0; $i<count($users); $i++){ ?>
						<tr>
							<td><?=$users[$i]['id']?></td>
							<td><?=$users[$i]['food']?></td>
							<td><?=$users[$i]['price']?></td>
							<td><?=$users[$i]['qty']?></td>
							<td><?=$users[$i]['total']?></td>
							<td><?=$users[$i]['order_date']?></td>
							<td><?=$users[$i]['status']?></td>
							<td><?=$users[$i]['customer_name']?></td>
							<td><?=$users[$i]['customer_contact']?></td>
							<td><?=$users[$i]['customer_email']?></td>
							<td><?=$users[$i]['customer_address']?></td>
							
							<td><center>
								<a class="btn btn-small btn-small-primary" href="editorder.php?
								id=<?=$users[$i]['id']?>
								&food=<?=$users[$i]['food']?>
								&price=<?=$users[$i]['price']?>
								&qty=<?=$users[$i]['qty']?>
								&total=<?=$users[$i]['total']?>
								&order_date=<?=$users[$i]['order_date']?>
								&status=<?=$users[$i]['status']?>
								&customer_name=<?=$users[$i]['customer_name']?>
								&customer_contact=<?=$users[$i]['customer_contact']?>
								&customer_email=<?=$users[$i]['customer_email']?>
								&customer_address=<?=$users[$i]['customer_address']?>
								">Edit</a></center>
							</td>
							<td>
								<center><a class="btn btn-red btn-red-primary" href="../model/deleteorder.php?id=<?=$users[$i]['id']?>">Delete</a>
					</center>
							</td>
						</tr>
					<?php } ?>
				</table>
			</center></fieldset>
		</div>
		</div>
</section>