$(document).ready(function(){
	// side nav
	$('.button-collapse').sideNav({
	        menuWidth: 300,
	        edge: 'left', 
	        closeOnClick: true,
	        draggable: true,
    });
    $('.modal').modal({
	      dismissible: true,
	      opacity: .5, 
	      inDuration: 300, 
	      outDuration: 200, 
	      startingTop: '4%', 
	      endingTop: '10%'   
	});
});