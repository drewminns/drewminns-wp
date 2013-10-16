		<!-- footer -->
		<footer class="footer" role="contentinfo" id="footer">

			<div class="container">
			
				<div>
					<!-- copyright -->
					<div class="copyright">
						&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>.
					</div>
					<div class="social">
						<ul>
							<li><a href="http://twitter.com/drewisthe" target="_blank">twitter</a></li>
							<li><a href="http://github.com/drewminns" target="_blank">github</a></li>
							<li><a href="http://instagram.com/drewisthe" target="_blank">instagram</a></li>
							<li><a href="http://www.linkedin.com/profile/view?id=11138153" target="_blank">linkedin</a></li>
						</ul>
					</div>
					<!-- /copyright -->
				</div>

			</div>
			
		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
		
		<!-- analytics -->
		<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-40969339-1', 'drewminns.com');
      ga('send', 'pageview');
    </script>
	
	</body>
</html>