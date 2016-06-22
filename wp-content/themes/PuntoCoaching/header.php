<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- <meta charset="UTF-8"> -->
	<title>Punto Coaching</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900,200italic,300italic,400italic,700italic,900italic|Raleway:400,900italic,800italic,700italic,600italic,500italic,400italic,300italic,200italic,100italic,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
</head>
<body>
 <header>
   <nav>
    <div class="nav-wrapper">
  
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo">
      <img src="<?php bloginfo('template_url')?>/assets/img/logo.jpg" alt="punto-coaching">
        <img class="hidden" src="<?php bloginfo('template_url')?>/assets/img/logoSmall.jpg" alt="punto-coaching">
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </a>

       <?php
            
        $args = array(
          'theme_location' => 'top-bar',
          'depth'    => 0,
          'container'  => false,
          'menu_class'   => 'right hide-on-med-and-down',
          // 'menu_id'   => 'mobile-demo',
          'walker'   => new BootstrapNavMenuWalker()
        );

        wp_nav_menu($args);
      
      ?>

      <?php
            
        $args = array(
          'theme_location' => 'top-bar',
          'depth'    => 0,
          'container'  => false,
          'menu_class'   => 'side-nav',
          'menu_id'   => 'mobile-demo',
          'walker'   => new BootstrapNavMenuWalker()
        );

        wp_nav_menu($args);
      
      ?>
      <a href="#">
          <i class="flaticon-close-button" aria-hidden="true">DDD</i>
        </a>
    </div>
   </nav>
  </header>