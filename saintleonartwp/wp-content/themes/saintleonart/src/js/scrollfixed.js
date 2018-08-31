if (window.matchMedia("(min-width: 1201px)").matches) {
  	/* La largeur minimum de l'affichage est 1201 px inclus */
	$(document).scroll(function() {
	    checkOffset();
	});

	function checkOffset() {
	    if($('.pratique__list').offset().top + $('.pratique__list').height() >= $('.newsletter').offset().top - 64)
	        $('.pratique__list').css({
				'overflow': 'hidden',
				'background-color': '$red',
				'height': '380px',
				'margin-right': '0rem',
				'width': '30%',
				'position': 'absolute',
				'right': '10rem',
				'top': '',
				'bottom': '5rem'
			});
	    if($(document).scrollTop() + window.innerHeight < $('.newsletter').offset().top)
	        $('.pratique__list').css({
        		'overflow': 'hidden',
				'background-color': '$red',
				'height': '380px',
				'margin-right': '0rem',
				'width': '30%',
				'position': 'fixed',
				'right': '10rem',
				'top': '',
				'bottom': '0rem'
        	}); // restore when you scroll up
	}
}