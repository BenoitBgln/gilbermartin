$('#header__icon').click((e)=>{
    $('body').toggleClass('with--sidebar');
	$('#header__icon').toggleClass('header_icon');
	$('#cache').toggleClass('cache');
});

$('.header_icon').click((e)=>{
    $('body').removeClass('with--sidebar');
	$('.header_icon').removeClass('header_icon');
	$('#cache').removeClass('cache');
})

$('#cache').click((e)=>{
    $('body').removeClass('with--sidebar');
	$('.header_icon').removeClass('header_icon');
	$('#cache').removeClass('cache');
})

$('.actionOnHeaderIcon').click((e)=>{
	$("#header__icon").toggleClass("change")
})

$('.share_facebook').click((e)=>{
	e.preventDefault()
	var shareUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent("http://gilbertmartin-peintre.fr/")
	window.open(shareUrl,"_blank")
})

$(document).ready(() => {
    $('img[alt="www.000webhost.com"]').parent().parent().remove();
})
