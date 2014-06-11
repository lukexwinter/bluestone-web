<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Bluestone Creative</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, IE=edge,chrome=1" http-equiv="X-UA-Compatible">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<?php include 'template/header.php' ?>
		<div id="overlay" style="background: white; position: absolute; width: 100%; height: 100%; z-index: 99;"></div>
		<div id="blue-overlay" style="background: url(img/color-overlay.png) no-repeat center; background-size: cover; position: absolute; width: 100%; height: 100%; z-index: 99;"></div>
        <section id="content" class="home">
			<div class="hometype">
        		<h1><span>Once</span> <span>you</span> <span class="inline">find</span> <span class="inline">it,</span> <span>you'll</span> <span class="inline">know</span> <span class="inline">it.</span></h1>
				<span class="grid-marker"></span>
				<a href="">Discover Bluestone<span></a>
			</div>
			
			<video style="position: fixed; bottom: 0; right: 0; min-height: 100%; min-width: 100%; max-width: 1000%; max-height: 4000%; width: auto; height: auto; overflow: hidden; display: block;" autoplay="1" loop="loop" muted="muted" poster="/video/main.jpg"><source src="/video/bluestoneweb.webm" type="video/webm"><source src="/video/bluestoneweb.mp4" type="video/mp4"></video>
        	
		</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
		<script>
			$(window).load(function(){
				$('#overlay').fadeOut(2000);
			});       
		</script>
		

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
