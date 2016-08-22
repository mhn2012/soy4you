// JavaScript Document

$('document').ready(function()
{ 
     /* validation */ 
	   /* Her er vores regler for at validere sign-up-formen */
	 $("#register-form").validate({
      rules:
	  {
			user_name: {
		    required: true,
			minlength: 2
			},
			password: {
			required: false,
			minlength: 8,
			maxlength: 15
			},
			cpassword: {
			required: false,
			equalTo: '#password'
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            user_name: "Vær sød at indtaste mere end 2 bogstaver",
            password:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            user_email: "Vær sød at indtaste en valid email adresse",
			cpassword:{
						required: "please retype your password",
						equalTo: "password doesn't match !"
					  }
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	     /* I denne funktion sender vi det indtastede data afsted til serveren via superglobalen POST og AJAX*/
	   function submitForm()
	   {		
				var data = $("#register-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'register.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sender...');
				},
				success :  function(data)
						   {						
								if(data===1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Emailen er desværre allerede taget </div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Tilmeld nyhedsbrev');
										
									});
																				
								}
								else if(data==="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing Up ...');
									setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success.php"); }); ',5000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-success"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' </div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Tilmeld nyhedsbrev');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});