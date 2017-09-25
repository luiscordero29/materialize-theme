		<footer class="page-footer">
	        <div class="footer-copyright">
	            <div class="container">
	            	<div class="col s12">
						<a target="_blank" href="https://ve.linkedin.com/in/luiscordero29" class="btn-floating btn-small btn-fb right follow-me"><i class="fa fa-linkedin"></i></a>
						<a target="_blank" href="https://trello.com/luiscordero29" class="btn-floating btn-small btn-fb right follow-me"><i class="fa fa-trello"></i></a>
	            		<a target="_blank" href="https://github.com/luiscordero29" class="btn-floating btn-small btn-fb right follow-me"><i class="fa fa-github"></i>asd</a>
						<a target="_blank" href="https://twitter.com/luiscordero29" class="btn-floating btn-small btn-fb right follow-me"><i class="fa fa-twitter"></i></a>
	            		<div class="copy">
	            			© <?php echo date('Y'); ?> luiscordero29. Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Licencia Creative Commons Atribución 4.0 Internacional</a>.
	            		</div>
	            	</div>
	            	<div class="col s12">
	            		<div class="follow-me-mobile">	            			
		            		<a target="_blank" href="https://ve.linkedin.com/in/luiscordero29" class="btn-floating btn-small left"><i class="fa fa-linkedin"></i></a>
							<a target="_blank" href="https://trello.com/luiscordero29" class="btn-floating btn-small left"><i class="fa fa-trello"></i></a>
		            		<a target="_blank" href="https://github.com/luiscordero29" class="btn-floating btn-small left"><i class="fa fa-github"></i>asd</a>
							<a target="_blank" href="https://twitter.com/luiscordero29" class="btn-floating btn-small left"><i class="fa fa-twitter"></i></a>
	            		</div>
	            	</div>
	            </div>
	        </div>
        </footer>

        <!--Import jQuery before materialize.js-->
      	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/jquery/jquery-3.2.1.min.js"></script>
      	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/materialize/js/materialize.min.js"></script>
    	<script type="text/javascript">
    		$( document ).ready(function(){
				<?php /* ?>
				$("#dropdown-idiomas").dropdown();        
				$("#dropdown-idiomas-mobile").dropdown();        
				$("#dropdown-servicios").dropdown();        
				$("#dropdown-servicios-mobile").dropdown();        
    			$('.bible').parallax();
				*/ ?>
    			$(".parallax").parallax();
    			$(".parallax-bible").parallax();
    			$(".button-collapse").sideNav();

    			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		        ga('create', 'UA-78508852-1', 'auto');
		        ga('send', 'pageview');
		    });
    	</script>
        <?php wp_footer(); ?>
    </body>
 </html>