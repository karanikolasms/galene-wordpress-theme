<?php get_header();?>

<?php

wp_head();

?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">


<section class="main-content">
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
	


 <div class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="text-left col-md-6">
          <div class="row my-5">
            <div class="col-2 text-center">




            		<?php $id_image = get_field('quote_icon_1');
							$image = wp_get_attachment_image_src($id_image, 'icon');
							?>
							<img src="<?php echo $image[0]?>" class="d-block">
            	</div>
            <div class="col-10 text-center">
              <h4 class="text-primary">Battery-friendly</h4>
              <p>Non consuming background operation
                <br>Pingendo enhance the battery duration.</p>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-2 text-center ">
            	

            	<?php $id_image = get_field('quote_icon_2');
							$image = wp_get_attachment_image_src($id_image, 'icon');
							?>
							<img src="<?php echo $image[0]?>" class="d-block">




            </div>
            <div class="col-10 text-center">
              <h4 class="text-primary">Multilayers</h4>
              <p>Work simultaneously on different panels.
                <br>Share the work with teammates.</p>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-2 text-center">

            	<?php $id_image = get_field('quote_icon_3');
							$image = wp_get_attachment_image_src($id_image, 'icon');
							?>
							<img src="<?php echo $image[0]?>" class="d-block">




            </div>
            <div class="col-10 text-center">
              <h4 class="text-primary">Share the love</h4>
              <p>Help us spreading the word.
                <br>Tell your friends with just one-click</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 ">
        	<?php $id_image = get_field('about_image_right');
							$image = wp_get_attachment_image_src($id_image, 'half');
							?>
          <img class="img-fluid d-block figure" src="<?php echo $image[0]?>">
        </div>
      </div>
    </div>
  </div>


  <div class="about-under ">
    <div class="container">
      <div class="row mb-5">
     
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="https://pingendo.github.io/templates/sections/assets/gallery_3.jpg"> </div>
        <div class="col-md-7">
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>





 <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-6 p-0"> </div>
        <div class="col-md-4 col-6 p-0"> </div>
        <div class="col-md-4 col-6 p-0"> </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-secondary">
    <div class="container-fluid">
      <div class="row">
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_6.jpg" class="img-fluid"> </a>
        </div>
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_2.jpg" class="img-fluid"> </a>
        </div>
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_3.jpg" class="img-fluid"> </a>
        </div>
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_1.jpg" class="img-fluid"> </a>
        </div>
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_5.jpg" class="img-fluid"> </a>
        </div>
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_4.jpg" class="img-fluid"> </a>
        </div>
      </div>
    </div>





  

</section>








<?php get_footer();?>


						<!--

							<?php $id_image = get_field('image_1');
							$image = wp_get_attachment_image_src($id_image);
							?>
							<img src="<?php echo $image[0]?>" class="img-icon">
							<h4 class="pull-right"><?php the_field('description_1');?></h4>