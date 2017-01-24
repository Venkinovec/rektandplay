$(document).ready(function() {
	$(".na li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
})
