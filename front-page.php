<?php
/**
 * front-page
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('home'); ?>
<header id="content" class="col-md-12 home-content" role="main">
	<div class="logo-home col-md-12">
	</div>
	<div class="col-md-6 col-md-offset-3">
			<nav id="nav-home">
				    <?php
						wp_nav_menu(
							array(
								'theme_location' => 'home-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
	        </nav>
	</div>
</header><!-- #content -->
<?php
get_footer('home');
