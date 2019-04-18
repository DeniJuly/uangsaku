$(document).ready(function(){
	// side nav
	$('.button-collapse').sideNav({
	        menuWidth: 300,
	        edge: 'left', 
	        closeOnClick: true,
	        draggable: true,
    });
    // modal
    $('.modal').modal({
	      dismissible: true,
	      opacity: .5, 
	      inDuration: 300, 
	      outDuration: 200, 
	      startingTop: '4%', 
	      endingTop: '10%'   
	});

	// dropdown
	$('.dropdown-button').dropdown({
		    inDuration: 300,
		    outDuration: 225,
		    constrainWidth: false,
		    gutter: 0,
		    belowOrigin: false,
		    alignment: 'right',
	    }
	);
	// SELECT FORM
    $('select').material_select();
});