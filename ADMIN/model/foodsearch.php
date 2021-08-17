<?php
	
	//sleep(3);

	$name = $_REQUEST['name'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'cloud_flame');
	$sql = "select * from tbl_food where title like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td width='90px'>id</td>
						<td width='90px'>title</td>
						<td width='90px'>price</td>
						<td width='90px'>featured</td>
						<td width='90px'>active</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['id']}</td>
							<td>{$row['title']}</td>
							<td>{$row['price']}</td>
							<td>{$row['featured']}</td>
							<td>{$row['active']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>