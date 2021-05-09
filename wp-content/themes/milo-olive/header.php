<!DOCTYPE html>
 
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php if(is_front_page()): ?>  
    <title><?php bloginfo("name"); ?></title>
     
    <?php else : ?>
    <title><?php wp_title( "|", true, "right" ); ?> <?php bloginfo("name"); ?></title>
    
    <?php endif; ?>
    
    <!-- favicon & links -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/html5shiv.js" type="text/javascript"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

	<div id="wrapper">

		<div id="header-holder">
		
			<div id="header" class="cf" role="banner">
            
            	<div id="menu-btn" class="cf">
                    <div id="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div> <!-- .menu-btn --> 
            
            	<div id="logo">
					 <a href="<?php echo esc_url( home_url( "/" ) ); ?>"></a>
				</div>
            
				<nav id="nav" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>

			</div><!-- #header -->
		
		</div><!-- #header-holder -->