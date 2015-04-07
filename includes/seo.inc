<?php

	// page titles
	$seo_title = array();
	$seo_title['index'] = "Chicago Architecture River Cruises" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['60-minute-cruise'] = "60 Minute Architecture River Cruise" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['90-minute-cruise'] = "90 Minute Architecture River Cruise" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['architectural-cruise-detail'] = "Learn More About Our 90 and 60 Minute Architecture River Cruises" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['cocktail-cruise'] = "Cocktail Architectural Cruise" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['history-cruise'] = "Chicago History Museum River Cruise" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['fireworks-cruise'] = "Fireworks River and Lake Cruise" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['accolades'] = "Accolades" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['directions'] = "Directions" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['schedules'] = "Cruise Schedules" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['cruise-routes'] = "Cruise Routes" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['faq'] = "Frequently Asked Questions" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['boats'] = "Our Boats" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['charters'] = "Charters" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['groups'] = "Group Discount Rates" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['about'] = "About Us" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['gifts'] = "Gifts" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['contact'] = "Contact Us" . SEO_TITLE_SEPARATOR . SITE_NAME;
	$seo_title['history-cruise-detail'] = "Learn More About Our Chicago History Museum River Cruise" . SEO_TITLE_SEPARATOR . SITE_NAME;

	//meta descriptions
	$seo_description = array();
	$seo_description['index'] = "Praised &ldquo;Best architecture tour available&rdquo; by the Chicago Sun-Times and &ldquo;Most engaging tour of the bunch&rdquo; by Time Out Chicago, this river cruise has provided more than three million Chicagoans and visitors both stunning views and a deeper appreciation for architectural design";
	$seo_description['60-minute-cruise'] = "During this one-hour architecture river cruise our expert docent will present more than 35 skyscrapers, bascule bridges, and historic sites.";
	$seo_description['90-minute-cruise'] = "Throughout our signature 90 minute architecture cruise our professional docent will present more than 50 skyscrapers, bascule bridges, and historic sites.";
	$seo_description['history-cruise'] = "Chicago's oldest museum presents our newest river cruise: For 90 minutes both history and design buffs alike will enjoy many 'I did not know that' moments as our docent shares Chicago’s story, including its 6-year transformation from a city without a recognizable landmark to center of world architecture.";
	$seo_description['cocktail-cruise'] = "Sip your favorite cocktail as we sail down the river that runs backwards, then on the Lake for a skyline view. At a more relaxed pace than our day time architectural cruises, our docent will describe Chicago's famous towering structures as they are majestically lit by the hues of early evening.";
	$seo_description['fireworks-cruise'] = "Enjoy your favorite drink while gazing at Navy Pier's fabulous light show.";
	$seo_description['architectural-cruise-detail'] = "Critics say if you only have two hours in Chicago, this is how to spend it. The Chicago Sun-Times called it, &ldquo;without question the best architectural tour available in Chicago.&rdquo";
	$seo_description['history-cruise-detail'] = "The very same docents responsible for Chicago Line's signature architectural tour present our newest river cruise in partnership with the Chicago History Museum.";
	$seo_description['accolades'] = "Funny, engaging and incredibly well informed tour guide. Good size boat (not too big or small) and complimentary Starbucks Coffee, tea, soft drinks and cookies! What’s not to love about this boat tour?!";
	$seo_description['directions'] = "Our boats and ticket office are located just north of the Fountain at 465 McClurg Court on a hidden branch of the Chicago River called the &ldquo;Ogden Slip.&rdquo;";
	$seo_description['schedules'] = "Our 2015 cruises sail from March 27th to October 4th. Full schedule below.";
	$seo_description['cruise-routes'] = "Our cruises sail both on the Chicago River and Lake Michigan.";
	$seo_description['groups'] = "Group discount rates are available for parties of 20 or more aboard any of our narrated river cruises.";
	$seo_description['faq'] = "Frequently Asked Questions about our cruises.";
	$seo_description['boats'] = "Each boat is handicapped accessible and fully-appointed. Decks are arranged with ample seating for architectural cruises and configured for cocktail, dining, and dancing areas for charters.";
	$seo_description['charters'] = "For an event they'll remember, choose your vessel, bar package, caterer and more. We also offer plenty of parking, and your guests will board from the most aesthetic and private dockside on the River.";
	$seo_description['about'] = "In 1981, two lawyers – Terry Johnson and Paul McCarthy – purchased the Betty Jean and began a private charter business called &ldquo;Chicago From the Lake.&rdquo;";
	$seo_description['gifts'] = "Our Chicago Line Gift Tickets are good for 3 years from the date of issue, and your recipient can choose any type of cruise when making a reservation.";
	$seo_description['contact'] = "Our boats and ticket office are located just north of the Centennial Fountain at 465 McClurg Court. Call us at 312-527-1977, email contactus@chicagoline.com";
	
	function outputMetaDescription($page, $description) {
		$meta_description = $description[$page];
		if (!$meta_description) {
			$meta_description = $description['index'];
		}
		echo "<meta name=\"description\" content=\"" . $meta_description . "\">";
	}

	function outputTitleTag($page, $title) {
		$title_tag = $title[$page];
		if (!$title_tag) {
			$title_tag = $title['index'];
		}
		echo "<title>" . $title_tag . "</title>";
	}

