		<?php include 'template/header.php' ?>
		<section id="content" class="home">
			<div class="hometype">
        		<h1><span>Once</span> <span>you</span> <span class="inline">find</span> <span class="inline">it,</span> <span>you'll</span> <span class="inline">know</span> <span class="inline">it.</span></h1>
				<span class="grid-marker"></span>
				<a href="">Discover Bluestone<span></a>
			</div>
			
			<video style="position: fixed; bottom: 0; right: 0; min-height: 100%; min-width: 100%; max-width: 1000%; max-height: 4000%; width: auto; height: auto; overflow: hidden; display: block;" autoplay="1" loop="loop" muted="muted" poster="<?php echo MAINURL."/video/"; ?>/video/main.jpg"><source src="<?php echo MAINURL."/video/"; ?>bluestone.webm" type="video/webm"><source src="<?php echo MAINURL."/video/"; ?>bluestone.mp4" type="video/mp4"></video>
        	
		</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
		<script>
			$(window).load(function(){
				
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
