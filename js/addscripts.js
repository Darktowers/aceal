(function($){
	jQuery(document).ready(function() {

		$('.module-acordeon .title-acordeon').on('click', function(event) {
			event.preventDefault();
			$(this).toggleClass('active');
			$(this).next('.content-acordeon').slideToggle(500);
		});

	});

})(jQuery)
