<?php
	get_header();
?>
<main id="wrap">

		 <?php
					get_sidebar();

					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.

			?>
<?php
	get_footer();
?>
