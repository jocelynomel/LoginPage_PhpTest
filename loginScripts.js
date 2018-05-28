$(document).ready(function(){
	
	$('#pswd').keyup(function() {
		var pswd = $(this).val();
		
		//validate the length
		if ( pswd.length < 8 ) {
			$('#length').removeClass('valid').addClass('invalid');
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}
		
		//validate letter
		if ( pswd.match(/[A-z]/) ) {
			$('#letter').removeClass('invalid').addClass('valid');
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
		}

		//validate capital letter
		if ( pswd.match(/[A-Z]/) ) {
			$('#capital').removeClass('invalid').addClass('valid');
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
		}

		//validate number
		if ( pswd.match(/\d/) ) {
			$('#number').removeClass('invalid').addClass('valid');
		} else {
			$('#number').removeClass('valid').addClass('invalid');
		}
		
		//validate space
		if ( pswd.match(/[^a-zA-Z0-9\/]/) ) {
			$('#space').removeClass('invalid').addClass('valid');
		} else {
			$('#space').removeClass('valid').addClass('invalid');
		}
                
                //pswd confirm
                if ( $('#pswdConfirm').val() === pswd ) {
                        $('#pswdConf').removeClass('invalid').addClass('valid');
                } else {
                        $('#pswdConf').removeClass('valid').addClass('invalid');
                }
		
	}).focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
	});
        
	$('#pswdConfirm').keyup(function() 
        {
            var pswd = $('#pswd').val();
                       
            //pswd confirm
            if ( $(this).val() === pswd ) {
                    $('#pswdConf').removeClass('invalid').addClass('valid');
            } else {
                    $('#pswdConf').removeClass('valid').addClass('invalid');
            }
		
	}).focus(function() 
        {
            $('#pswd_info').show();
	}).blur(function() 
        {
            $('#pswd_info').hide();
	});
        
        $('#loginMail').keyup(function() 
        {
            var lgin = $(this).val();
            
            //Not blank
            if ( lgin.match(/^(?!\s*$)/) ) {
                    $('#blank').removeClass('invalid').addClass('valid');
            } else {
                    $('#blank').removeClass('valid').addClass('invalid');
            }
            
            //validate format
            if ( lgin.match(/^[a-zA-Z-0-9]+@[a-zA-Z-]+\.[a-zA-Z]{2,6}$/) ) {
                    $('#mail').removeClass('invalid').addClass('valid');
            } else {
                    $('#mail').removeClass('valid').addClass('invalid');
            }
		
	}).focus(function() 
        {
            $('#pswd_info').show();
	}).blur(function() 
        {
            $('#pswd_info').hide();
            var lgin = $('#loginMail').val();
            
            //Not blank
            if ( lgin.match(/^(?!\s*$)/) ) {
                    $('#blank').removeClass('invalid').addClass('valid');
            } else {
                    $('#blank').removeClass('valid').addClass('invalid');
            }
            
            //validate format
            if ( lgin.match(/^[a-zA-Z-0-9]+@[a-zA-Z-]+\.[a-zA-Z]{2,6}$/) ) {
                    $('#mail').removeClass('invalid').addClass('valid');
            } else {
                    $('#mail').removeClass('valid').addClass('invalid');
            }
	});
        
        $('#loginForm').on('submit', function(event) {
                
                if($('#blank')[0].classList.contains('valid') && 
                        $('#mail')[0].classList.contains('valid') && 
                        $('#length')[0].classList.contains('valid') && 
                        $('#letter')[0].classList.contains('valid') && 
                        $('#capital')[0].classList.contains('valid') && 
                        $('#number')[0].classList.contains('valid') && 
                        $('#space')[0].classList.contains('valid') && 
                        $('#pswdConf')[0].classList.contains('valid'))
                {
                }
                else
                {
                        event.preventDefault();
                }
        });
        
});