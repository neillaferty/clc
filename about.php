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
			<div class="about-boats">
				<img src="/assets/images/background-charters.jpg" alt="Charters" class="full">
			</div>
			<div class="about-content">
				<h1>Chicago&rsquo;s very first architectural river cruise:</h1>

				<p>In 1981, two lawyers – Terry Johnson and Paul McCarthy –
				purchased the <em>Betty Jean</em> and began a private charter business
				called &ldquo;Chicago From the Lake.&rdquo;</p>

				<p>At a time when &ldquo;boat rides&rdquo; and charters loaded their
				passengers and beelined for the Lake to view Chicago&rsquo;s magnificent 
				skyline, a friend and client, the late James Bidwill (of the
				Merchandise Mart and later Chairman of the Chicago Convention
				and Tourism Bureau) suggested a river cruise complete with
				a docent — and thus a new industry was born.</p>

				<p>&ldquo;CFL&rdquo; moved to North Pier on the &ldquo;Ogden Slip&rdquo;, added
				the <em>Ft.&nbsp;Dearborn, Marquette,</em> and <em>Innisfree</em> to its fleet and became
				Chicago Line Cruises.  More than 3 million visitors have since
				enjoyed our narrated tour through the city of broad shoulders
				and vertical dreams, and we hope you will too.</p>
			</div>
			
			<div class="about-boats">
				<h2>Our boats:<br> Not too big, not too small, never too crowded.</h2>
				<p>Our boats are handicapped accessible and fully-appointed with professional stereo and PA system, full-service bar, and optional canopy.</p>
				<p><em>Ft. Dearborn</em> (upper and lower decks):</p>
				<img src="/assets/images/mobile-boats-dearborn.jpg">
				<p><em>Innisfree</em> (left) and the <em>Marquette</em> (note that while the Marquette’s deck is handicapped accessible, its bathrooms are not):</p>
				<img src="/assets/images/mobile-boats-innisfree-marquette.jpg">
			</div>
 
			<div class="desktop-icons">
				<?php include($DOCUMENT_ROOT.'includes/icons-color.inc'); ?>
			</div>
  		</article>

		<ul class="mobile-icons clearfix">
			<li><a href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});"><img alt="Purchase Tickets" src="/assets/images/icons/mobile-purchase.png"></a></li>
			<li><a href="/directions.php"><img alt="Cruise Location" src="/assets/images/icons/mobile-location.png"></a></li>
			<li><a href="/contact.php"><img alt="Contact" src="/assets/images/icons/mobile-phone.png"></a></li>
		</ul>

    </section>

  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <figcaption>NBC Tower</figcaption>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>