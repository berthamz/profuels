$(document).ready(function() {

	// Burger menu
	$('.burger-menu').click( function(){
		if(window.innerWidth < 769){
			$('.wrapper-menu').fadeToggle(100);
		} else {}
	});

});