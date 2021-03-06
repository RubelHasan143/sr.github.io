<?php get_header(); ?>

<section class="page-content-area" id="page-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
				?>
			</div><!-- /.col-md-8 -->

			<div class="col-md-offset-1 col-md-3">
				<?php get_sidebar(); ?>
			</div><!-- /.col-md-offset-1.col-md-3 -->

		</div>
	</div>
</section>

<?php
get_footer();
