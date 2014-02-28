$(function(){
	// login form
	var $form = $('.login-form'),
		$step = $('.step'),
		$next = $('.next'),
		$inquirer = $('.form');

	$form.on('submit', function(e){
		e.preventDefault();
		setTimeout(function(){
			if( $form.find('.parsley-error').length ) return;

			var data = $form.serialize();
			$.get('scripts/login.php', data, function(responce){
				window.location.reload();
				// console.log( responce );
			});
		}, 0);
	});

	// form
	$('.submit').hide();
	$step.not(':first').hide();
	$next.on('click', function(e){
		e.preventDefault(e);
		$step
			.filter(':visible')
			.last()
			.next()
			.show();

		if( $step.last().is(':visible') ){
			$next.hide();
			$('.submit').show();
		}

	});

	// select diller city
	$('#diller').on('change', function(){
		var city = $(this).find('option:selected').data('city');
		$('#city').find('option[value="'+city+'"]').attr('selected', 'selected');
	});


	
});



function modal(){
	$('#modal').modal('show');
}