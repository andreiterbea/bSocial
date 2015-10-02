<!DOCTYPE html>
<html>
<head>
	<title>Calendar Page</title>

	<meta charset="UTF-8">

	<link rel="stylesheet" href="components/bootstrap2/css/bootstrap.css">
	<link rel="stylesheet" href="components/bootstrap2/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/calendar.css">	
    
<link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->

<link rel="stylesheet" href="../css/style.css"> <!-- Resource style -->

<script src="../js/modernizr.js"></script> <!-- Modernizr -->

<script type="text/javascript" src="../localSearchBox.js"></script> <!-- Search script -->
</head>
<body>

<wrapper>


<!-- MENU BEGINS -->
<header class="cd-header menu-is-open"> 

<div id="logo"><a href="../index.php"><img src="../billeder/logo.png" style="height: 140px; margin: 15px;" alt="logo"></a></div>

<!-- Below is the button that trigers the drop down -->
<a class="cd-primary-nav-trigger menucss" href="#0">
			<span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
		</a> 
<!-- this is where the button ends -->
</header>
<nav>
    
	  </section>
  

		<ul class="cd-primary-nav menucss"><div class="linkstyle">
			<li><a href="../notifications.php">Notifications</a></li>
			<li><a href="../profile.php">Profile</a></li>
			<li><a href="../explore.php">Explore Groups</a></li>
			<li><a href="../create-group.php">Create group</a></li>
			<li><a href="../create-event.php">Create event</a></li>
			<li><a href="index.php">Calendar</a></li>
            <li><a href="../settings.php">Settings</a></li>
			</br></br>
                  <!-- below is the div for the search bar-->
		
		<form class="sample_attach" id="src_child">
		<div id="searchbar"><input style="margin-bottom: 1px; width: 130px; left:-30px;" type="text" name="terms"></div></br>
		<input type="submit" value="Search Groups"></center>
		</form></br></br>
    <!-- search bar ends here. Menu continues below-->
    
			<li class="cd-social cd-facebook"><a href="#0">Facebook</a></li>
			<li class="cd-social cd-instagram"><a href="#0">Instagram</a></li>
			<li class="cd-social cd-twitter"><a href="#0">Twitter</a></li>
		</ul>
        
         </div> <!-- end of linkstyle div -->
         

	</nav>
    <!-- this is where the menu ends -->
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/main.js"></script> <!-- Resource jQuery -->

<!-- MENU ENDS -->


<div id="calendar_content">

 	<div class="page-header">
    	
	</div>


	<div class="row">
        <h2 style="font-size:80px; font-family:autoradiographicrg; "> October 2015 </h2>
		<small style="font-size:40px; font-family:autoradiographicrg; float:right; margin-right:200px;" >Here you can see all the events </br> in your calendar for October 2015.</br>Hover over the chosen date to see </br>your upcoming events. If you would like</br> to add an Event, go to the </br><q>Create Event</q> page.</small>
  
    
    	<div class="span9">
			<div id="calendar"></div>
		</div>
		
	

	<div class="modal hide fade" id="events-modal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h3>Event</h3>
		</div>
		<div class="modal-body" style="height: 400px">
		</div>
		<div class="modal-footer">
			<a href="#" data-dismiss="modal" class="btn">Close</a>
		</div>
	</div>

	<script type="text/javascript" src="components/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="components/underscore/underscore-min.js"></script>
	<script type="text/javascript" src="components/bootstrap2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="components/jstimezonedetect/jstz.min.js"></script>
	<script type="text/javascript" src="js/language/bg-BG.js"></script>
	<script type="text/javascript" src="js/language/nl-NL.js"></script>
	<script type="text/javascript" src="js/language/fr-FR.js"></script>
	<script type="text/javascript" src="js/language/de-DE.js"></script>
	<script type="text/javascript" src="js/language/el-GR.js"></script>
	<script type="text/javascript" src="js/language/it-IT.js"></script>
	<script type="text/javascript" src="js/language/hu-HU.js"></script>
	<script type="text/javascript" src="js/language/pl-PL.js"></script>
	<script type="text/javascript" src="js/language/pt-BR.js"></script>
	<script type="text/javascript" src="js/language/ro-RO.js"></script>
	<script type="text/javascript" src="js/language/es-CO.js"></script>
	<script type="text/javascript" src="js/language/es-MX.js"></script>
	<script type="text/javascript" src="js/language/es-ES.js"></script>
	<script type="text/javascript" src="js/language/ru-RU.js"></script>
	<script type="text/javascript" src="js/language/sk-SR.js"></script>
	<script type="text/javascript" src="js/language/sv-SE.js"></script>
	<script type="text/javascript" src="js/language/zh-CN.js"></script>
	<script type="text/javascript" src="js/language/cs-CZ.js"></script>
	<script type="text/javascript" src="js/language/ko-KR.js"></script>
	<script type="text/javascript" src="js/language/zh-TW.js"></script>
	<script type="text/javascript" src="js/language/id-ID.js"></script>
	<script type="text/javascript" src="js/language/th-TH.js"></script>
	<script type="text/javascript" src="js/calendar.js"></script>
	<script type="text/javascript" src="js/app.js"></script>

	<script type="text/javascript">
		var disqus_shortname = 'bootstrapcalendar'; // required: replace example with your forum shortname
		(function() {
			var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		})();
	</script>
</div>

</wrapper>

<?php include_once ("../include/footer.php")?>
</body>
</html>
