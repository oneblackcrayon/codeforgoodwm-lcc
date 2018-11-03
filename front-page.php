<?php
get_header(); ?>

	<div id="primary" class="content-area container-fluid">
		<main id="main" class="site-main">
			
		<?php
		// HOME PAGE CONTENT/CODE HERE
		// LOOP STORED BELOW IF NEEDED
		?>
		
		<?php
		while ( have_posts() ) :
			the_post();
			
			get_template_part( 'template-parts/content', 'page' );
			
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
