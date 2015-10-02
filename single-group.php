<?php require_once('app.php');
	  $um->loggedInElseRedirect();
	  $group_id = $_GET['id'];
	  $group = $gm->getById($group_id);
	?>

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

<div class="upcoming"> <h6 style="font-size:25pt; text-shadow:none"> <?php echo $group['group_name']; ?> </h6> </div>
<br>
<center>

<div style="width:420px; text-align:left;">
<?php
	echo "Users in this group:<br>";

	foreach ($gm->getUsersInGroup($group_id) as $user) {
		echo $um->getById($user['id'])['name'] . ", ";
	}
	echo "<hr style='border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));'>";
	?>
	<form id="dummy-comment-form" style="margin-left:-40px;">
	  <input type="hidden" name="group_id" value="<?php echo $group_id;?>" disabled>
	  <input name="comment_body" placeholder="Add your comment"><br>
	  <input type="submit" value="Submit Comment" style="margin-top:10px">
	</form>
	<br><?php
	foreach ($cm->getByGroupId($group_id) as $comment) {
		echo $comment['name'] . " : " . $comment['comment_body'];
		echo "<hr style='margin: 5px;border: 0;height: 1px;background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));'>
	"; 
	}
?>
</div>

<div>

</div>

</div>
</center>




</wrapper>

<?php include_once ("include/footer.php");?>


<script src="js/jquery-2.1.1.js"></script>

<script type="text/javascript">
	$('#dummy-comment-form').submit(function(event) {
	        
	        event.preventDefault();

	        var formData = {
	            'group_id'      : $('input[name=group_id]').val(),
	            'comment_body'  : $('input[name=comment_body]').val()
	        };
	        $.ajax({
	            type        : 'POST',
	            url         : 'ajax/do-create-comment.php',
	            data        : formData
	        }).done(function(data) {
					if(data){
						//console.log(data);
						location.reload(true);
					}
				});
	    });
</script>
</body>
</html>