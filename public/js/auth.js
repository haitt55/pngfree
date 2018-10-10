(function() {

	$('.base-public-login-button').click(function() {
		$("#base-public-login").show().find(".tkw-LoginCont").addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
	        $(this).removeClass("zoomIn")
	    })
	});

	$('.base-public-register-button').click(function() {
		$("#base-register-window").show().find(".tkw-registerCont").addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
	        $(this).removeClass("zoomIn")
	    })
	});
	

    $(".tkw-main").on("click", ".cls-btn", function() {
        $(this).parents(".tkw-window ").fadeOut()
    })


	$('.form-register').on('submit', function(e) {
		e.preventDefault();
		var form = $(this);
		var formData = {
			_token: e.target._token.value,
			name: e.target.name.value,
			email: e.target.email.value,
			password: e.target.password.value,
		}
		form.find('button[type=submit]').attr('disabled', '');
		form.find('p.register-error').remove();
		form.find('input').css({ borderColor: '#d3d3d3' });
		$.ajax({
			url: form.attr('action'),
			type: 'POST',
			data: formData,
			success: function(res) {
				window.location.reload();
			},
			error: function(e) {
				var error = JSON.parse(e.responseText);
				for (field in error.errors) {
					var eField = form.find('[name=' + field + ']');
					$('<p class="register-error error-' + field + '">' + error.errors[field][0] + '</p>').insertAfter(eField);
					eField.css({ borderColor: 'red' });
				}
				form.find('button[type=submit]').removeAttr('disabled');
			}
		})
	});

	$('.form-login').on('submit', function(e) {
		e.preventDefault();
		var form = $(this);
		var formData = {
			_token: e.target._token.value,
			email: e.target.email.value,
			password: e.target.password.value,
			remember: e.target.remember.checked,
		}
		form.find('button[type=submit]').attr('disabled', '');
		form.find('p.login-error').remove();
		form.find('input').css({ borderColor: '#d3d3d3' });
		$.ajax({
			url: form.attr('action'),
			type: 'POST',
			data: formData,
			success: function(res) {
				form.find('button[type=submit]').removeAttr('disabled');
				if (res.success) {
					return window.location.reload();
				}
				$('<p class="login-error" style="margin-top: 7px">' + res.message + '</p>').insertBefore(form.find('#btn-login'));
			},
			error: function(e) {
				var error = JSON.parse(e.responseText);
				for (field in error.errors) {
					var eField = form.find('[name=' + field + ']');
					$('<p class="login-error error-' + field + '">' + error.errors[field][0] + '</p>').insertAfter(eField);
					eField.css({ borderColor: 'red' });
				}
				form.find('button[type=submit]').removeAttr('disabled');
			}
		});
	});
})();