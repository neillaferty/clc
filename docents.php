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
  		<img src="/assets/images/our-docents.jpg" class="full">
		<p>All of our cruises (except for the fireworks) are narrated by one of our ten docents. Each has served an average of 17 years as a Chicago Tour Guide Professional and twelve as a Chicago Line docent.  Their collective resume includes two PhDs, four master degrees, five BFA degrees, and tour experience with Chicago’s Art Institute and Chicago History Museum.  For 16 years Judith trained docents for the Chicago Architectural Foundation, and Bill, whose been with us for 20 years, is also a stand up comedian.</p>
		<p>"Without Question the best architectural tour available in Chicago; witty, informative,engaging."</p>
		<p>– The Chicago Sun Times</p>
		
  		<img src="/assets/images/concierge-winner.jpg">
		<br><br>
  		<img src="/assets/images/six-stars.jpg">
		<p>"Six of six stars, by far the most comprehensive and engaging tour of the bunch."
		<br>-Time Out Chicago</p>
      	</article>

		<ul class="mobile-icons clearfix">
			<li><a href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});"><img alt="Purchase Tickets" src="/assets/images/icons/mobile-purchase.png"></a></li>
			<li><a href="/directions.php"><img alt="Cruise Location" src="/assets/images/icons/mobile-location.png"></a></li>
			<li><a href="/contact.php"><img alt="Contact" src="/assets/images/icons/mobile-phone.png"></a></li>
		</ul>
    
    </section>

  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>