<?php get_header(); ?>
<div>
	<div>
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				the_content();
				// Include the page content template.
				get_template_part( 'content', 'page' );

			// End the loop.
			endwhile;
			?>
	</div>
</div>
<?php get_footer(); ?>
