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

      <img class="boat-plans seating active" width="1008" height="646" alt="River Cruise Seating" src="/assets/images/boats-river-seating.png">
      <img class="boat-plans decks" width="1008" height="646" alt="Charter Deck Plans" src="/assets/images/boats-deck-plans.png">

  		<article>

        <h1>Our boats:  Not too big, not too small, never too crowded.</h1>

        <p>Each boat is handicapped accessible and fully-appointed.<br>
        For photos and detailed specifications, <a href="/downloads/Our Boats.pdf" target="_blank">click here</a>.</p>

  		</article>

      <ul class="nav">
        <li class="active" data-image="seating">River Cruise Seating</a></li>
        <li data-image="decks">Charter Deck Plans</li>
      </ul>

    </section>

  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>