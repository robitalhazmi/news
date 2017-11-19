$(document).ready(function() {

	$('#login-form').on('submit', function (e) {
		e.preventDefault();
		var $form = $(this),
				data = $form.serialize(),
				url = 'login';
		var posting = $.post(url, data);
		posting.done(function (data) {
			if (data.success == true) {
				location.href = data.url;
			}
			else {
				$('#status')[0].className = 'contact_msg';
				$('#status')[0].innerHTML = data.message;
			}
		})
	});

	$('#add-category').on('submit', function (e) {

		e.preventDefault();
		$.ajax({
			type: 'post',
			url: 'addCategory',
			data: $('#add-category').serialize(),
			success: function (data, status) {
				if (data.success === true) {
					$('#modal-open')[0].className = 'hold-transition skin-blue sidebar-mini modal-open';
					$('#modal-success')[0].className = 'modal fade in';
					$("#modal-success").css({ 'display': "block"});
					$( "#modal-open" ).append( '<div class="modal-backdrop fade in"></div>');
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

	$('.row-data').click(function() {

		$('#modal-foto').click();

		var rowData = $(this).attr('value');
		var title = $($('.row-title')[rowData]).attr('value');
		var rowID = $($('.row-id')[rowData]).attr('value');
		$('#title-news')[0].innerHTML = title;
		$('#id-image').val(rowID);
  });

	$('#upload-image').click(function () {
		$('#submit-image').click();
	});

	var newsId;

	$('.row-news').click(function() {

		$('#button-news').click();

		var rowData = $(this).attr('value');
		var title = $($('.row-title')[rowData]).attr('value');
		$('#title-news')[0].innerHTML = title;

		newsId = $($('.row-id')[rowData]).attr('value');
  });

	$('#submit-banner').click(function () {
		var dataBanner = { id : newsId }
		$.ajax({
			type		: 'post',
			url			: 'addBanner',
			data		: dataBanner,
			success	: function (data, status) {
				$('#button-close').click();
				$('#modal-open')[0].className = 'hold-transition skin-blue sidebar-mini modal-open';
				$('#modal-success')[0].className = 'modal fade in';
				$("#modal-success").css({ 'display': "block"});
				$( "#modal-open" ).append( '<div class="modal-backdrop fade in"></div>');
			}
		});
	});

	$('#submit-breaking').click(function () {
		var dataBreaking = { id : newsId }
		$.ajax({
			type		: 'post',
			url			: 'addBreaking',
			data		: dataBreaking,
			success	: function (data, status) {
				$('#button-close').click();
				$('#modal-open')[0].className = 'hold-transition skin-blue sidebar-mini modal-open';
				$('#modal-success')[0].className = 'modal fade in';
				$("#modal-success").css({ 'display': "block"});
				$( "#modal-open" ).append( '<div class="modal-backdrop fade in"></div>');
			}
		});
	});
});
