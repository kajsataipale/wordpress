<div class="row">
<?php get_header(); ?>

<?php if (have_posts()): ?>
  <div class="col">
    <?php while (have_posts()): the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_excerpt(); ?>

    <?php endwhile; ?>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
</div>
