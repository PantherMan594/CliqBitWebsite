var navPosition = $('#nav').offset();
var amountScrolled = 300;
var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;

$(document).ready(function() {
	if (iOS && document.cookie != 'bypassIOS=true') {
		$('body').append('<div id="blockIOS"><img style="margin-top: 30px;" src="assets/img/logo_large.png" /><h1 class="centered">Hey, looks like you\'re on an iOS device, download the app for the full experience!</h1><a href="https://itunes.apple.com/us/app/cliqbit/id1029040166?ls=1&mt=8"><img src="assets/img/downloadIOS.png" /></a><a id="toSite" href="#" style="text-align: center; margin-top: 50px;">Just take me to the site.</a></div>');
		$('body').css('overflow','hidden');
		var toSite = document.getElementById('toSite');
		toSite.onclick = function() {
			document.cookie = 'bypassIOS=true';
			$('#blockIOS').remove();
			$('body').css('overflow','auto');
			return false;
		}
	}
});

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

$('a[href*="#"]:not([href="#"])').click(function() {
if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
  var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
  if (target.length) {
	$('html, body').animate({
	  scrollTop: target.offset().top
	}, 1000);
	return false;
  }
}
});