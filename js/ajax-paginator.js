$(document).ready(function(){
	$("#results").load("fetch_pages.php", {'page':0}, function() {$("1-page").addClass('active');});
	$(".paginate_click").click(function (e) {
		$("#results").prepend('div class="loading-indication"><img src="ajax-loader.gif" />Loading...</div>');

		var clicked_id = $(this).attr("id").split("-");
		var page_num = parseInt(clicked_id[0]);

		$('.paginate_click').removeClass('active');

		$("#results").load("fetch_pages.php", {'page': (page_num-1)}, function(){
		});
		$(this).addClass('active');
		return false;
	}); 
});
