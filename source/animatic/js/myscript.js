$(window).load(function () {
	$('.flexslider').flexslider({
		animation: "slide"
	});
});
$(document).ready(function () {
	$('.item-hover').hover(function  () {
		$(this).find('a').find('.mask').addClass('show-info');
	},function () {
		$(this).find('a').find('.mask').removeClass('show-info');
	});
});