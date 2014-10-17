		<?php include $_SERVER['DOCUMENT_ROOT']."/template/header.php" ?>
		<section id="content" class="about">
			<div class="hometype">
        		<h1>Digital. Traditional.<br /> Far from typical.</h1>
				<span class="grid-marker"></span>
			</div>
        <div id="content" class="about-detail">
			<div class="about-body">
				<div class="summary clearfix">
					<h4>We are diverse storytellers. We aim to understand the human psyche and how it will interpret the outward messages we create. We believe that actions and images speak louder than words. We’ve been doing it since 2003.</h4>
					<div class="circles">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</div>
					<h5>Our Perspective</h5>
					<p class="left">If you can strike emotion in your audience, you have their attention. It’s what your brand does afterward that determines their reaction. BIG or small, we approach everything we do with passion, with genuine ideals and solutions, with the intention of receiving a reaction. We position brands in a way that allow for serendipitous crossover with</p>
					<p class="right">the interests of their audience. Just like your circle of friends, people want a real connection with which products and services they choose to surround themselves. We make sure there’s no mistaking your brand’s personality and its front and center in all we do for you.</p>
				</div>
				
				<div class="about-full">
				</div>
				
				<div class="summary clearfix">
					<ul class="left">
						<li><h5>Working with us</h5></li>
						<li><p>Communication is oftentimes the biggest letdown or problem area in the business world. If you can’t communicate effectively internally and thus externally, things go awry quickly. Sometimes a phone call needs to replace an email. Sometimes it’s necessary to voice disagreement. But it’s always important to offer focused solutions. We pride ourselves in communicating well with our clients. We respond quickly, we think quickly and we deliver quickly. It’s what you expect from a marketing partner but so often do not experience. We’ve been there, done it and found a better process along the way. <a href="#">Discover bluestone</a>.</p></li>
					</ul>
					<ul class="right">
						<li><h5>Working for us</h5></li>
						<li><p>As we mentioned, we’re far from typical in every way. We do not set out to maintain a certain headcount within our company in order to fit the stereotypical agency persona. We do not have departments or divisions with monotonous sole purposes. We expect a lot from those we employ but offer a ton of opportunity along with it. Everyone here is a thinker, a strategist, a creative. We hope to challenge you everyday and put you in uncomfortable situations that make you think and learn. If diversity and excitement is your thing, <a href="#">talk to us</a>.
</p></li>
					</ul>
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
		</section>

		
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
