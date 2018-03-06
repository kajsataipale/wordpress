<?php /* Template Name: About */ ?>

<?php get_header(); ?>
<div class="row">

<div class="col">
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>


      <h2> <a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

        <?php the_content(); ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php
$employees = get_posts(array(
  'post_type' => 'employee'
));  if ($employees) {
foreach($employees as $employee) :?>
  <h2><a href="<?php the_permalink();?>"><?php echo $employee->post_title;?></a></h2>
<?php
echo $employee-> post_content;
endforeach;
wp_reset_postdata();
}?>
</div>

</div>
<?php get_footer(); ?>
