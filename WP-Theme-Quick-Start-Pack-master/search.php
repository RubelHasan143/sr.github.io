<?php get_header(); ?>

	<section class="page-content-area" id="page-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title"><?php
									/* translators: %s: search query. */
									printf( esc_html__( 'Search Results for: %s', 'wp-quick-start-pack' ), '<span>' . get_search_query() . '</span>' );
								?></h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
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
