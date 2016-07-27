var navPosition = $('#nav').offset();
var amountScrolled = 300;

$(window).scroll(function(){
	var scrollTop = $(window).scrollTop();
	var stickHeight = $('.stick').height() == null ? 0 : $('.stick').height();
	
	if (scrollTop > navPosition.top && $(window).width() > 765) {
		$('#content').css('margin-top',$('#nav').height() + 15);
		$('#nav').addClass('stick');
	} else {
		$('#nav').removeClass('stick');
		$('#content').css('margin-top','0');
	}
	
	if (scrollTop > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});
	
$('a.back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});