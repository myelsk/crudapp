$(document).ready(function() {
	$('#name, #surname, #email, #up-name, #up-surname, #up-email').unbind().blur(function() {
		var id = $(this).attr('id');
		var val = $(this).val();
		var result = 0;
		switch(id) {
			case 'name':
			case 'up-name':
				var rv_name = /^[a-zA-Zа-яА-Я]+$/;
				if(val.length > 2 && val != '' && rv_name.test(val)) {
					$(this).removeClass('err').addClass('no-err');
				} else {
					$(this).addClass('err');
				}
			break;
			case 'surname':
			case 'up-surname':
				var rv_surname = /^[a-zA-Zа-яА-Я]+$/;
				if(val.length > 2 && val != '' && rv_surname.test(val)) {
					$(this).removeClass('err').addClass('no-err');
				} else {
					$(this).addClass('err');
				}
			break;
			case 'email':
			case 'up-email':
				var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
				if(val.length > 2 && val != '' && rv_email.test(val)) {
					$(this).removeClass('err').addClass('no-err');
				} else {
					$(this).addClass('err');
				}
			break;
		}

		if($('#name').hasClass('no-err') && 
			$('#surname').hasClass('no-err') && 
			$('#email').hasClass('no-err')) {

			$('#save').removeClass('no-block').addClass('block');
		} else {
			$('#save').removeClass('block').addClass('no-block');
		}

		$('#save').click(function() {
		$('#name, #surname, #email').removeClass('no-err', 'err');
		$(this).removeClass('block').addClass('no-block');
		});

		if($('#up-name').hasClass('no-err') && 
			$('#up-surname').hasClass('no-err') && 
			$('#up-email').hasClass('no-err')) {

			$('#update').removeClass('no-block').addClass('block');
		} else {
			$('#update').removeClass('block').addClass('no-block');
		}
	});

	$('#update').click(function() {
		$('#up-name, #up-surname, #up-email').removeClass('no-err', 'err');
		$(this).removeClass('block').addClass('no-block');
	});
});