<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#f28530">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	
	<link href="./favicon.png" rel="shortcut icon">
	<title>About Us | CliqBit</title>
	<meta name="description" content="CliqBit | Get to know the founders of CliqBit!">
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
			<li><a href="./">Home</a></li>
			<li><a href="blazin">Blazin' Bits</a></li>
			<li><a id="nav-active" href="about">About Us</a></li>
			<li><a href="contact">Contact</a></li>
			<li><a href="https://twitter.com/CliqBit"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</nav>
	<div id="content">
		<h1 class="centered">Our Story</h1>
		<hr>
		<div class="indent" >
			<p>Did we just get bored during our first year at college? Definitely not. We admittedly stumbled upon this idea while procrastinating studying for finals, but we couldn't give it up.</p>
			<p>We've been sleep deprived ever since.</p>
			<hr>
			<p>In the winter of 2014, Hannah and Olivia stood at the bottom of a campus hill, doubled over in laughter they recounted the less than graceful moment that had just happened. On her way back from the dining hall, Hannah's feet came straight out from under her, her books flying out of her arms, and she proceeded to slip all the way down an icy hill. The fall was almost something out of a movie. To Hannah's surprise, the other witness was one of the only guys on their all-women’s campus — the handsome campus police officer. Of course. Surprise aside, they had one big regret: no one caught it on camera. And with status updates being outdated, there wasn't a place to share the moment with friends. This was the beginning of CliqBit.</p>
			<p>There wasn't an ideal platform for sharing the brief, and funny moments that make up our lives. There are more professional networking sites, which aren't ideal for showcasing our funny sides. There are massively popular social networks, but everyone, including Grandma has found her way onto your wall. And Grandma is best not knowing some things. There are anonymous networking apps, but let's be honest, it's way more funny when you know who it happened to. In the end, there wasn't a platform designed to allow you to be yourself in all your personal, funny, candid glory. Until now.</p>
			<p>CliqBit is the humorous social media platform.</p>
		</div>
	</div>
</body>
<link type="text/css" rel="stylesheet" href="assets/css/style.css">
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
	var amountScrolled = 300;

	$(window).scroll(function(){
		var scrollTop = $(window).scrollTop();
		
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
</script>
</html>