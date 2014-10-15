		<?php include $_SERVER['DOCUMENT_ROOT']."/template/header.php" ?>
		<section id="content" class="contact">
			<div class="hometype">
        		<h1>Challenges<br /> Welcome</h1>
				<span class="grid-marker"></span>
			</div>

		</section>
        <div id="content" class="work-detail amalfi">
			<div class="project-body">
				<div class="summary clearfix">
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie, ante quis tincidunt suscipit, arcu felis commodo lacus, vel consectetur diam magna non lectus.</h4>
					<p class="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie, ante quis tincidunt suscipit, arcu felis commodo lacus, vel consectetur diam magna non lectus. Vestibulum vitae malesuada tellus.</p>
					<p class="right">Sed non pharetra magna. Nunc accumsan sit amet augue quis placerat. Nam gravida ante ut felis facilisis, id lacinia tortor consequat.</p>
				</div>
			</div>
		</div>
        <div id="content" class="about">
			<h1>Let me tell you a little bit about me.</h1>
					<!--<div class="work half">
						<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/amalfi-web-half-1.jpg" alt="" />
						<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/amalfi-web-half-2.jpg" alt="" />
					</div>-->
		</div>
				

		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
		
			
			<script>
				/*Royal Slider*/
				jQuery(document).ready(function($) {
				  $('.full-width-slider').royalSlider({
				    arrowsNav: false,
				    loop: false,
				    imageScaleMode: 'fill',
				    arrowsNavAutoHide: false,
				    autoScaleSlider: true, 
				    controlNavigation: 'bullets',
				    thumbsFitInViewport: false,
				    navigateByClick: true,
				    startSlideId: 0,
				    autoPlay: false,
				    transitionType:'move',
				    globalCaption: false
				  });
				});
				
				/*Lazy Load*/	
				$("img.lazy").lazyload({
				    effect : "fadeIn"
				});
				
				// Trigger the 
				$(window).scroll(function() {
					if ( $('#scroll-video').visible( true ) == true ) {
						$('#scroll-video').get(0).play()
					} else {
						$('#scroll-video').get(0).pause();
					}
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
