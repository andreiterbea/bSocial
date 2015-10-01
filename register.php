<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<?php include 'include/headlinks.php';?> <!-- links to css and js -->
<link rel="stylesheet" href="css/loginstyle.css"> 
<title>Register at Bsocial</title>

</head>

<body>
<wrapper>


<!-- Below is some PHP code that pulls the menu from another file (menu.php) and puts it on this page. This way it's easy to make changes and update every page at once -->
<?php include 'include/menunodrop.php';?>

<div id="content">

    <div class="logintext">
	<h1 style="color:white;">Bsocial. </br>Bringing EAL students together inside and outside school!</h1>
</div> <!-- end of logintext div -->

<div id="loginbox">

  <section class="container">
    <div class="login">
      <h1 style="font-family: 'autoradiographicrg'; margin-left: 48px; font-size:33px; color:#349364;">Register</h1>
      <form method="post" action="index.html">
      
     <p style="color:#000;">Find your class </p>
        <p><select>
        		<option value="chooseClass">
        	</select></p>
            
	<p style="color:#000;">Find your name </p>
        <p><select>
        		<option value="chooseName">
        	</select></p>
    <p style="color:#000;">Choose a password</p>  
        <p><input type="password" name="password" value="" placeholder="Choose Password"></p>
        
    <p style="color:#000;">Confirm password</p>  
        <p><input type="password" name="confirm_password" value="" placeholder="Confirm Password"></p>
        
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            <p style="color:#000;">Remember me </p>
        
          </label>
        </p>
        <p class="submit" style="margin-left: 75px;"><input type="submit" name="commit" value="Login"></p>
      </form>
      <div class="login-help">
      <div class="not-member" >
      <p>Already a member? <a href="login.php">Sign in</a>.</p>
    </div>
    </div>
    </div>

    
    
    
  </section>

</div><!--loginbox close-->
</div> <!-- content close -->




</wrapper>
<?php include_once ("include/footer.php")?>
</body>
</html>