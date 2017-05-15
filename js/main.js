function ajaxController(params) {

	var data = new FormData();

	for(var key in params) {
		data.append(key, params[key]);
	}

	$.ajax({
		url: "controller/listenerController.php",
		type: "POST",
		data: data,
		contentType: false,
		processData: false,
		success: params.callback
	});
}
