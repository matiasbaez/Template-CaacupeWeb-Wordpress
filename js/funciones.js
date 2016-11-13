
$(document).ready(function() {
	$("#mov-menu").click(function() {
		$("#nav-menu").toggle(500);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 40 ){
			$("#page-logo").slideUp(500);
		} else {
			$("#page-logo").slideDown(500);
		}
	});
});