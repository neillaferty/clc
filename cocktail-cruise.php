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
  			<p>Sip your favorite cocktail as we sail down the river that runs backwards, then on the Lake for a skyline view.<br>
        At a more relaxed pace than our day time architectural cruises, our docent will describe Chicago’s famous towering<br>
        structures as they are majestically lit by the hues of early evening.  Choose a pre-pay package that includes<br>
        unlimited premium wines, beer, and mixed drinks for $20.  Passage is $42 / adult,<br>
        $35 / ages 65+, $20 / ages 7-18, plus tax.</p>

        <ul class="nav">
          <li><a href="/schedules.php"><img alt="Cocktail Cruise Schedule" width="47" height="57" src="/assets/images/icons/cocktail-schedule.png"></a></li>
          <li><a href="https://goo.gl/maps/4UVkK" target="_blank"><img alt="Cocktail Cruise Location" width="47" height="57" src="/assets/images/icons/cocktail-location.png"></a></li>
          <li><a href="<?php echo PURCHASE_URL; ?>"><img alt="Purchase Tickets" width="47" height="57" src="/assets/images/icons/cocktail-purchase.png"></a></li>
        </ul>

  		</article>

    </section>

  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <figcaption>Lyric Opera Building</figcaption>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>