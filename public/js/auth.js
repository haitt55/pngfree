(function() {
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
		form.find('span.register-error').remove();
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
					$('<span class="register-error error-' + field + '">' + error.errors[field][0] + '</span>').insertAfter(eField);
					eField.css({ borderColor: 'red' });
				}
				form.find('button[type=submit]').removeAttr('disabled');
			}
		})
	});
})();