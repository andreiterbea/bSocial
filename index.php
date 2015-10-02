<?php require_once('app.php');
    $um->loggedInElseRedirect();
?>
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


<div class="row">
<h5> Dashboard </h5>
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="explore.php"> <img src="billeder/groups.png" style="height:300px; width:300px;" alt="groups"> </a>
      <div class="caption">
        <div class="p2"> Create a new group or check out one of the groups you're a part of. <br/> </div>
      </div>
    </div>
  </div>
  
  
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="bootstrap-calendar/"> <img src="billeder/calendar.png" style="height:300px; width:300px;" alt="calendar"> </a>
      <div class="caption">
        <div class="p2">Remember to check your calendar, so you can keep track of all the cool events going on at Bsocial.<br/> </div>
      </div>
    </div>
  </div>
  
  
 	  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="notifications.php"> <img src="billeder/notifications.png" style="height:300px; width:300px;" alt="notifications"> </a>
      <div class="caption">
        <div class="p2">Don't forget to keep an eye out on your notifications. You don't wanna miss out on the fun stuff, right?
        <br/> </div>
      </div>
    </div>
  </div>
 

<div class="upcoming"> <h6> Upcoming Events </h6> </div>
<div class="upcoming_picture"> <a href="events.php"> <img src="billeder/upcoming.svg" style="height: 800px;" alt="upcoming"> </a> </div>

	



</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 


</wrapper>

<?php include_once ("include/footer.php")?>
</body>
</html>