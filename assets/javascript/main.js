$(function() {

  $('nav.supernav li img').hover(function() {
    if (!$(this).hasClass('active')) {
    	var imgSrc = $(this).attr('src');
    	$(this).attr('src', imgSrc.replace('default', 'active'));
    }
  }, function() {
    if (!$(this).hasClass('active')) {
    	var imgSrc = $(this).attr('src');
    	$(this).attr('src', imgSrc.replace('active', 'default'));
    }
  });

  $('body.page-cruise-routes ul.nav img').hover(function() {
    if (!$(this).hasClass('active')) {
    	var imgSrc = $(this).attr('src');
    	$(this).attr('src', imgSrc.replace('default', 'active'));
    }
  }, function() {
    if (!$(this).hasClass('active')) {
    	var imgSrc = $(this).attr('src');
    	$(this).attr('src', imgSrc.replace('active', 'default'));
    }
  });

  $('body.page-cruise-routes ul.nav img').click(function() {
  	var imgSrc;
  	$('img.route-icon').removeClass('active');
  	$('img.route-icon').each(function(index) {
  		imgSrc = $(this).attr('src');
  		$(this).attr('src', imgSrc.replace('active', 'default'));
  	});
  	imgSrc = $(this).attr('src');
  	$(this).attr('src', imgSrc.replace('default', 'active'));
  	$(this).addClass('active');
  	var mapSrc = imgSrc.replace('-default.png', '');
  	mapSrc = mapSrc.substring(mapSrc.lastIndexOf('/') + 1);
  	$('img.route-map').removeClass('active');
  	$('img#' + mapSrc).addClass('active');
  	if (mapSrc == 'routes-fireworks') {
  		$('body.page-cruise-routes article').addClass('active');
  	} else {
  		$('body.page-cruise-routes article').removeClass('active');
  	}
  });

  $('body.page-boats ul.nav li').click(function() {
    $('body.page-boats ul.nav li').removeClass('active');
    $(this).addClass('active');
    var activeImg = $(this).data('image');
    $('body.page-boats img.boat-plans').removeClass('active');
    $('body.page-boats img.boat-plans.' + activeImg).addClass('active');
  });

  var images = new Array();
	function preload() {
		for (i = 0; i < preload.arguments.length; i++) {
			images[i] = new Image()
			images[i].src = preload.arguments[i]
		}
	}
	preload(
		"/assets/images/nav/90minute-default.png",
		"/assets/images/nav/60minute-default.png",
		"/assets/images/nav/chm-default.png",
		"/assets/images/nav/fireworks-default.png",
		"/assets/images/nav/cocktail-default.png",
		"/assets/images/nav/90minute-active.png",
		"/assets/images/nav/60minute-active.png",
		"/assets/images/nav/chm-active.png",
		"/assets/images/nav/fireworks-active.png",
		"/assets/images/nav/cocktail-active.png"
	);
});

