<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lorainccc_welded
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel=stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lorainccc_welded' ); ?></a>

	<header id="masthead" class="site-header">
		
		
		
		<!--NINA'S CODE-->
		<div class="small-12 medium-12 large-12">
			<div class="weldHeader">
				<a href="/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.jpg"></a>
				<div id="content" class="site-content">
					<?php
					if ( is_active_sidebar( 'sidebar-search' ) ){
					dynamic_sidebar( 'sidebar-search' );
					}
					?>
				</div>
				<div class="social">
					<?php echo do_shortcode('[aps-social id="1"]')?>
				</div>
			</div>
		<!--NINA'S CODE END-->
			
		
		<div class="site-branding">
			<?php
			//the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$lorainccc_welded_description = get_bloginfo( 'description', 'display' );
			if ( $lorainccc_welded_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $lorainccc_welded_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->


<div id="top" class="top">
	
	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lorainccc_welded' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu' 			 => __('Primary', 'lorainccc_welded'), ) );
			?>
	</nav><!-- #site-navigation -->
		
	<?php
		//if (is_home() || is_front_page()){
	?>
			<!--<div class="container">	
				<img src="/wp-content/uploads/2018/04/Tech.jpg" alt="Weld" style="width:100%">
				<button class="btn">Register Now</button>
				<div class="text-block">
					<p>2018 Training Schedule</p>
					<p>Now Available!</p>
				</div>
			</div>-->
	
<!--		<div class="Homebtn">
			<button class="PDbtn">
				Professional Development <i id="cogs" class="fa fa-cogs"></i> 
			</button>
			<button class="BAbtn">
				Become an Affiliate <i id="users" class="fa fa-users"></i> 
			</button>
			<button class="Sbtn">
				Scholarships <i id="cap" class="fa fa-graduation-cap"></i> 
			</button>
		</div>-->
		
		<!--<div class="welcome">
			<h1>Welcome</h1>
		</div>	-->
	<?php
	//	}
	?>			
</div>		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
