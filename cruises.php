<?php include($DOCUMENT_ROOT.'includes/common.inc'); ?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  
  <?php include($DOCUMENT_ROOT.'includes/head.inc'); ?>

 </head>
 <?php include($DOCUMENT_ROOT.'includes/body-tag.inc'); ?>
  
  <div id="container">

    <?php include($DOCUMENT_ROOT.'includes/header.inc'); ?>

  	<section class="content">
  		
  		<article>
    	 	<div class="float-right"><img id="starbucks" alt="Starbucks" width="97" height="144" src="/assets/images/starbucks-cup.jpg"></div>

  			<p>Passage to any of our five cruises below include complimentary Starbucks Coffee, Coca-Cola soft drinks, lemonade, and muffins or cookies.</p>

			<img src="/assets/images/mobile-background-90minute.jpg" class="full">
			<p>Throughout our signature 90 minute architectural cruise our expert docent presents more than 50 skyscrapers, bascule bridges, and historic sites.  Passage is $42 / adult, $35 / ages 65+, $20 / ages 7-18, plus tax.  Children board free.  This cruise departs daily at 10 am, noon, 2 pm, and 4 pm from March 27th thru December 5th.</p>
				<ul class="mobile-icons">
				<li><a href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});"><img alt="Purchase Tickets" src="/assets/images/icons/mobile-purchase.png"></a></li>
				<li><a href="/directions.php"><img alt="Cruise Location" src="/assets/images/icons/mobile-location.png"></a></li>
				<li><a href="/contact.php"><img alt="Contact" src="/assets/images/icons/mobile-phone.png"></a></li>
				</ul>
			<img src="/assets/images/mobile-background-60minute.jpg" class="full">
			<p>Sail with us down the Chicago River’s main and south branches as our professional docent presents more than 35 skyscrapers, bascule bridges, and historic sites.  Passage is $36 / adult, $30 / ages 65+, $17 / ages 7-18, plus tax. Children ride free. Our one-hour architectural cruise departs daily at 11 am and 1 pm from May 2nd thru October 4th.</p>
				<ul class="mobile-icons">
				<li><a href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});"><img alt="Purchase Tickets" src="/assets/images/icons/mobile-purchase.png"></a></li>
				<li><a href="/directions.php"><img alt="Cruise Location" src="/assets/images/icons/mobile-location.png"></a></li>
				<li><a href="/contact.php"><img alt="Contact" src="/assets/images/icons/mobile-phone.png"></a></li>
				</ul>
			<img src="/assets/images/mobile-background-chm.jpg" class="full">
			<p>Chicago's oldest museum presents our newest river cruise:  For 90 minutes both history and design buffs alike will enjoy many “I did not know that” moments as our docent shares Chicago’s history, including its 6-year transformation from a city without a recognizable landmark to center of world architecture. Passage is $42 / adult, $35 / ages 65+, $20 / ages 7-18, plus tax.  Children ride free.  This afternoon history river cruise departs at 3 pm Friday thru Sunday from May 22nd thru August 30th.</p>
				<ul class="mobile-icons">
				<li><a href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});"><img alt="Purchase Tickets" src="/assets/images/icons/mobile-purchase.png"></a></li>
				<li><a href="/directions.php"><img alt="Cruise Location" src="/assets/images/icons/mobile-location.png"></a></li>
				<li><a href="/contact.php"><img alt="Contact" src="/assets/images/icons/mobile-phone.png"></a></li>
				</ul>
			<img src="/assets/images/mobile-background-cocktail.jpg" class="full">
			<p>Sip your favorite cocktail as we sail down the river that runs backwards, then out on the Lake for a skyline view. At a more relaxed pace than our daytime architectural river cruises, our docent will describe Chicago’s famous towering structures as they are majestically lit by the hues of early evening.  You can choose a pre-pay package that includes unlimited premium wine, beer, and mixed drinks for $20.  Passage is $42 / adult, $35 / ages 65+, $20 / ages 7-18, plus tax.  Children ride free.</p>
			<p>Our 90 minute cocktail architectural cruises depart Monday thru Sunday at 6 pm and 8 pm from May 22nd thru August 30th.  Our 6 pm cruise departs Friday and Saturday from August 31st thru October 4th. </p>
				<ul class="mobile-icons">
				<li><a href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});"><img alt="Purchase Tickets" src="/assets/images/icons/mobile-purchase.png"></a></li>
				<li><a href="/directions.php"><img alt="Cruise Location" src="/assets/images/icons/mobile-location.png"></a></li>
				<li><a href="/contact.php"><img alt="Contact" src="/assets/images/icons/mobile-phone.png"></a></li>
				</ul>
			<img src="/assets/images/mobile-background-fireworks.jpg" class="full">
			<p>Enjoy your favorite drink while gazing at Navy Pier’s fabulous light show. Our optional pre-pay package includes unlimited premium wine, beer, and mixed drinks for $20. Passage is $42 / adult, $35 / ages 65+, $20 / ages 7-18, plus tax. Children ride free. Our 90 minute fireworks cruise departs every Saturday at 9:30 pm from May 22nd thru August 30th.</p>
				<ul class="mobile-icons clearfix">
				<li><a href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});"><img alt="Purchase Tickets" src="/assets/images/icons/mobile-purchase.png"></a></li>
				<li><a href="/directions.php"><img alt="Cruise Location" src="/assets/images/icons/mobile-location.png"></a></li>
				<li><a href="/contact.php"><img alt="Contact" src="/assets/images/icons/mobile-phone.png"></a></li>
				</ul>
				
  		</article>

    </section>

  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <figcaption>All routes are subject to weather, bridge and lock operations.</figcaption>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>