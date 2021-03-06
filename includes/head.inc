  <?php include($DOCUMENT_ROOT.'includes/seo.inc'); ?>

  <?php
  outputTitleTag(getThisPageExact(), $seo_title);
  ?>

  <?php $isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
	if ( $isiPad ) { ?>
  <?php // Do not use viewport meta for iPad ?>
  <?php    } else { ?>
  <?php // Use viewport meta in all other cases ?>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php } ?>

  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/fonts.css">
  <link rel="stylesheet" href="/assets/css/application.css">

  <script type="text/javascript" src="/assets/javascript/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="/assets/javascript/main.js"></script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-467500-1', 'auto');
  ga('send', 'pageview');

	</script>

  <?php
  outputMetaDescription(getThisPageExact(), $seo_description);
  ?>

  