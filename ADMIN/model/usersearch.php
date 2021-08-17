<?php
	
	//sleep(3);

	$name = $_REQUEST['name'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'cloud_flame');
	$sql = "select * from users where username like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td width='90px'>ID</td>
						<td width='90px'>Username</td>
						<td width='90px'>Password</td>
						<td width='90px'>Email</td>
						<td width='90px'>Type</td>
						<td width='90px'>Name</td>
						<td width='90px'>Location</td>
						<td width='90px'>Phone</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['id']}</td>
							<td>{$row['username']}</td>
							<td>{$row['password']}</td>
							<td>{$row['email']}</td>
							<td>{$row['type']}</td>
							<td>{$row['name']}</td>
							<td>{$row['location']}</td>
							<td>{$row['phone']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>