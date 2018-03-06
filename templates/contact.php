<?php
/* Template Name: Contact*/



get_header();

 ?>
<div class="row"

<?php if (have_posts()): ?>
  <div class="col">
    <?php while (have_posts()): the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

    <?php endwhile; ?>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
</div>
