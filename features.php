<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#f28530">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	
	<link href="./favicon.png" rel="shortcut icon">
	<title>Features | CliqBit</title>
	<meta name="description" content="CliqBit | Our app comes packed with features, ranging from disappearing posts to memes to a built-in editor!">
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
			<li><a href="contact">Contact</a></li>
			<li><a href="https://twitter.com/CliqBit"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</nav>
	<div id="content" class="centered">
		<h1>Features</h1>
		<hr>
		<h2 id="laugh">We Make You laugh</h2>
		<p>No description needed. But we'll give you one anyway. We're the funny-focused social media app. Follow your friends, share your funny moments, and get ready to roar.</p>
		<img src="assets/img/laugh.png" alt="Laughing CliqBit face" />
		<hr>
		<h2 id="disappearing-posts">Disappearing Posts</h2>
		<p>Don’t want something sticking around forever? We’ve got you—have it disappear after 5 seconds or 48 hours. Or make it a permanent post if you're brave.</p>
		<img src="assets/img/disappearing.png" alt="Example of what a disappearing post would look like" />
		<hr>
		<h2 id="memes-stopmotion-more">Memes, Stop-Motion, and more</h2>
		<p>Humor comes in many forms. Videos, photos, text posts—it’s all here. Mess around with memes, screenshots, and stop-motion videos to really get everyone roaring.</p>
		<img src="assets/img/memes.png" alt="An example meme you can create with our app" />
		<hr>
		<h2 id="cliqs">Cliqs</h2>
		<p>We all have inside jokes. Don't want something going on your main newsfeed? Swipe left to share within a cliq! Invite your friends to these private feeds that have the same taste (or lack thereof) and have a blast!</p>
		<img src="assets/img/cliqs.png" alt="What a cliq page looks like" />
		<hr>
		<h2 id="blazin-bits">Blazin' Bits</h2>
		<p>Wanna know what’s burning up on CliqBit? Click the fire icon! The hottest posts are here on a separate feed.</p>
		<img src="assets/img/blazin.png" alt="Blazin' Bits icon" />
		<hr>
		<h2 id="secret-cheers">Secret Cheers Count</h2>
		<p>Cheers are our version of likes--without all the competition. Only you can see who’s cheered your posts. Less data, less drama.</p>
		<img src="assets/img/cheers.png" alt="CliqBit cheers button" />
		<hr>
		<h2 id="profile">Profile</h2>
		<p>A collection of your non-dissapearing posts. Keep some stuff around. But, don't worry — you can always go back and delete them.</p>
		<img src="assets/img/profile.png" alt="Example profile page" />
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