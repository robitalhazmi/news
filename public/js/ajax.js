$(document).ready(function() {

	$('#login-form').on('submit', function (e) {
		e.preventDefault();
		$.ajax({
		    type: 'post',
		    url: 'login',
		    data: $('#login-form').serialize(),
		    success: function (data, status) {
					if (data.success === true) {
						location.href = 'login';
					}
					else {
						$('#status')[0].className = 'status';
						$('#error-login')[0].innerHTML = data.message;
					}
					}
		    });
	});

	$('#add-user').on('submit', function (e) {

		e.preventDefault();
		$.ajax({
			type: 'post',
			url: 'addUser',
			data: $('#add-user').serialize(),
			success: function (data, status) {
				if (data.success === true) {
					$('#modal-open')[0].className = 'hold-transition skin-blue sidebar-mini modal-open';
					$('#modal-success')[0].className = 'modal fade in';
					$("#modal-success").css({ 'display': "block"});
					$( "#modal-open" ).append( '<div class="modal-backdrop fade in"></div>');
				}
				else {
					$('#alert')[0].innerHTML = data.message;
					$('#modal-open')[0].className = 'hold-transition skin-blue sidebar-mini modal-open';
					$('#myModal')[0].className = 'modal fade in';
					$("#myModal").css({ 'display': "block"});
					$( "#modal-open" ).append( '<div class="modal-backdrop fade in"></div>');
				}
			}
		});
	});

	$('#myModal').on('click', function (e) {
		$('#myModal')[0].className = 'modal fade';
		$("#myModal").css({ 'display': "none"});
		$( ".modal-backdrop" ).remove();
	});

	$('#add-news').on('submit', function(e) {
		e.preventDefault();
		var data = CKEDITOR.instances.editor1.getData();
		console.log(data);
		$('#content-hidden')[0].innerHTML = data;
		$.ajax({
			type:	'post',
			url: 'addNews',
			data: $('#add-news').serialize(),
			success: function(data, status) {

				$('#modal-open')[0].className = 'hold-transition skin-blue sidebar-mini modal-open';
				$('#modal-news')[0].className = 'modal fade in';
				$("#modal-news").css({ 'display': "block"});
				$( "#modal-open" ).append( '<div class="modal-backdrop fade in"></div>');
			}
		});
	});
});
