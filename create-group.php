<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<?php include 'include/headlinks.php';?> <!-- links to css and js -->
<link rel="stylesheet" href="css/groupstyle.css">
<title>Create a group</title>

</head>

<body>
<wrapper>


<!-- Below is some PHP code that pulls the menu from another file (menu.php) and puts it on this page. This way it's easy to make changes and update every page at once -->
<?php include 'include/menu.php';?>

<div id="content">
<div id="createeventbox">

  <section class="container">
    <div class="createevent" style="background-color:#1174d9;">
      <h1 style="font-family: 'autoradiographicrg'; margin-left: 48px; font-size:300%; color:white;">Create a new Group!</h1>
      <form method="post" action="index.html">
      
    
            
    <p style="color:#FFF;">Name your group Group:</p>  
        <p><input type="text" style="width:400px;" name="groupName" value="" ></p>
        
    <p style="color:#FFF;">Choose a Group Description</p>  
         <p><input type="text" style="width:400px; height:100px;" name="groupDescription" value="" ></p>
    
     <p style="color:#FFF;">Choose Parent Group</p>
        <p><select>
        		<option value="chooseParentGroup">
        	</select></p>
          </label>
        </p>
        <p class="submit"><input type="submit"  name="createGroup" value="Create Group!"></p>
      </form>

    </div>
  </section>

</div><!--loginbox close-->
</div> <!-- content close -->




</wrapper>
<?php include_once ("include/footer.php")?>
</body>
</html>