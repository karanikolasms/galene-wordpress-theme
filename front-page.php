<?php get_header();?>

<?php

wp_head();

?>



	<div class="container text-center pagination-centered">
		<div class="intro col-md-12 col-centered">
			<?php $description = get_bloginfo('description', 'display'); ?>
				<h2 class="title"><span><strong><?php echo $description; ?></strong></span></h2>		
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 

    <?php the_content(); ?>
<?php endwhile; else: ?>
    <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
</div></div></section><!--CONTAINER MAIN CONTENT CLOSE!-->
<?php get_footer();?>
