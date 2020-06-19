$( document ).ready(function() {


	$("#login_form").submit(function(){
            
        $.ajax({

            url : "http://localhost/star_ref/php/login_acction.php",
            method : "POST",
            data : $('#login_form').serialize(),

            success: function (data) {

            	if (data == "lets_go")
            	{
            		window.location.href = encodeURI("http://localhost/star_ref/pages/home.php");
            			
            	}
            	if (data == "User_error")
            	{
            		$("#log_username").addClass( "border-danger" );
            		$("#log_un_error").text("Username incorrect or User not registerd");
            		
            	}else {

            		$("#log_username").removeClass( "border border-danger" );
            		$("#log_un_error").text("");
            	}

            	if (data == "PW_error")
            	{
            		$("#log_password").addClass( "border-danger" );
            		$("#log_pw_error").text("Incorect Password!");
            		
            	}else {

            		$("#log_password").removeClass( "border border-danger" );
            		$("#log_pw_error").text("");
            	}

                  if (data == "status_error")
                  {
                        alert("Your Account has been Deactivated please contact Admin");                        
                  }
                
            }
        })
    });

});