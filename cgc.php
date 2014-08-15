		<?php include $_SERVER['DOCUMENT_ROOT']."/template/header.php" ?>
		<link rel="stylesheet" href="css/rs-minimal-white.css">
        <div id="content" class="work-detail cgc">
        	<div class="project-head"><img src="img/cgc-logo.png" /></div>
			<div class="project-body">
				<div class="title clearfix">
					<h2>Cincinnati Growing<br>Cincinnati</h2> 
					<h3>Brand Identity, Photography, Video Production, Editing</h3>
				</div>
			
				<div class="summary clearfix">
					<h4>Creating a sense of community in Frisco, Texas</h4>
					<p class="left">When one imagines what it would be like to live in the Lone Star State, your mind naturally drifts to the Amalfi Coast of Italy, right? Okay, fair enough. But that’s exactly what bluestone was tasked with and ultimately created for this luxury apartment community by North American Properties. With a name inspired by the wonderfully scenic and storied coastal town in Italy combined with the community’s locale within the heart of Stonebriar Commons in Frisco, we developed a storyline which allowed the two to coincide famously.</p>
					<p class="right">There were three notable elements we used to serve as cornerstones in developing this brand visually: the intricate Byzantine-style architecture found in Amalfi’s Chiostro del Paradiso, the fountain which graces the community’s central access point within Stonebriar Commons and the idea of a resident’s recent trip to Amalfi which has since influenced the interior design of their new apartment.</p>
				</div>
			
				<div class="work full">
					<span class="caption">Brand Development<span class="grid-marker"></span></span>
					<div class="full-width-slider royalSlider heroSlider rsMinW rsHor rsWithBullets">
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>cgc-brand-slide-1.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>cgc-brand-slide-2.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>cgc-brand-slide-3.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>cgc-brand-slide-4.jpg"></a>
					</div>
				</div>
				
				<div class="clearfix">
					<p class="work type">
						The logo mark took its inspiration from the peaked architectural forms of the Chiostro del Paradiso, whose upward linear flow was used to also represent that of the fountain’s water. There is a subconscious visual of an ‘A’ for ‘Amalfi’ hidden within. Scrapbook-style compositions made up of fabrics, textures and handwritten notes atop carefully selected photos “from the trip” support the theme. The use of Amalfi paper, one of the world’s first handmade stocks dating back to the 12th century, is a minor yet notable detail in achieving a brand of this complexity.</p>
					<div class="work half">
						<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/cgc-brand-half-1.jpg" alt="" />
						<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/cgc-brand-half-2.jpg" alt="" />
					</div>
				</div>
					
				<div class="work full">
					<span class="caption">Video Stills<span class="grid-marker"></span></span>
					<div class="full-width-slider royalSlider heroSlider rsMinW rsHor rsWithBullets">
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>cgc-video-slide-1.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>cgc-video-slide-2.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>cgc-video-slide-3.jpg"></a>
					    <!-- lazy loaded image slide -->
					    <a class="rsImg" href="<?php echo MAINURL."/img/"; ?>cgc-video-slide-4.jpg"></a>
					</div>
				</div>
				
<!--				<div class="clearfix">
					<p class="work type">
						The concept of the marketing package for Amalfi Stonebriar was to create a solemnly clean facade with initial touch points such as the pocket folder, business cards and signage. But as the viewer peels back the layers of the brand in mediums such as the brochure, they discover an invitingly warm and cozy feeling of being at home. We wanted the audience to hear, feel, smell and taste the visuals begin placed before them.
					</p>
					<div class="work half">
						<img class="lazy" data-original="<?php echo MAINURL.""; ?>/img/amalfi-print-half-1.jpg" alt="" />
					</div>
				</div>	-->


				
<!--				<div class="work full">
					<div class="web-video tower">
						<div class="laptop-holder">
							<img src="<?php echo MAINURL.""; ?>/img/tower-web-video-poster.jpg">
							<video id="scroll-video" loop="loop" muted="muted" poster="<?php echo MAINURL.""; ?>/img/tower-web-video-poster.jpg"><source src="<?php echo MAINURL."/video/"; ?>thetower-screencast.webm" type="video/webm"><source src="<?php echo MAINURL."/video/"; ?>thetower-screencast.mp4" type="video/mp4"></video>
						</div>
					</div>
				</div>-->
				
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
