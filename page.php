<!--<script>
$(function() {
	var right=document.getElementsByClassName('entry-content').style.height;
	var left=document.getElementsById('sidebar-1').style.height;
	
	if(left>right)
	{
		document.getElementsByClassName('entry-content').style.height=left;
	}
	else
	{
		document.getElementsById('sidebar-1').style.height=right;
	}
});
</script>-->


<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lorainccc_welded
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">



		<?php
		//if (is_home() || is_front_page()){
			?>
<!--		<div class="container">	
				<img src="/wp-content/uploads/2018/04/Tech.jpg" alt="Weld" style="width:100%">
				<button class="btn">Register Now</button>
				<div class="text-block">
					<p>2018 Training Schedule</p>
					<p>Now Available!</p>
				</div>
		</div>-->
		
		<?php
		//get_sidebar();
		?>
		
		
<!--		<div class="build">
		<img src="/wp-content/uploads/2018/05/buildyour.jpg" alt="Inspire" style="width:100%">
		</div>
		
		<div class="welcome">
			<h1>Welcome</h1>
		</div>-->
		
<div class="row" data-equalizer data-equalize-on="medium" id="test-eq">
	
	<div class="large-8 columns">
		<div data-equalizer-watch>	
		<?php
		while ( have_posts() ) :
			the_post();
		
			get_template_part( 'template-parts/content', 'page' );
		
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		
		endwhile; // End of the loop.
		?>
	</div>	
	</div>
	
	<div class="large-4 columns">
		<div class="fourColumns" data-equalizer-watch>	
		<?php
		get_sidebar();
		?>
		</div>
	</div>
	
</div>

		<?php
		//get_sidebar();
		get_sidebar('text');
		?>
		
	<?php
		if (is_home() || is_front_page()){ ?>
			
		<!--<div class="smoothSliderContainer">-->
	<?php
		if( function_exists( "get_smooth_slider_recent" ) ){ get_smooth_slider_recent('1'); }
		 ?>
	
<!--</div>-->
<?php } ?>


		
	<?php
		if (is_home() || is_front_page()){ ?>
		<div class="NSFContainer">
		<?php
		echo nl2br("This material is based upon work supported by the National Science Foundation under Grant No. 1400351
		\nAny opinions, findings, and conclusions or recommendations expressed in this material are those of the author(s)
		and do not necessarily reflect the views of the National Science Foundation."); ?>
		<br>
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/nsf1.jpg">
		</div>
		<?php
		} ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
