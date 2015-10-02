<?php require_once('app.php');

$userid = $sm->get_user_id();

 ?>
<header class="cd-header menu-is-open"> 

<div id="logo"><a href="index.php"><img src="billeder/logo.png" style="height: 140px; margin: 15px;" alt="logo"></a></div>
<?php // hide if not logged in 
			if($sm->get_logged_in())
			{ ?>


<span class='no-line' style="position:absolute; bottom:40px;width:500px;right:20px; color:white; font-size:14pt;">
		
<?php echo "Logged in as:&nbsp;&nbsp; <a href='profile.php' class='no-line' style='color:white;border-bottom:1px solid white;'>" . $um->getById($userid)['name']; ?></a> 

&nbsp;&nbsp;|&nbsp;&nbsp; 

<?php echo "<a href='notifications.php' class='no-line' 
style='color:white;border-bottom:1px solid white;'>Notifications</a>
<span id='not-circ'><b id='noti_count'></b></span>";
?>

</span> 


<!-- Below is the button that trigers the drop down -->
<a class="cd-primary-nav-trigger menucss" href="#0">
			<span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
		</a> 
		<?php } //end if ?>
<!-- this is where the button ends -->
</header>


<!--below is the menu that is normally hidden, but drops down when you press the button -->
	<nav>
    
	  </section>
  

		<ul class="cd-primary-nav menucss"><div class="linkstyle">
			<li><a href="./">Dashboard</a></li>
			<li><a href="notifications.php">Notifications</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="explore.php">Explore Groups</a></li>
			<li><a href="create-group.php">Create group</a></li>
			<li><a href="create-event.php">Create event</a></li>
			<li><a href="bootstrap-calendar/index.php">Calendar</a></li>
            <li><a href="ajax/do-logout.php">Log Out</a></li>
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
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<style type="text/css">
	
	#not-circ {
		background: transparent;
		border-radius: 50%;
		width: 25px;
		height: 23px;
		padding-top: 3px;
		text-align: center;
		display: inline-block;
	}
</style>
<script type="text/javascript">
	
	var old = "<?php echo count($nm->getUnreadByUserId($userid)); ?>";
	var evtSource = new EventSource("ajax/do-count-unread.php");
	evtSource.onmessage = function(e) {

		if(e.data == 0) {
			$('#not-circ').css('background', 'transparent');
		} else {
			if(old == e.data){
				// no new
			} else {
				$('#noti_count').fadeTo('fast',0).fadeTo('fast',1).fadeTo('fast',0).fadeTo('fast',1);
			}
			$('#not-circ').css('background', '#62c090');
			$('#noti_count').text(e.data);
			old = e.data;
		}
	}

</script>
