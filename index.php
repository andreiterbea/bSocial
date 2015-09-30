<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- Bootstrap -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">

<title>Front Page</title>


<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
<script src="js/modernizr.js"></script> <!-- Modernizr -->

</head>

<body>
<wrapper>

<!-- Below is some PHP code that pulls the menu from another file (menu.php) and puts it on this page. This way it's easy to make changes and update every page at once -->
<?php include 'include/menu.php';?>

<div id="front_content">

<div class="row">
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="groups.html"> <img src="billeder/groups.png" style="height:300px; width:300px;" alt="groups"> </a>
      <div class="caption">
        <div class="p2"> Create a new group or check out one of the groups you're a part of. <br/> </div>
      </div>
    </div>
  </div>
  
  
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="calendar.html"> <img src="billeder/calendar.png" style="height:300px; width:300px;" alt="calendar"> </a>
      <div class="caption">
        <div class="p2">Remember to check your calendar, so you can keep track of all the cool events going on at Bsocial.<br/> </div>
      </div>
    </div>
  </div>
  
  
 	  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="notifications.html"> <img src="billeder/notifications.png" style="height:300px; width:300px;" alt="notifications"> </a>
      <div class="caption">
        <div class="p2">Don't forget to keep an eye out on your notifications. You don't wanna miss out on the fun stuff, right?
        <br/> </div>
      </div>
    </div>
  </div>
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 	



</div>


<?php include 'include/footer.php';?>

</wrapper>
</body>
</html>