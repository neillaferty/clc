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
  		
      <a href="/"><img id="logo" alt="Chicago Line Cruises Home Page" width="100" height="99" src="/assets/images/home-logo.png"></a>

  		<article>

        <h1>Our <strong>2015</strong> Cruise Schedules</h1>

        <a href="/90-minute-cruise.php"><img class="cruise-icon" alt="90 minute cruise button" width="41" height="41" src="/assets/images/icons/cruise-90.png"></a>
        <h2>90 Minute Architectural River Cruise:</h2>
        <p>Sails daily from March 27th thru December 5th:&nbsp;&nbsp;<strong>10a, noon, 2p, 4p</strong></p>

        <a href="/60-minute-cruise.php"><img class="cruise-icon" alt="60 minute cruise button" width="41" height="41" src="/assets/images/icons/cruise-60.png"></a>
        <h2>60 Minute Architectural River Cruise:</h2>
        <p>Sails daily from May 2nd thru October 4th:&nbsp;&nbsp;<strong>11a, 1p</strong></p>

        <a href="/history-cruise.php"><img class="cruise-icon" alt="history cruise button" width="41" height="41" src="/assets/images/icons/cruise-history.png"></a>
        <h2>90 Minute Chicago History Museum River Cruise:</h2>
        <p>Sails Friday thru Sunday from May 22th thru August 30th:&nbsp;&nbsp;<strong>3p</strong></p>

        <a href="/cocktail-cruise.php"><img class="cruise-icon" alt="cocktail cruise button" width="41" height="41" src="/assets/images/icons/cruise-cocktail.png"></a>
        <h2>90 Minute Cocktail Architectural River and Lake Cruise:</h2>
        <p>Sails Monday thru Saturday from May 22nd thru August 30th:&nbsp;&nbsp;<strong>6p, 8p</strong><br>
        Sails Friday and Saturday from August 31st thru October 4th:&nbsp;&nbsp;<strong>6p</strong></p>

        <a href="/fireworks-cruise.php"><img class="cruise-icon" alt="fireworks cruise button" width="41" height="41" src="/assets/images/icons/cruise-fireworks.png"></a>
        <h2>90 Minute Fireworks Cruise:</h2>
        <p>Sails Saturdays from May 22nd thru August 30th:&nbsp;&nbsp;<strong>9:30p</strong></p>

        <div class="schedule-purchase">
        	<a href="<?php echo PURCHASE_URL; ?>"><img class="cruise-icon" alt="Purchase Tickets" width="47" height="57" src="/assets/images/icons/color-purchase.png" alt="Purchase Tickets"></a>
        </div>

		<ul class="mobile-icons clearfix">
			<li><a href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});"><img alt="Purchase Tickets" src="/assets/images/icons/mobile-purchase.png"></a></li>
			<li><a href="/directions.php"><img alt="Cruise Location" src="/assets/images/icons/mobile-location.png"></a></li>
			<li><a href="/contact.php"><img alt="Contact" src="/assets/images/icons/mobile-phone.png"></a></li>
		</ul>
				
  		</article>


    </section>

  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <figcaption>Crain Communication Building, &ldquo;Pru Two&rdquo; and Aon Center</figcaption>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>