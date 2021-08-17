<?php
		require_once('header.php');
		$users=getAllBook();
?>

<section class="catagories">
		<div class="container">
			<h2 class="text-center">Manage Table Book</h2>

			<div class="clearfix"></div>
		</div>
</section>

<section>
<div class="menu container">
    <ul>
		<li>
			<a class="btn btn-small btn-small-primary" href="book-a-table.php">Add Reservation</a>
		</li>
    </ul>
</dive>
</section>

<section>
	<div class="container">
        <fieldset>
    <legend>Search Reservation</legend>
	<input type="text" name="" id="name" onkeyup="booksearch()">
    <br>
    <div id="result"></div>
    </fieldset>
    <br>
    <center>
    <fieldset><legend>All Reservation</legend>
	<br><table border="1">
    <tr>
                <th width="90px">id</th>
                <th width="90px">username</th>
                <th width="90px">phone</th>
                <th width="90px">table_no</th>
                <th width="90px">day</th>
                <th width="90px">time</th>
                <th width="90px">Delete</th>
            </tr>

            <?php  for($i=0; $i<count($users); $i++){ ?>
						<tr>
							<td><?=$users[$i]['id']?></td>
							<td><?=$users[$i]['username']?></td>
                            <td><?=$users[$i]['phone']?></td>
                            <td><?=$users[$i]['table_no']?></td>
                            <td><?=$users[$i]['day']?></td>
                            <td><?=$users[$i]['time']?></td>
                            <td align='center'>
                                <a class='btn btn-red btn-red-primary' href="../model/deletebook.php?id=<?=$users[$i]['id']?>">Delete</a>
                            </td>
						</tr>
					<?php } ?>
				</table></fieldset>
	</div>
</section>