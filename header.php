<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmgp.org/xfn/11" />
	<link rel="pingback"  href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header id="header">
		<div class="top-header">
			<div id="top-bar">
				<div class="container">
					<div class="language-option pull-left">
						<select>
							<option>EngLish</option>
							<option>Spanish</option>
						</select>
					</div><!-- .language-option -->
					<div class="list-contact">
						<ul>
							<li><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp +212 386 5575</li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp Support@ConsultWP.com</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp 1010 Avenue of the Moon,New York,NY 100018 US.</li>
						</ul>
						<a href="<?php bloginfo('home'); ?>"><i class="fa fa-tty" aria-hidden="true"></i>&nbsp <span>&nbspFree Consult</span></a>
					</div><!-- .list-contact -->
				</div><!-- .container -->
			</div> <!-- #top-bar -->

			<div id="nav">
			    <nav class="navbar navbar-default" role="navigation">
			      <div class="container">
			        <!-- Brand and toggle get grouped for better mobile display -->
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <a class="navbar-brand" href="<?php bloginfo('home'); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/layout/images/logo1.png" alt="" /></a>
			        </div>
			        <?php
			        wp_nav_menu( array(
			                'menu'              => 'primary',
			                'depth'             => 2,
			                'container'         => 'div',
			                'container_class'   => 'navbar-collapse collapse ',
			                'menu_class'        => 'nav navbar-nav ',
			                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                'walker'            => new wp_bootstrap_navwalker())
			            );
			        ?>
			      </div><!-- /.container-->
			    </nav>
			</div><!-- #nav -->
		</div><!-- .top-header -->
		<div class="slider">

		</div>
	</header>