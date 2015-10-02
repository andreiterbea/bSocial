
<div id="outerPageFooter" style="

	background-color:#1174d9;
	margin: 0;
	padding: 0;
	border: none;
	position:fixed;
    bottom:0;
    width:100%;
    height:60px;
	alignment-adjust:central;
	margin-left:-8px;
    
    ">
<div id="pageFooter" style="

	background-color:#1174d9;
	width:960px;
	alignment-adjust:central;
	margin:0 auto;
	color:#10997F;
	bottom:0;
}"> 

<br/>
<a href="" style="color:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">&copy; Bsocial</a> 
<br />
</div>
</div>
<br />


<script type="text/javascript">
	// move to js/app.js and load it
	$(document).ready(function() {
		
		// create group dummy
		$('#dummy-form').submit(function(event) {
	        
	        event.preventDefault();

	        var formData = {
	            'group_name'      : $('input[name=group_name]').val()
	        };
	        $.ajax({
	            type        : 'POST',
	            url         : 'ajax/do-create-group.php',
	            data        : formData
	        }).done(function(data) {
					if(data){
						window.location.href = 'explore.php';
					} else {
						alert("Name already exists.");
					}
				});
	    });

		// FOR REGISTER PAGE DROPDOWNSSSSSSS
		var dummyClasses =[	{id: 0, classname: 'Danish Class from 1920'},{id: 1, classname: 'WebDev1semester'},{id: 2, classname: 'Class for Tests'} ];

		var dummyNames = [ ["Torkild Henriksen", "Bent Bentsen", "Birgit Jensen", "Torben Hansen"], ["Anders BC", "Andrei T", "Bjorn LH", "Cecilie M"], 
						   ["Test0", "Test1", "Test2", "Test3", "Test4", "Test5", "Test6", "Test7", "Test8" ]
						 ];
		
		var option = '';
		for (var i=0;i<dummyClasses.length;i++){
		   option += '<option value="'+ dummyClasses[i].id + '">' + dummyClasses[i].classname + '</option>';
		}
		$('#register-classes-drop').append(option);

		// CLASS CHANGE HANDLER
		$('#register-classes-drop').on('change', function() {

			//reset names options
			$('#register-names-drop').find('.remove').remove();

		    var option = '';
			for (var i=0;i<dummyNames[this.value].length;i++){
			   option += '<option class="remove" value="'+ dummyNames[this.value][i]+ '">' + dummyNames[this.value][i] + '</option>';
			}
			$('#register-names-drop').append(option);
		    
		    $('#register-names-drop').prop("disabled", false);



		});

		// NAMES CHANGE HANDLER
		$('#register-names-drop').on('change', function() {

		  

		});

		// LOGIN FORM HANDLER
	    $('#login-form').submit(function(event) {
	        var formData = {
	            'name'      : $('input[name=name]').val(),
	            'password'  : $('input[name=password]').val()
	        };
	        $.ajax({
	            type        : 'POST',
	            url         : 'ajax/do-login.php',
	            data        : formData
	        }).done(function(data) {
					if(data){
						window.location.href = './';
					} else {
						alert("Name and password combo was not found.");
					}
				});
	        event.preventDefault();
	    });



	    $('#register-form').submit(function(event) {
	    	event.preventDefault();

	        var password = $('input[name=password]').val();
	        var confirm_pw = $('input[name=confirm_password]').val();
			var name = $('#register-names-drop :selected').val();

			if(!name || !password || !confirm_pw){

				alert("all fields needed");

			} else {
				if(password !== confirm_pw){
	        	//fuck using an alert
	        	alert("pws not equal");

		        } else {
		        	//yay
		        	var formData = {
			            'name'      : name,
			            'password'  : password
			        };
			        $.ajax({
			            type        : 'POST',
			            url         : 'ajax/do-register.php',
			            data        : formData
			        }).done(function(data) { 
							if(data){
						        $.ajax({
						            type        : 'POST',
						            url         : 'ajax/do-login.php', 
						            data        : formData
						        }).done(function(data) {
						        	window.location.href = './';
						        });
							} else {
								alert("Name already exists.");
							}
						});
		        }
			}
			
	        

	        
	    });

	});





</script>