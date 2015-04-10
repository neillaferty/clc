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
	  <img id="starbucks" alt="Starbucks" width="97" height="144" src="/assets/images/starbucks-cup.jpg">
  	  
  	  <article>

      <h2>How much will my ticket cost?</h2>
      <p>All 90-minute cruises are $42 per adult, $35 per senior age 65+,<br>
      $20 per youth ages 7-18.  Our 60-minute river cruise <br>
      is $36 per adult, $30 per senior age 65+, <br>
      $17 per youth ages 7-18.  Prices do not include City and State tax.<br>
      Children 6 and under are provided free passage.</p>

      <h2>If I purchase tickets online, will a "service fee" be tacked on?</h2>
      <p>No, you will only be charged our stated ticket price plus tax.</p>

      <h2>Do I need to purchase tickets in advance?</h2>
      <p>Because many of our cruises become sold out, we highly recommend you <br>
      purchase tickets in advance, either online or by calling 312-527-1977.</p>

      <h2>Do I need to print the tickets I purchased online?</h2>
      <p>No. Please check-in 30 minutes prior to departure and provide your last <br>
      name and booking number (from the confirmation email we sent you).</p>

      <h2>Are tickets refundable?</h2>
      <p>No, however tickets may be exchanged for other dates and times.</p>

      <h2>Are you located at Navy Pier?</h2>
      <p>No, we are located just north of the Centennial Fountain at 465 McClurg Ct. <br>
      (on a hidden branch of the Chicago River called the "Ogden Slip").
       
      <h2>Are the boats handicapped accessible?</h2>
      <p>Our boats and crew will gladly accommodate handicapped passengers.</p>

      <h2>Are your boats covered?</h2>
      <p>All our vessels include both sun decks and covered areas.</p>

      <h2>Are food and drinks available onboard?</h2>
      Starbucks Coffee, Coca-Cola soft drinks, lemonade, muffins and cookies<br>
      <p>are all complimentary.  Cocktails, beer and wine are available.</p>

		<ul class="mobile-icons clearfix">
			<li><a href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});"><img alt="Purchase Tickets" src="/assets/images/icons/mobile-purchase.png"></a></li>
			<li><a href="/directions.php"><img alt="Cruise Location" src="/assets/images/icons/mobile-location.png"></a></li>
			<li><a href="/contact.php"><img alt="Contact" src="/assets/images/icons/mobile-phone.png"></a></li>
		</ul>

  		</article>


    </section>

  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <figcaption>AMA Plaza (formerly the IBM Building)</figcaption>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>