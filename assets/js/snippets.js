const $alertPlaceholder = $("#alertWrapper");
const addAlert = (message, type) => {
	const $wrapper = $("<div>");
	$wrapper.html(
		[
			`<div class="alert alert-${type} alert-dismissible" role="alert">`,
			`   <div>${message}</div>`,
			'       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
			"   </div>",
			"</div>",
		].join("")
	);

	$alertPlaceholder.html($wrapper);
};

/* AJAX addToCart */
function addToCart(targetUrl, formData) {
    $.ajax({
        type: "POST",
        async: true,
        url: targetUrl,
        data: formData,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function() {
            location.reload(true);
        },
        error: function() {
            addAlert('Failed to Add', 'danger');
        }
    });
}