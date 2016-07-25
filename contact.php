<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#f28530">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	
	<link href="./favicon.png" rel="shortcut icon">
	<title>Contact | CliqBit</title>
	<meta name="description" content="CliqBit | Contact us for questions, comments, requests, or reports!">
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
			<li><a href="about">About Us</a></li>
			<li><a id="nav-active" href="contact">Contact</a></li>
			<li><a href="https://twitter.com/CliqBit"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</nav>
	<div id="content" class="centered">
		<h1>Coming Soon!</h1>
	</div>
</body>
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="assets/css/style.css">
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