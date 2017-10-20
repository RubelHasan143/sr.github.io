<?php get_header(); ?>

	<section class="page-content-area" id="page-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?>

				</div><!-- /.col-md-8 -->
				<div class="col-md-offset-1 col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
