<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
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

<div id="front_content">

<div class="upcoming"> <h6> Settings </h6> </div>


</div>




</wrapper>

<?php include_once ("include/footer.php")?>
</body>
</html>