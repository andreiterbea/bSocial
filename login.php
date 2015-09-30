<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="css/style.css" rel="stylesheet">
<title>Login at Bsocial</title>
</head>

<body>
<wrapper>


<!-- Below is some PHP code that pulls the menu from another file (menu.php) and puts it on this page. This way it's easy to make changes and update every page at once -->
<?php include 'include/menu.php';?>

<div id="content">


  <section class="container">
    <div class="login">
      <h1 style="font-family: auto;margin-left: 48px; font-size:33px; color:#349364;"> Login to Bsocial</h1>
      <form method="post" action="index.html">
        <p><input type="text" name="login" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
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


<footer>
<p> Bsocial - bsocial@now.com - call us: +45 42 16 16 44 </p>           
</footer>

</wrapper>
</body>
</html>