			<!-- footer -->
			<footer class="footer" role="contentinfo">
			<p><img src="<?php bloginfo('template_url'); ?>/img/olympics-globe-partnership.png" width="161px"/></p>
			© Copyright 2014 The Globe and Mail Inc. All Rights Reserved.<br />
444 Front St. W., Toronto,  ON  Canada  M5V 2S9 <br />
Phillip Crawley, Publisher
			</footer>
			<!-- /footer -->
		
		</div>
		<!-- /wrapper -->
		</div>
		<!-- /hide-overflow -->
		
		<!-- Mobile menu -->
		<div id="mobile-menu" class="wrapper">
			<?php if(function_exists('ajax_tags_create_mobile_front_end')) ajax_tags_create_mobile_front_end(); ?>
		</div>
		
		<?php wp_footer(); ?>
		<?php if(function_exists('globe_external_assets')) globe_external_assets(); ?>
		<!-- analytics -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)})(document,'script');
		</script>
		<!-- VR -->
		<script>var _vrq=_vrq||[];_vrq.push(['id',65]);_vrq.push(['automate',true]);_vrq.push(['track',function(){}]);(function(d,a){var s=d.createElement(a),x=d.getElementsByTagName(a)[0];s.async=true;s.src='http://a.visualrevenue.com/vrs.js';x.parentNode.insertBefore(s,x);})(document,'script');</script>

	</body>
</html>