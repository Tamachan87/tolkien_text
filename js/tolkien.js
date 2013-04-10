$(document).ready(function() {

	$('form.ajax').on('submit', function() {
		var url = $(this).attr('action'),
				type = $(this).attr('method'),
				data = {};

	$(this).find('[number_of_paragraphs]').each(function(index, value) {
		var number = $(this).attr('number_of_paragaphs'),
				value = $(this).val();

		data[number] = value;
	});

	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response) {
			$('.text').append(response);
		}
	});

	return false;

	});
});
