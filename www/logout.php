<?php
	/* 
		basic authentication has no default way to logout
		so instead we set a cookie to signal that the user is logged out
		the login checks this cookie and denies the cached user/password
		which triggers the browsers to remove it from the cache and ask
		for a new username and password
	*/
	header("HTTP/1.1 401 Logout done.");
	header("Location: /");
	setcookie('simply-logout','1',PHP_INT_MAX,'/');
	