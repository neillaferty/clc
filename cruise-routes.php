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
  		
      <ul class="nav">
        <li><img class="route-icon active" width="41" height="41" src="/assets/images/icons/routes-90-active.png"></li>
        <li><img class="route-icon" width="41" height="41" src="/assets/images/icons/routes-60-default.png"></li>
        <li><img class="route-icon" width="41" height="41" src="/assets/images/icons/routes-chm-default.png"></li>
        <li><img class="route-icon" width="41" height="41" src="/assets/images/icons/routes-cocktail-default.png"></li>
        <li><img class="route-icon" width="41" height="41" src="/assets/images/icons/routes-fireworks-default.png"></li>
      </ul>

      <img id="routes-90" class="route-map active" alt="Cruise Route Map" src="/assets/images/routes-90.jpg" width="1008" height="646">
      <img id="routes-60" class="route-map" alt="Cruise Route Map" src="/assets/images/routes-60.jpg" width="1008" height="646">
      <img id="routes-chm" class="route-map" alt="Cruise Route Map" src="/assets/images/routes-chm.jpg" width="1008" height="646">
      <img id="routes-cocktail" class="route-map" alt="Cruise Route Map" src="/assets/images/routes-cocktail.jpg" width="1008" height="646">
      <img id="routes-fireworks" class="route-map" alt="Cruise Route Map" src="/assets/images/routes-fireworks.jpg" width="1008" height="646">

  		<article>
  			<p>Note:  Our Fireworks Cruise<br>
        will venture through the locks<br>
        and out to the Lake should<br>
        conditions permit.</p>
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