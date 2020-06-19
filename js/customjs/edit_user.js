$( document ).ready(function() {

get_user();
//get all user for View_user.php

    function get_user() {
        $.ajax({

            url : "http://localhost/star_ref/php/process.php",
            method : "POST",
            data : {getUsers:1},
            success: function (data) 
            {
            $("#det_datah").html(data);
       		}
        })

        }

//delete selected user for View_user.php



});

	
function delete_user(elem) {
	var id = $(elem).attr("id");
	$('#delete_dialog').modal('show');
	$(".del_conf").attr("id", id); // to set element id to del_conf's id
	
}

function delete_confirm(elem) {
	var id = $(elem).attr("id");
	$('#delete_dialog').modal('hide');
    $.ajax({
        url : "http://localhost/star_ref/php/process.php",
        method : "POST",
        data : {delete_id:id},
        success: function (data)
        	{   $("#sucsess").html("<div class='alert alert-success alert-dismissible fade show text-center' role='alert'>Usrer was successfully Deleted!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");  
        		window.setTimeout(function(){location.reload()},2000);            
                 //location.reload();
                 //alert(data);                 
            }
    });
}

function view_user(elem){

	var id = $(elem).attr("id");
	$('#view_model').modal('show');
	    $.ajax({
            url : "http://localhost/star_ref/php/process.php",
            method : "POST",
            data : {getUserData:id},
            success: function (data) 
            {
            $("#view_data_here").html(data);
       		}
    });

}

function edit_user(elem){
    var id = $(elem).attr("id");
    alert(id);

}

function deact_user(elem){
    var id = $(elem).attr("id");
    
        $.ajax({
        url : "http://localhost/star_ref/php/process.php",
        method : "POST",
        data : {deact_id:id},
        success: function (data)
            {   $("#sucsess").html("<div class='alert alert-success alert-dismissible fade show text-center' role='alert'>Usrer was successfully Deactivated!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");  
                window.setTimeout(function(){location.reload()},2000);            
                 //location.reload();
                 //alert(data);                 
            }
    });

}

function act_user(elem){
    var id = $(elem).attr("id");
        $.ajax({
        url : "http://localhost/star_ref/php/process.php",
        method : "POST",
        data : {act_id:id},
        success: function (data)
            {   $("#sucsess").html("<div class='alert alert-success alert-dismissible fade show text-center' role='alert'>Usrer was successfully Activated!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");  
                window.setTimeout(function(){location.reload()},2000);            
                 //location.reload();
                 //alert(data);                 
            }
    });

}