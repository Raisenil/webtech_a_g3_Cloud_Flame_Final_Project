<?php
		$title = 'Delete Users';
		require_once('eheader.php');
		require_once('../model/eusersModel.php');
		$users=getAllfoods();
?>

<section class="catagories">
		<div class="container">
			<h2 class="text-center">Employee Foods</h2>

			<div class="clearfix"></div>
		</div>
</section>

<section class="catagories">
    <div class="container">
			<div class="menu">
            <ul>
					<li>
						<a class="btn btn-small btn-small-primary" href="eaddFoods.php">Add Food</a>
					</li>
					<li>
						<a class="btn btn-small btn-small-primary" href="emainfoods.php">Main Food</a>
					</li>
            </ul>
            </div>
		<div>
			<center>
				
				<table border="1">
					<tr>
						<th width="90px">id</th>
						<th width="90px">title</th>
						<th width="90px">price</th>
						<th width="90px">image</th>
						<th width="90px">featured</td>
						<th width="90px">active</th>
						<th width="90px">edit</th>
						<th width="90px">delete</th>
					</tr>
					<?php  for($i=0; $i<count($users); $i++){ ?>
						<tr>
							<td><?=$users[$i]['id']?></td>
							<td><?=$users[$i]['title']?></td>
							<td><?=$users[$i]['price']?></td>
							<td><img src="images/food/<?=$users[$i]['image_name']?>" width="50px"></td>
							<td><?=$users[$i]['featured']?></td>
							<td><?=$users[$i]['active']?></td>
							<td>
								<a class="btn btn-small btn-small-primary" href="eeditfood.php?
								id=<?=$users[$i]['id']?>
								&title=<?=$users[$i]['title']?>
								&description=<?=$users[$i]['description']?>
								&price=<?=$users[$i]['price']?>
								&catagory_id=<?=$users[$i]['catagory_id']?>
								&image_name=<?=$users[$i]['image_name']?>
								&featured=<?=$users[$i]['featured']?>
								&active=<?=$users[$i]['active']?>">Edit</a>
							</td>
							<td>
								<a class="btn btn-red btn-red-primary" href="../model/edeletefood.php?id=<?=$users[$i]['id']?>&image_name=<?=$users[$i]['image_name']?>">Delete</a>
							</td>
						</tr>
					<?php } ?>
				</table>
			</center>
		</div>
	</div>
</section>
