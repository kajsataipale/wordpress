<div class="row"
<?php get_header(); ?>

<?php if (have_posts()): ?>
  <div class="col">
    <?php while (have_posts()): the_post(); ?>

        <h2>Student: <?php the_title(); ?></h2>

        <?php the_content(); ?>

    <?php endwhile; ?>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
</div>
