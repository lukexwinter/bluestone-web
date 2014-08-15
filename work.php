		<?php include 'template/header.php' ?>
        <div id="content" class="work clearfix">
        	<a href="/amalfi.php" id="amalfi" class="project">
				<h2>Amalfi<br />Stonebriar</h2>
				<span class="grid-marker"></span>
				<h3>Brand Development, Identity, Print, Signage, 3D, Web Design &amp; Development, Strategy</h3>
				<span class="overlay"></span>
			</a>
        	<a href="/downtek.php" id="downtek" class="project">
				<h2>Downtek</h2>
				<span class="grid-marker"></span>
				<h3>Brand Guidelines, Print, Advertising, Web Design &amp; Development, Signage, Strategy</h3>
				<span class="overlay"></span>
			</a>
        	<a href="/cosign.php" id="cosign" class="project">
				<h2>Cosign</h2>
				<span class="grid-marker"></span>
				<h3>Photography, Video Production, Editing, Web Design</h3>
				<span class="overlay"></span>
			</a>
        	<a href="/tower.php" id="tower" class="project">
				<h2>Tower at OPOP</h2>
				<span class="grid-marker"></span>
				<h3>Brand Development, Identity, Print, Signage, Photography, Web Design &amp; Development, Strategy</h3>
				<span class="overlay"></span>
			</a>
        	<a href="/roadid.php" id="roadid" class="project">
				<h2>Road ID</h2>
				<span class="grid-marker"></span>
				<h3>Brand Identity, Print, Advertising, Web Design, Packaging, Strategy</h3>
				<span class="overlay"></span>
			</a>
        	<a href="/fmcc.php" id="fmcc" class="project">
				<h2>Fort Mitchell<br />Country Club</h2>
				<span class="grid-marker"></span>
				<h3>Web Design, Development, Strategy</h3>
				<span class="overlay"></span>
			</a>
        	<a href="/grapevine.php" id="grapevine" class="project">
				<h2>Grapevine</h2>
				<span class="grid-marker"></span>
				<h3>Brand Development, Identity, Print, Signage, 3D, Web Design &amp; Development, Strategy</h3>
				<span class="overlay"></span>
			</a>
        	<a href="/amig.php" id="amig" class="project">
				<h2>American Modern Insurance Group</h2>
				<span class="grid-marker"></span>
				<h3>Brand Guidelines, Print, Web Advertising, Web Design, Strategy</h3>
				<span class="overlay"></span>
			</a>
        	<a href="/cgc.php" id="cgc" class="project">
				<h2>Cincinnati Growing Cincinnati</h2>
				<span class="grid-marker"></span>
				<h3>Brand Identity, Photography, Video Production, Editing</h3>
				<span class="overlay"></span>
			</a>
        	<a href="/sterling.php" id="sterling" class="project">
				<h2>Sterling Cut Glass</h2>
				<span class="grid-marker"></span>
				<h3>Brand Guideline, Web Design, Development, Strategy</h3>
				<span class="overlay"></span>
			</a>
        </div>

		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		
		<script>
		    var bsProject = $('.project');
			function projectHeight() {
				var halfHeight = ($(window).height() / 2);
				console.log(windowHeight);
				bsProject.css({height: halfHeight});
			}
			function projectLoad () {
				$.each(bsProject, function(i, item) {
				    setTimeout(function() {
				        $(item).addClass('in');
				    }, 200 * i);
				})
			}
			$(window).load(function(){
				projectHeight();
				setTimeout(function(){projectLoad()}, 100);
			});
			$(window).resize(function(){
				projectHeight();
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
