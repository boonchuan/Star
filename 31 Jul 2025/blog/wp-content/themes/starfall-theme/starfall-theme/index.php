<?php get_header(); ?>
<section class="blog-container">
    <h2>Latest Posts</h2>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-card">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
            <p><a href="<?php the_permalink(); ?>">Read more →</a></p>
        </div>
    <?php endwhile; else : ?>
        <p>No blog posts found.</p>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
