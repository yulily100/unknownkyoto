<?php get_header(); ?>
  <div class="container">
    <h2 class=""><a href="">CONTACT</a></h2>

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

<?php get_footer(); ?>
