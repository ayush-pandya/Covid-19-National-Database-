function userlogin()
{
	jQuery('.field_error').html('');
	var email=jQuery("#Username").val();
	var password=jQuery("#Password").val();
	var is_error='';
	if(email==""){
		jQuery('#login_Username_error').html('Please enter Username');
		is_error='yes';
	}if(password==""){
		jQuery('#login_Password_error').html('Please enter password');
		is_error='yes';
	}
	if(is_error==''){
		jQuery.ajax({
			url:'login_submit.php',
			type:'post',
			data:'email='+email+'&password='+password,
			success:function(result){
				if(result=='wrong'){
					jQuery('.login_msg p').html('Please enter valid login details');
				}
				if(result=='valid'){
					window.location.href=window.location.href;
				}
			}	
		});
	}	
}
