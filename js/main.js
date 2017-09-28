$(document).ready(function() {

	// Burger menu
	$('.burger-menu').click( function(){
		if(window.innerWidth < 769){
			$('.wrapper-menu').fadeToggle(100);
		} else {}
	});

});

function checkForm(form) {

	var name=document.forms["contactform"]["name"].value;
	var email=document.forms["contactform"]["email"].value;
	var msg=document.forms["contactform"]["msg"].value;

	if (name==null || name=="",email==null || email=="",msg==null || msg=="")
	{
		alert("Favor de llenar los campos obligatorios");
		return false;
	}

	return true;
}
