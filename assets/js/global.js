var navPosition = $('#nav').offset();
var amountScrolled = 300;

$(window).scroll(function(){
	var scrollTop = $(window).scrollTop();
	var stickHeight = $('.stick').height() == null ? 0 : $('.stick').height();
	
	if (scrollTop > navPosition.top + 25 && $(window).width() > 765) {
		if (!$('#nav').hasClass('stick')) {
			$('#content').css('margin-top',$('#nav').height() + 15);
			$('#nav').addClass('stick');
			$('#nav li').animate({'min-width': '16%'}, 'fast');
		}
	} else {
		if ($('#nav').hasClass('stick')) {
			$('#nav').removeClass('stick');
			$('#content').css('margin-top','0');
			$('#nav li').animate({'min-width': '0%'}, 'fast');
		}
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