<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	
	<link href="favicon.png" rel="shortcut icon">
	<title>About Us - CliqBit</title>
	<meta name="description" content="CliqBit | Our app comes packed with features, ranging from disappearing posts to memes to a built-in editor!">
	
	<script type="text/javascript" src="assets/js/jquery-3.0.0.min.js"></script>
	
	<link type="text/css" rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header></header>
	<nav>
		<ul id="nav-pre">
			<li id="tagline">Share your not-so-serious side.</li>
			<li ><a id="download" href="https://itunes.apple.com/us/app/cliqbit/id1029040166?ls=1&mt=8">Download Now!</a></li>
		</ul>
		<ul id="nav">
			<li><a id="logo" href="./"><span>filler</span></a></li>
			<li><a href="./">Home</a></li>
			<li><a href="about">About Us</a></li>
			<li><a href="contact">Contact</a></li>
			<li><a href="https://twitter.com/CliqBit"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li class="loginbox" ><a href="signup">Sign Up</a></li>
			<li class="loginbox" ><a href="login">Log In</a></li>
		</ul>
	</nav>
	<div id="content">
		<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
			<fieldset>
				<legend>Login</legend>
				<input type='hidden' name='submitted' id='submitted' value='1'/>
				 
				<label for='username' >Username:</label>
				<input type='text' name='username' id='username' maxlength="50" />
				 
				<label for='password' >Password:</label>
				<input type='password' name='password' id='password' maxlength="50" />
				 
				<input type='submit' name='Submit' value='Submit' />
			</fieldset>
		</form>
	</div>
</body>
</html>