<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title></title>
<?php wp_head();?>
</head>



<body <?php body_class();?>>

		<div class="header">
			<div class="container">
			<?php $featured = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'  ); ?>
			<?php $featured= $featured[0]; ?>
			</div>
			<header class="site-header" style="background-image:url(<?php echo $featured ?>);" >



<nav class="main-navigation">
	<div class="container">
		<div class="menu">
			<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed bars" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" >
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							
							
							</button>

							<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" class="img-responsive">
			</div><!-- Header Nav Close!-->



									<div class="nav-srv service top_menu">
									<?php wp_nav_menu( array(
										'theme_location' => 'top_menu',
										'container_id' => 'navbar',
								        'menu_class' => 'nav navbar-nav navbar-right topnav hidden-xs'



										) ); ?>

									<div class="row"></div><!--This is an empry row / helps for Menus !-->


									<div class="nav-row navbar-right">
									<?php wp_nav_menu( array(
										'theme_location' => 'main_menu',
										'container_id' => 'navbar1',
										'container_class' => 'collapse navbar-collapse',
										'menu_class' => 'nav navbar-nav navbar-right',
										'depth'      => 3,
						                'fallback_cb'   =>'wp_bootstrap_navwalker::fallback',
										'walker'   => new wp_bootstrap_navwalker()




										) ); ?>


								</div><!-- Navbar right Close!-->
								</div><!-- Service Menu Close!-->


	  						</div><!-- Div Menu Close!-->
						</div><!-- Container Close!-->
					</nav>
			</header>
