<?php get_header(); ?>

<div class="main main-front-page">
	<div class="main-blog">
		<div class="container">

      <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('content', 'post'); ?>

      <?php endwhile; ?>

        <?php next_posts_link('Older Posts'); ?>
        <?php previous_posts_link('Newer Posts'); ?>

        <?php
        wp_reset_postdata();
        ?>

      <?php else: ?>

        <p>There are no posts here.</p>

      <?php endif; ?>
    </div>

test910

  </div>
</div>


<?php get_footer(); ?>
