$(document).ready(function() {
	$(".opac").hover(
		function(){
			$(".info", this).css("display", "block");
		}, function(){
			$(".info", this).css("display", "none");
		});
});
