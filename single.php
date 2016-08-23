<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<div class="container">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="col-md-6">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('', array(
							'class' => "img-responsive",
						)); ?>
					</a>
				</div>
				<div class="col-md-6 text-left">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<?php the_content(); ?>
				</div>

			<?php endwhile; // End of the loop. ?>
		</div><!-- .row -->
	</div><!-- .container -->

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</div><!-- #content -->

<?php get_footer(); ?>
