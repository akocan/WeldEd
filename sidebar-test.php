<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lorainccc_welded
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

//if (is_home() || is_front_page()){
//	?>
/<!--/	<div class="Homebtn">
//			<button class="PDbtn">
//				Professional Development <i id="cogs" class="fa fa-cogs"></i> 
//			</button>
//			<button class="BAbtn">
//				Become an Affiliate <i id="users" class="fa fa-users"></i> 
//			</button>
//			<button class="Sbtn">
//				Scholarships <i id="cap" class="fa fa-graduation-cap"></i> 
//			</button>
//		</div>-->
//	<?php
//}
//
//?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
