
$(document).ready(function() {
	$("#mov-menu").click(function() {
		$("#nav-menu").slideToggle(500);
	});

	// $('.menu-item-has-children').click(function() {
	// 	$(".sub-menu > li").slideToggle(500);
	// });

	$(window).scroll(function(){
		if( $(this).scrollTop() > 25 ){
			$("#page-logo").slideUp(500);
		} else {
			$("#page-logo").slideDown(500);
		}
	});
});