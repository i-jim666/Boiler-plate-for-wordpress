<?php
/**
 * Template Name: Generic Page
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>


<div class="wrapper page-wrapper generic-page-template">

	<div id="primary">

		<main class="site-main" id="main" role="main">

			<div class="container">
				<?php

					wp_reset_query(); 
					while ( have_posts() ) : the_post();
						the_content();
					endwhile; // End of the loop.

				?>
			</div>
				
        </main><!-- #main -->

</div><!-- #primary -->

</div><!-- #page-wrapper -->

<?php get_footer();