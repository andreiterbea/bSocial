<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/register.css"> <!-- Resource style -->
<script src="js/modernizr.js"></script> <!-- Modernizr -->

<title>Register</title>
</head>

<body>
<wrapper>


<div id="content">


  <section class="container">
    <div class="login">
      <h1 style="font-family: 'autoradiographicrg'; margin-left: 48px; font-size:33px; color:#349364;"> Login to Bsocial</h1>
      <form method="post" action="index.html">
        <p><input type="text" name="login" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            <p style="color:#000;">Remember me on this computer</p>
          </label>
        </p>
        <p class="submit" style="margin-left: 75px;"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
    </div>
    
    <div class="not-member" style="margin-left:400px;">
      <p>Not a member? <a href="index.html">Click here to start connecting with your classmates</a>.</p>
    </div>
  </section>

</div> <!-- content close -->





<!-- Below is some PHP code that pulls the menu from another file (menu.php) and puts it on this page. This way it's easy to make changes and update every page at once -->
<?php include 'include/menu.php';?>
Register


<?php include 'include/footer.php';?>
</wrapper>
</body>
</html>