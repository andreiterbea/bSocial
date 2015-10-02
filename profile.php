<?php require_once('app.php');
	  $um->loggedInElseRedirect();
	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<?php include 'include/headlinks.php';?> <!-- links to css and js -->
<link rel="stylesheet" href="css/profilestyle.css"> 
<title>Profile page</title>

</head>

<body>
<wrapper>


<!-- Below is some PHP code that pulls the menu from another file (menu.php) and puts it on this page. This way it's easy to make changes and update every page at once -->
<?php include 'include/menu.php';?>

<div id="profile_content" style="padding-top:100px;">

<h1 style="font-family: 'autoradiographicrg'; margin-left: 60px; font-size:33px; color:#349364;"> 
<span style="color:#666;">Your profile: </span><?php echo $um->getById($sm->get_user_id())['name']; ?>
</h1>
<div id="profile_picture"> 

<img src="img/profile.svg" style="height:600px;
	margin-top:10px; border-radius:25px;" alt="profile"> </div>
 
</div> <!-- profile_content close -->

</wrapper>

<?php include_once ("include/footer.php")?>


</body>
</html>