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
        <h1>A skyscraper makes a great gift.</h1>

        <p>It&rsquo;s not easy to find a truly unique gift<br>
        that&rsquo;s sure to be appreciated.  To give a special someone, friend,<br>
        or client the best tour in Chicago, simply ask at our<br>
        ticket office, contact us, or purchase online.</p>

        <p>Our Chicago Line Gift Tickets are good for 3 years from<br>
        the date of issue, and your recipient can choose any type of cruise<br>
        when making a reservation.</p>

        <div id="ticket-purchase"><a href="<?php echo PURCHASE_URL ?>"><img alt="Purchase Tickets" width="47" height="57" src="/assets/images/icons/color-purchase.png"></a></div>

  		</article>


    </section>

  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <figcaption>Willis (formerly known as Sears) Tower</figcaption>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>