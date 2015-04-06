  	<header>
  		<nav class="supernav">
  			<ul>
  				<li><a href="/90-minute-cruise.php"><img alt="90 Minute Architectural Cruise" width="113" height="62" class="<?php echo activeClass('90-minute-cruise'); ?>" src="/assets/images/nav/90minute-<?php if (activeClass('90-minute-cruise')) { ?>active<?php } else { ?>default<?php } ?>.png"></a></li>
  				<li><a href="/60-minute-cruise.php"><img alt="60 Minute Architectural Cruise" width="113" height="63" class="<?php echo activeClass('60-minute-cruise'); ?>" src="/assets/images/nav/60minute-<?php if (activeClass('60-minute-cruise')) { ?>active<?php } else { ?>default<?php } ?>.png"></a></li>
  				<li><a href="/history-cruise.php"><img alt="Chicago History Museum Architectural Cruise" width="135" height="72" class="<?php echo activeClass('history-cruise'); ?>" src="/assets/images/nav/chm-<?php if (activeClass('history-cruise')) { ?>active<?php } else { ?>default<?php } ?>.png"></a></li>
          <li><a href="/cocktail-cruise.php"><img alt="Cocktail Cruise" width="114" height="63" class="<?php echo activeClass('cocktail-cruise'); ?>" src="/assets/images/nav/cocktail-<?php if (activeClass('cocktail-cruise')) { ?>active<?php } else { ?>default<?php } ?>.png"></a></li>
  				<li><a href="/fireworks-cruise.php"><img alt="Fireworks Cruise" width="139" height="63" class="<?php echo activeClass('fireworks-cruise'); ?>" src="/assets/images/nav/fireworks-<?php if (activeClass('fireworks-cruise')) { ?>active<?php } else { ?>default<?php } ?>.png"></a></li>
  			</ul>
  		</nav>
  		<nav class="main">
  			<ul>
  				<li><a class="<?php echo activeClass(''); ?>" href="<?php echo PURCHASE_URL; ?>" onClick="ga('send', 'event', { eventCategory: 'Purchase Ticket', eventAction: 'Start Checkout', eventLabel: 'clicked'});">Purchase Tickets</a></li>
  				<li><a class="<?php echo activeClass('accolades'); ?>" href="accolades.php">Accolades</a></li>
  				<li><a class="<?php echo activeClass('directions'); ?>" href="directions.php">Directions</a></li>
  				<li><a class="<?php echo activeClass('schedules'); ?>" href="schedules.php">Schedules</a></li>
  				<li><a class="<?php echo activeClass('cruise-routes'); ?>" href="cruise-routes.php">Routes</a></li>
  				<li><a class="<?php echo activeClass('groups'); ?>" href="groups.php">Groups</a></li>
  				<li><a class="<?php echo activeClass('faq'); ?>" href="faq.php">FAQs</a></li>
  				<li><a class="<?php echo activeClass('boats'); ?>" href="boats.php">Boats</a></li>
  				<li><a class="<?php echo activeClass('charters'); ?>" href="charters.php">Charters</a></li>
  				<li><a class="<?php echo activeClass('about'); ?>" href="about.php">Us</a></li>
  				<li><a class="<?php echo activeClass('gifts'); ?>" href="gifts.php">Gifts</a></li>
  				<li><a class="<?php echo activeClass('contact'); ?>" href="contact.php">Contact</a></li>
  			</ul>
  		</nav>
  	</header>