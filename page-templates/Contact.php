<?php /* Template Name: Contact*/ ?>

<?php get_header(); ?>
<div class="row">
<div class="col">
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

    <?php endwhile; ?>
<?php endif; ?>
</div>

</div>
<?php get_footer(); ?>
