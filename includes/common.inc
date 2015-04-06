<?php

	define("SITE_NAME", "Chicago Line Cruises");
	define("SEO_TITLE_SEPARATOR", " - ");
	define("PURCHASE_URL", "https://webstore2.centaman.net/CHICAGOLINE/");

	function thisPage($page) {
		//returns true if the current page matches the page passed in
		return strstr(strtolower($_SERVER["PHP_SELF"]), strtolower($page));
	}

	function activeClass($page) {
		//returns a CSS class if the current page matches the page passed in
		return thisPage($page) ? "active" : "";
	}

	function getThisPageExact() {
		//will return the current page name without slashes or the .php extension
		$page = $_SERVER["PHP_SELF"];
		$page = str_replace('.php', '', substr($page, strrpos($page, '/') + 1));
		return $page;
	}
