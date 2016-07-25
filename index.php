<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#f28530">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	
	<link href="./favicon.png" rel="shortcut icon">
	<title>Home | CliqBit</title>
	<meta name="description" content="CliqBit | The joke's on us. Drop the news and ditch the drama. We're the funny-focused social media app.">
</head>
<body>
	<a href="#" class="back-to-top"><i class="fa fa-chevron-up fa-3x" aria-hidden="true"></i></a>
	<header></header>
	<nav>
		<ul id="nav-pre">
			<li id="tagline">Share your not-so-serious side.</li>
			<li ><a id="download" href="https://itunes.apple.com/us/app/cliqbit/id1029040166?ls=1&mt=8">Download Now!</a></li>
		</ul>
		<ul id="nav">
			<li><a id="logo" href="./"><span>filler</span></a></li>
			<li><a id="nav-active" href="./">Home</a></li>
			<li><a href="blazin">Blazin' Bits</a></li>
			<li><a href="about">About Us</a></li>
			<li><a href="contact">Contact</a></li>
			<li><a href="https://twitter.com/CliqBit"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</nav>
	<div id="content">
		<h2 class="centered">The joke’s on us.</h2>
		<p class="indent">Literally — we’re the humorous social media platform for your not-so-serious side. Candid photos, stockpiled screenshots, funny videos, and clever comments are about to be taken to a whole new level. Get ready for some serious laughter!</p>
		<p class="indent">Share inside jokes and funny moments with all your friends or swipe over and post to a private cliq. Your posts can be permanent, or they can disappear right off the newsfeed. It’s all up to you!</p>
		<p class="indent">Join us for a quick laugh, and have the fun social media experience you can't get anywhere else! Edit photos, change their lifespan, and create memes all in one awesome app!</p>
		<hr>
		<img id="demo" src="assets/img/iphoneTemplateFunny.png" />
		<div id="rest">
			<img style="margin-top:-85vh" class="demoImg funny" src="assets/img/funny1.png" alt="You know you're a terrible cook when you set the ramen on fire..." />
			<img class="demoImg" src="assets/img/funny2.png" alt="This is how I check out the ladies without them seeing" />
			<img class="demoImg" src="assets/img/funny3.png" alt="Dad -'Drake...is that the little Asian guy?'" />
			<img class="demoImg" src="assets/img/funny4.png" alt="Boston subway spotting" />
			<img class="demoImg memes" src="assets/img/meme1.png" alt="When you walk in... on the wrong party" />
			<img class="demoImg" src="assets/img/meme2.png" alt="When she wants a fancier date" />
			<img class="demoImg" src="assets/img/meme3.png" alt="Easy breezy beautiful. Cover squirrel" />
			<img class="demoImg cliqs" src="assets/img/cliq1.png" alt="Hey ladies... hope you don't mind us regifting these for Valentine's day." />
			<img class="demoImg" src="assets/img/cliq2.png" alt="Hang at my house" />
			<img class="demoImg" src="assets/img/cliq3.png" alt="Ok, listen up. The game has changed. I'll expect presents & free drinks on May 11th too." />
			<img class="demoImg you" src="assets/img/you1.png" alt="Punk'd wit post its" />
			<img class="demoImg" src="assets/img/you2.png" alt="Just a little prank @ break time. Sorry (not sorry) Chris." />
			<img class="demoImg" src="assets/img/you3.png" alt="I donut recommend my spring break bod diet" />
			<img class="demoImg blazin" src="assets/img/blazin1.png" alt="Cleaning while drinking wine. Is this safe or dangerous?" />
			<img class="demoImg" src="assets/img/blazin2.png" alt="You go to Harvard...what do you mean you rarely meet pretty and smart girls? #ouch" />
			<img class="demoImg viewmore" src="assets/img/blazin3.png" alt="I've wanted this genius piece of work for years!" />
		</div>
		<div id="captions">
			<div id="funny">
				<h1>The Funny Feed</h1>
				<h3>For fast laughs</h3>
			</div>
			<div id="memes">
				<h1>Memes</h1>
				<h3>Turn your friends into memes</h3>
			</div>
			<div id="cliqs">
				<h1>Cliqs</h1>
				<h3>Inside jokes with different audiences</h3>
			</div>
			<div id="you">
				<h1>You</h1>
				<h3>Permanent or disappearing posts</h3>
			</div>
			<div id="blazin">
				<h1>Blazin' Bits</h1>
				<h3>Top public posts</h3>
				<h3><a href="features" id="viewmore" >View more features</a></h3>
			</div>
		</div>
	</div>
</body>
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="assets/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
	var navPosition = $('#nav').offset();
	var elementPosition = $('#demo').offset();
	var imgOffset = elementPosition.top - $('.funny').offset().top;
	var amountScrolled = 300;
	
	$(document).ready(function() {
		$('.demoImg').css('width',($('#demo').width() * 0.7));
		$('#funny').css('width',($('#demo').offset() + 20));
		$('#captions').css('top',$('.funny').offset().top);
	});

	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		
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
		
		if(scrollTop > elementPosition.top - 55){
			$('#rest').css('margin-top',$('#demo').height() + 15);
			$('#demo').css('position','fixed').css('top',$('.stick').height()).css('left','50%').css('margin-left',(-0.5 * $('#demo').width()));
		} else {
			$('#demo').css('position','relative');
			$('#rest').css('margin-top','0');
		}
		
		if (scrollTop > $('.funny').offset().top + imgOffset) {
			$('#funny').css('display','block');
			$('#captions').css('top',scrollTop - imgOffset);
		} else {
			$('#captions').css('top',$('.funny').offset().top);
		}
		
		if (scrollTop > $('.memes').offset().top + imgOffset) {
			$('#funny').css('display','none');
			$('#memes').css('display','block');
			$('#demo').attr('src','assets/img/iphoneTemplateMemes.png');
		} else {
			$('#memes').css('display','none');
			$('#demo').attr('src','assets/img/iphoneTemplateFunny.png');
		}
		
		if (scrollTop > $('.cliqs').offset().top + imgOffset) {
			$('#memes').css('display','none');
			$('#cliqs').css('display','block');
			$('#demo').attr('src','assets/img/iphoneTemplateCliqs.png');
		} else {
			$('#cliqs').css('display','none');
		}
		
		if (scrollTop > $('.you').offset().top + imgOffset) {
			$('#cliqs').css('display','none');
			$('#you').css('display','block');
			$('#demo').attr('src','assets/img/iphoneTemplateYou.png');
		} else {
			$('#you').css('display','none');
		}
		
		if (scrollTop > $('.blazin').offset().top + imgOffset) {
			$('#you').css('display','none');
			$('#blazin').css('display','block');
			$('#demo').attr('src','assets/img/iphoneTemplateBlazin.png');
		} else {
			$('#blazin').css('display','none');
		}
	});
	
	$('a.back-to-top').click(function() {
		$('html, body').animate({
			scrollTop: 0
		}, 700);
		return false;
	});
</script>
</html>