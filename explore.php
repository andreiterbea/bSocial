<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <style>
	.demo {
		width:200px;
		border:1px solid #F1ECEF;
		border-collapse:collapse;
		padding:5px;
	}
	.demo th {
		border:1px solid #666;
		padding:5px;
		background:#3371b8;
		color: white;
	}
	.demo td {
		border:1px solid #666;
		text-align:left;
		padding:5px;
	}
</style>
        <!-- Bootstrap -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">

<title>Front Page</title>


<?php include 'include/headlinks.php';?> <!-- links to css and js -->
<link href="css/frontstyle.css" rel="stylesheet">
</head>

<body>
<wrapper>

<!-- Below is some PHP code that pulls the menu from another file (menu.php) and puts it on this page. This way it's easy to make changes and update every page at once -->
<?php include 'include/menu.php';?>

<div id="front_content" style="margin-top:-600px;">>

<div class="upcoming"> <h6> Explore </h6> </div>
<br>
<center>
<a href="create-group.php" style="margin-left:-40px;"><input type="submit" value="Create your own Group!"></a><br><br>
<div style="width:420px;">
<table class="demo" style="float:left;">
	<thead>
	<tr>
		<th>All Groups</th>
		<th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	</tr>
	</thead>
	<tbody>
	

		<?php
		foreach ($gm->getAll() as $group) {
			echo "<tr>";
			echo "<td>".$group['group_name'] . "</td>";
			echo "<td>";
			if($gm->isJoinedAlready($group['group_id'], $sm->get_user_id())){
				echo "";
			} else {
				echo "<a href='ajax/do-join.php?id=" . $group['group_id'] . " '>join</a>";
			}
			echo "</td></tr>";
		} ?>

	</tbody>
</table>
<table class="demo" >
	<thead>
	<tr>
		<th>Member of</th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ($gm->getAllJoined() as $group) {
		echo "<tr><td><a href='single-group.php?id=" . $group['group_id'] . "'>" . $group['group_name'] . "</a>";
		echo "</td></tr>"; 
	}?>
	</tbody>
</table>
<br>



</div>

<div>

</div>

</div>
</center>




</wrapper>

<?php include_once ("include/footer.php")?>
</body>
</html>