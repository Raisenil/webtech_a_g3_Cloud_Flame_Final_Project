<?php
	
	//sleep(3);

	$name = $_REQUEST['name'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'cloud_flame');
	$sql = "select * from tbl_book where username like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td width='90px'>id</td>
						<td width='90px'>username</td>
						<td width='90px'>phone</td>
						<td width='90px'>table_no</td>
						<td width='90px'>day</td>
						<td width='90px'>time</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['id']}</td>
							<td>{$row['username']}</td>
							<td>{$row['phone']}</td>
							<td>{$row['table_no']}</td>
							<td>{$row['day']}</td>
							<td>{$row['time']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>