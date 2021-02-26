<?php
/*
Template Name: plan
*/
get_header(); ?>


<h1 class="plan-list-title"><a href="/plan">プラン一覧</a></h1>
<div class="page-contents">
  <div class="wrapper">
    <ul class="member-list">
      <?php
        $args = array(
          'post_type' => 'plan',
          'order' => 'DESC',
        );
        $planList = new WP_Query($args);


        if ( $planList->have_posts() ) :
          while($planList->have_posts()): $planList->the_post();
      ?>
      <li>
        <p class="top-plan-intro"><?php echo get_post_meta($post->ID,'intro',true); ?></p>
        <p class="top-plan-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a></p>
        <h3 class="top-plan-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

      </li>
      <?php endwhile;endif; ?>
    </ul>
  </div>
</div>
<?php get_footer(); ?>
