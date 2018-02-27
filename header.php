<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <?php
   $pages = get_pages();
   foreach ( $pages as $page ) {
     $option = '<a href="' . get_page_link( $page->ID ) . '">';
     $option .= $page->post_title;
     $option .= '</a>';
     // echo $option;
   }
  ?>
      <li class="navbar-brand" href="<?php the_permalink(); ?>"><?php echo $option; ?></li>
      <li class="navbar-brand" href="<?php the_permalink(); ?>"><?php echo $option; ?></li>
      <li class="navbar-brand" href="<?php the_permalink(); ?>"><?php echo $option; ?></li>
  </nav>
  <div class="container">
