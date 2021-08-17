<?php
	
	//sleep(3);

	$name = $_REQUEST['name'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'cloud_flame');
	$sql = "select * from tbl_order where customer_name like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td width='90px'>id</td>
						<td width='90px'>food</td>
						<td width='90px'>price</td>
						<td width='90px'>qty</td>
						<td width='90px'>total</td>
						<td width='90px'>order_date</td>
						<td width='90px'>status</td>
						<td width='90px'>customer_name</td>
						<td width='90px'>customer_contact</td>
						<td width='90px'>customer_email</td>
						<td width='90px'>customer_address</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['id']}</td>
							<td>{$row['food']}</td>
							<td>{$row['price']}</td>
							<td>{$row['qty']}</td>
							<td>{$row['total']}</td>
							<td>{$row['order_date']}</td>
							<td>{$row['status']}</td>
							<td>{$row['customer_name']}</td>
							<td>{$row['customer_contact']}</td>
							<td>{$row['customer_email']}</td>
							<td>{$row['customer_address']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>