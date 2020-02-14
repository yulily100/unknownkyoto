<?php get_header(); ?>
<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="wrapper">
			<article class="page-basic">
				<h2 class="page-basic-title"><?php echo get_the_title(); ?></h2>
				<div class="page-basic-contents">
					<?php the_content(); ?>
				</div>
			</article>
		</div>

	<?php endwhile;endif; ?>
</div>
<?php get_footer(); ?>
