		<?php include $_SERVER['DOCUMENT_ROOT']."/template/header.php" ?>
		<link rel="stylesheet" href="css/rs-minimal-white.css">
        <div id="content" class="work-detail downtek">
        	<div class="project-head"><img src="img/downtek-logo.png" /></div>
			<div class="project-body">
				<div class="title clearfix">
					<h2>DownTek</h2> 
					<h3>Brand Guidelines, Print, Advertising, Web Design &amp; Development, Signage, Strategy</h3>
				</div>
			
				<div class="summary clearfix">
					<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie, ante quis tincidunt suscipit, arcu felis commodo lacus, vel consectetur diam magna non lectus.</h4>
					<p class="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie, ante quis tincidunt suscipit, arcu felis commodo lacus, vel consectetur diam magna non lectus. Vestibulum vitae malesuada tellus.</p>
					<p class="right">Sed non pharetra magna. Nunc accumsan sit amet augue quis placerat. Nam gravida ante ut felis facilisis, id lacinia tortor consequat.</p>
				</div>
			
				<div class="work full">
					<span class="caption">Brand Exploration<span class="grid-marker"></span></span>
					<div class="full-width-slider royalSlider heroSlider rsMinW rsHor rsWithBullets">
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>downtek-brand-slide-1.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>downtek-brand-slide-2.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>downtek-brand-slide-3.jpg"></a>
					</div>
				</div>
				
				<div class="clearfix">
					<p class="work type">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed erat ante. Donec nec massa magna. Praesent ullamcorper quam et ligula elementum, a tristique mauris rutrum. Vestibulum eu ipsum eget ante congue tincidunt a quis turpis. Duis convallis orci nibh. Cras pharetra massa at tellus elementum, a tempus leo volutpat. Morbi mi velit, tincidunt a convallis in, vehicula vel turpis. Sed vulputate magna sed diam facilisis molestie.
					</p>
					<div class="work half">
						<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/downtek-brand-half-1.jpg" alt="" width="708" height="447" />
						<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/downtek-brand-half-2.jpg" alt="" />
					</div>
				</div>

				<div class="work full">
					<span class="caption">Product Hang Tag<span class="grid-marker"></span></span>
					<div class="full-width-slider royalSlider heroSlider rsMinW rsHor rsWithBullets">
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>downtek-product-slide-1.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>downtek-product-slide-2.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>downtek-brand-slide-3.jpg"></a>
					</div>
				</div>
				
				<div class="work three-quarters">
					<span class="caption">Print Advertisements<span class="grid-marker"></span></span>
					<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/downtek-brand-three-quarters-1.jpg" alt="" />
				</div>
				
				<div class="clearfix">
					<p class="work type">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed erat ante. Donec nec massa magna. Praesent ullamcorper quam et ligula elementum, a tristique mauris rutrum. Vestibulum eu ipsum eget ante congue tincidunt a quis turpis. Duis convallis orci nibh. Cras pharetra massa at tellus elementum, a tempus leo volutpat. Morbi mi velit, tincidunt a convallis in, vehicula vel turpis. Sed vulputate magna sed diam facilisis molestie.
					</p>
					<div class="work half">
						<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/downtek-print-half-1.jpg" alt="" />
					</div>
				</div>	
				
				<div class="work full">
					<div class="web-video downtek">
						<div class="laptop-holder">
							<img src="<?php echo MAINURL.""; ?>/img/tower-web-video-poster.jpg">
							<video id="scroll-video" loop="loop" muted="muted" poster="<?php echo MAINURL.""; ?>/img/downtek-web-video-poster.jpg"><source src="<?php echo MAINURL."/video/"; ?>thetower-screencast.webm" type="video/webm"><source src="<?php echo MAINURL."/video/"; ?>thetower-screencast.mp4" type="video/mp4"></video>
						</div>
					</div>
				</div>
				
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				
				
			</div>
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
