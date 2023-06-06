function js_notification(type,msg){
	if(type == 'error'){
		toastr.error(msg, "", {
				showMethod: "slideDown",
				hideMethod: "slideUp",
				progressBar: !0,
				timeOut: 2e3
		});
	} else if(type == 'success'){
		toastr.success(msg, "", {
				showMethod: "slideDown",
				hideMethod: "slideUp",
				progressBar: !0,
				timeOut: 2e3
		});
	}
	
}

$(document).on('keypress','.js-number',function(evt){
	var charCode = (evt.which) ? evt.which : event.keyCode
	 if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;

	 return true;
});