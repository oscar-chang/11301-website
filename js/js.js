// JavaScript Document
$(document).ready(function (e) {
	$.urlParam = function (name) {
		var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
		if (results == null) {
			return null;
		}
		return decodeURI(results[1]) || 0;
	}

	var url_do = $.urlParam('do');
	// console.log(url_do);
	// $('.mainmu').removeClass('hover-active');
	$('.' + url_do).addClass('hover-active');
	$('.' + url_do).children().addClass('display-none');

	$(".menu-etitle").on('click', function (event) {
		alert('該欄位不可變更');
	});

	$(".mainmu").mouseover(
		function () {
			$(this).children().addClass('display-none');
			// $(this).addClass('display-none');
			// $('.en_title').css('display', 'none');
			// $('.en_title').hide();
			// $(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function () {
			// console.log('mouseout');
			if ($(this).hasClass(url_do) == false) {
				// console.log('N');
				// $('.en_title').removeClass('display-none');
				// $('.en_title').addClass('display-inline');
				$(this).children().removeClass('display-none');
				// $(this).children().addClass('display-inline');
			}

			// $('.en_title').css('display', 'inline-block');
			// $('.en_title').show();
			// $(this).children(".mw").hide()
		}
	)
});
function lo(x) {
	location.replace(x)
}
function op(x, y, url) {
	$(x).fadeIn()

	if (y)
		$(y).fadeIn()

	if (y && url)
		$(y).load(url)
}
function cl(x) {
	$(x).fadeOut();
}