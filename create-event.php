<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<?php include 'include/headlinks.php';?> <!-- links to css and js -->
<link rel="stylesheet" href="css/eventstyle.css"> 
<title>Create an event</title>

</head>

<body>
<wrapper>


<!-- Below is some PHP code that pulls the menu from another file (menu.php) and puts it on this page. This way it's easy to make changes and update every page at once -->
<?php include 'include/menu.php';?>

<div id="content">
<div id="createeventbox">

  <section class="container">
    <div class="createevent" style="background-color:#62c090;">
      <h1 style="font-family: 'autoradiographicrg'; margin-left: 48px; font-size:300%; color:white;">Create an Event!</h1>
      <form method="post" action="index.html">
      
     <p style="color:#FFF;">First choose the group you want to participate in the Event! </p>
        <p><select>
        		<option value="chooseGroup">
        	</select></p>
            
    <p style="color:#FFF;">Choose a title for your new Event:</p>  
        <p><input type="text" style="width:400px;" name="eventTitle" value="" ></p>
        
    <p style="color:#FFF;">Tell your Group what the Event is all about:</p>  
         <p><input type="text" style="width:400px; height:100px;" name="eventDescription" value="" ></p>
    
    <p style="color:#FFF;">When will the Event take place?</p>
       <input type="date" name="eventDate" min="2015-10-01"><br>
       </br>
          </label>
        </p>
        <p class="submit"><input type="submit" style="background:#1174d9;" name="createEvent" value="Create Event!"></p>
      </form>

    </div>
  </section>

</div><!--loginbox close-->
</div> <!-- content close -->
</wrapper>

<?php include_once ("include/footer.php")?>


</body>
</html>