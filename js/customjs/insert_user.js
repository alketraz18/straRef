$( document ).ready(function() {
    //on keypress - match passwords
    var validpw = false; 
    var validpn = false;
    var validnic = false;

    //check password

    $('#confirm').keyup(function(e) {
        //get values 
        var pass = $('#password');
        var confpass = $(this);

        //check the strings
        if (pass.val() == confpass.val()) {
            //if both are same remove the error and allow to submit
            $('#confirm').removeClass( "border border-danger" );
            $('#pw-error').text('');
            validpw = true;
        } else {
            //if not matching show error and not allow to submit
            $('#confirm').addClass( "border-danger" );
            $('#pw-error').text('Password not matching');
            validpw = false; 
        }
    });


// check NIC
    $('#nicno').keyup(function(e) {
        //get values 
        var nic = $('#nicno').val();

        //check the strings
        if (nic_validation(nic)) {
            //if both are same remove the error and allow to submit
            $('#nicno').removeClass( "border border-danger" );
            $('#nic-error').text('');
            validpn = true;
        } else {
            //if not matching show error and not allow to submit
            $('#nicno').addClass( "border-danger" );
            $('#nic-error').text('NIC Seems not Correct');
            validpn = false; 
        }

    });

    // check Phone NO

        $('#p_no').keyup(function(e) {
        //get values 
        var pno = $('#p_no').val();

        //check the strings
        if (pno_validation(pno)) {
            //if both are same remove the error and allow to submit
            $('#p_no').removeClass( "border border-danger" );
            $('#p_no_error').text("");
            validnic = true;
        } else {
            //if not matching show error and not allow to submit
            $('#p_no').addClass( "border-danger" );
            $('#p_no_error').text("Phone Number Seems not Correct");
            validnic = false; 
        }

    });

//NIC Validation

    function nic_validation(nicNumber) {

		    var result = false;
		    if (nicNumber.length === 10 && !isNaN(nicNumber.substr(0, 9)) && isNaN(nicNumber.substr(9, 1).toLowerCase()) && ['x', 'v'].includes(nicNumber.substr(9, 1).toLowerCase())) {
		        result = true;
		    } else if (nicNumber.length === 12 && !isNaN(nicNumber)) {
		        if(nicNumber.substring(2,0)=='18' || nicNumber.substring(2,0)=='19' || nicNumber.substring(2,0)=='20'){
		        result = true;}
		    } else {
		        result = false;
		    }
		    return result;

		}

//Phone no Validation

	function pno_validation(pno) {

		    var result = false;
		    if (pno.length === 10){
		        result = true;
		    }else {
		        result = false;
		    }
		    return result;

		}

//Submit data using ajax

	$("#create_new_user").submit(function(){

		if (validpw && validpn && validnic) {
	    $.ajax({

	    	url : "http://localhost/star_ref/php/insert_user_acction.php",
	    	method : "POST",
	    	data : $('#create_new_user').serialize(),

	        success: function (data) {

	        	if (data == "exist") {

                    alert("This username alredy taken, Try defernt Username");
                    $('#username').addClass( "border-danger" );
                    $('#user_error').text("This username alredy taken, Try defernt Username");

	        	}else if (data == "Fail") {

	        		alert("Somthing nor right! Close this and retry");

	        	}else{
                        window.location.href = encodeURI("../pages/home_admin.php?msg=user creation sucsess");
	        	}
	            
	        }
    	})
    	}else{
    		alert("Check Data fields and correct errors");
    	}
  	});

    $("#quit_add").click(function() {

        setTimeout(window.location.href = encodeURI("../pages/home.php"), 5000);
    });

 });

