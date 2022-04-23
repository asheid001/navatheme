<!DOCTYPE html>
<html>
    <head>
      <title>Nava Page</title>
      <?php wp_head();?>
    </head>
    <body>
      <nav class="navbar">
        <div class="brand-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' )?></a></div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <?php 
        $args = array(
            'theme_location' => 'primary',
            'container_class' => 'navbar-links'
        );
        wp_nav_menu( $args );
      ?>
     </nav>
     <div class="container">