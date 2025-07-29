<?php
// Load the custom header
get_header(); ?>

<div class="container" style="max-width:900px; margin:auto; padding:2em;">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article style="margin-bottom:2em;">
        <h2><a href="<?php the_permalink(); ?>" style="color:#3a254d;"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile;
  else :
    echo '<p>No posts found.</p>';
  endif;
  ?>
</div>

<?php get_footer(); ?>
