<?php
/*
Template Name: member
*/
get_header(); ?>

<div class="page-header page-member">
  <h1 class="page-title"><a href="/blog"><span>UNKNOWN KYOTO</span>MEMBER</a></h1>
</div>
<div class="page-contents">
  <div class="wrapper">
    <ul class="member-list">
      <?php
        $args = array(
          'post_type' => 'member',
          'order' => 'ASC',
        );
        $memberList = new WP_Query($args);
        if ( $memberList->have_posts() ) :
          while($memberList->have_posts()): $memberList->the_post();
      ?>
      <li>
        <p class="member-thumb"><?php the_post_thumbnail('member-thumb');?></p>
        <p class="member-position"><?php echo get_post_meta($post->ID,'肩書',true); ?></p>
        <h3 class="member-name"><?php the_title(); ?></h3>
        <div class="member-description"><?php the_content(); ?></div>

      </li>
      <?php endwhile;endif; ?>
    </ul>
  </div>
</div>
<?php get_footer(); ?>
