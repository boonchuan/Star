<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article>
    <h1><?php the_title(); ?></h1>
    <?php if (has_post_thumbnail()) : ?>
      <div><?php the_post_thumbnail('large'); ?></div>
    <?php endif; ?>
    <div><?php the_content(); ?></div>
    <?php comments_template(); ?>
  </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
