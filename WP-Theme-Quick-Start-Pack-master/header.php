<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header class="header-area navbar navbar-default">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_attr( bloginfo('site_name') ); ?></a>
    </div>

    <div class="collapse navbar-collapse" id="primary-menu">
	
		<?php
			$menu_args = array(
				'menu_class'		=> 'nav navbar-nav navbar-right',
				'theme_location'	=> 'menu-1'
			);

			wp_nav_menu( $menu_args );
		?>

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container -->

</header>