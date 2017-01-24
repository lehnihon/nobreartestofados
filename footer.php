	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="redes">Novidades</h2>
						<h5>Receba todas as nossas novidades e promoções</h5>	
						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; Copyright <?php echo date('Y') ?> -  Tapeçaria Nobre Arte Design | <a href="https://www.facebook.com/seimidigital/?ref=ts&fref=ts"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seimi.png"; ?>" /></a>
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
