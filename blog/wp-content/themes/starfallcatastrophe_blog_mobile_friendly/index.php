<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article style="margin-bottom: 2rem;">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (has_post_thumbnail()) : ?>
      <div><?php the_post_thumbnail('large'); ?></div>
    <?php endif; ?>
    <div><?php the_excerpt(); ?></div>
  </article>
<?php endwhile; else : ?>
  <p>No posts yet.</p>
<?php endif; ?>
<?php get_footer(); ?>
