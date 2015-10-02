<?php require_once('app.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<?php include 'include/headlinks.php';?> <!-- links to css and js -->
<link rel="stylesheet" href="css/loginstyle.css"> 

<title>Login at Bsocial</title>
</head>

<body>
<wrapper>


<!-- Below is some PHP code that pulls the menu from another file (menu.php) and puts it on this page. This way it's easy to make changes and update every page at once -->
<?php include 'include/menu.php';?>



<div id="content" style="height:auto;">

    <div class="logintext">
	<h1 style="color:white;">Bsocial. </br>Bringing EAL students together inside and outside school!</h1>
</div> <!-- end of logintext div -->

<div id="loginbox">

  <section class="container">
    <div class="login">
      <h1 style="font-family: 'autoradiographicrg'; margin-left: 60px; font-size:33px; color:#349364;"> Login to Bsocial</h1>
      <form class="loginreg" method="post" action="ajax/do-login.php" id="login-form">
        <p><input style="margin-left:45px;" type="text" name="name" value="" placeholder="Name"></p>
        <p><input style="margin-left:45px;" type="password" name="password" value="" placeholder="Password"></p>
     
        <p class="submit" style="margin-left: 85px;"><input type="submit" name="commit" value="Login"></p>
      </form>
      <div class="login-help">
      <div class="not-member" style="padding-top:10px; margin-left:30px;">
      <p>Not a member? <a href="register.php">Connect with your classmates</a>.</p>
    </div>
    </div>
    </div>


</div><!--loginbox close-->

</div> <!-- content close -->

</wrapper>

<?php include_once ("include/footer.php")?>


</body>
</html>