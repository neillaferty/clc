<?php include($DOCUMENT_ROOT.'includes/common.inc'); ?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  
  <?php include($DOCUMENT_ROOT.'includes/head.inc'); ?>

  <!-- for responsive width -->
    <link rel="stylesheet" href="/assets/css/application2.css">


 </head>
 <body class="<?php echo basename(__FILE__, '.php') ?>">
  
  <div id="container">

    <?php include($DOCUMENT_ROOT.'includes/header.inc'); ?>

  	<section class="content">
  		<div id="logo">
  			<img src="/assets/images/home-logo.png">
  		</div>

      <img class="background" src="/assets/images/background-home.jpg">

  		<aside class="endorsement">
  			<em>Chicago Concierge Favorites Award 2015 Winner – Culture and Attractions</em>
  		</aside>

  		<div id="cnn-video">
  			<a href="http://www.cnn.com/videos/living/2014/09/05/chicago-long-layover.cnn" target="_blank"><img src="/assets/images/home-cnn.png"></a>
  		</div>
  	</section>

  	<footer>

      <?php include($DOCUMENT_ROOT.'includes/footer-nav.inc'); ?>

      <figcaption>Aqua Building by Jeanne Gang</figcaption>

      <?php include($DOCUMENT_ROOT.'includes/footer-text.inc'); ?>

  	</footer>

  </div>

 </body>
</html>