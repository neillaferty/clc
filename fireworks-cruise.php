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
  			<p>Enjoy your favorite drink while gazing at Navy Pier’s fabulous light show.<br>
        Choose our pre-pay package that includes unlimited premium wines, beer, and mixed drinks<br>
        for $20.  Passage is $42 / adult, $35 / ages 65+, $20 / ages 7-18, plus tax.<br>
        Complimentary Coca-Cola soft drinks, lemonade, and muffins or cookies are included.<br>
        * <em>Depending on lock traffic, our fireworks cruise will sail along one of two </em><a href="/cruise-routes.php">routes</a>.</p>
        <ul class="nav">
          <li><a href="/schedules.php"><img alt="Fireworks Cruise Schedule" width="47" height="57" src="/assets/images/icons/fireworks-schedule.png"></a></li>
          <li><a href="https://goo.gl/maps/4UVkK"><img alt="Fireworks Cruise Location" width="47" height="57" src="/assets/images/icons/fireworks-location.png"></a></li>
          <li><a href="<?php echo PURCHASE_URL; ?>"><img alt="Purchase Tickets" width="47" height="57" src="/assets/images/icons/fireworks-purchase.png"></a></li>
        </ul>
  		</article>


    </section>

  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <figcaption>Crain Communications (formerly Smurfit-Stone) Building</figcaption>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>