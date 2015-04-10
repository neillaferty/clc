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
			<div class="heading-style">
				<h1>If the Centennial Fountain was pointed in the opposite direction, we&rsquo;d get soaked.</h1>
				<p>Our boats and ticket office are located just north of the Fountain at <strong>465 McClurg Court</strong> on a hidden branch of the Chicago River called the &ldquo;Ogden Slip.&rdquo; <span class="map-directions">Click here for <a href="/downloads/Directions to 465 McClurg Court.pdf" target="_blank">map and directions</a>.</span></p>
			</div>
  		</article>
    </section>
	<div class="mobile-map">
		<img src="/assets/images/mobile-map.jpg" class="full">
	</div>
	
	<ul class="mobile-icons clearfix">
		<li><a href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});"><img alt="Purchase Tickets" src="/assets/images/icons/mobile-purchase.png"></a></li>
		<li><a href="/directions.php"><img alt="Cruise Location" src="/assets/images/icons/mobile-location.png"></a></li>
		<li><a href="/contact.php"><img alt="Contact" src="/assets/images/icons/mobile-phone.png"></a></li>
	</ul>
			
  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <figcaption>Centennial Fountain</figcaption>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>