<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->
<?php $logo_image = get_theme_mod( 'tcx_logo_image' );?>
<div class="navbar-fixed">

<nav>
	<div class="nav-wrapper container"><img id="logo" class="center"
		<?php
		$logo_image = get_theme_mod( 'tcx_logo_image' );
		if ($logo_image){?>
			src="<?php echo $logo_image;?>" alt=""
			<?php
			} else {?>
			src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt=""
			<?php }?>
			  />
<a class="brand-logo light" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>


			<div class="hide-on-med-and-down right">
				<?php joints_top_nav(); ?>

			</div>


	<ul id="slide-out" class="side-nav">
		<div class="center black white-text">
			<img id="logo"
				<?php
				$logo_image = get_theme_mod( 'tcx_logo_image' );
				if ($logo_image){?>
					src="<?php echo $logo_image;?>" alt=""
					<?php
					} else {?>
					src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt=""
					<?php }?>
						/><?php bloginfo('name'); ?>
      </div>
			<li>
				<a class="" href="<?php bloginfo('url'); ?>">Home</a>
			</li>
		<?php joints_top_nav(); ?>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse right"><i class="material-icons">menu</i></a>
		</div>
</nav>
</div>

		 <!-- Comment this line out if using a slide-out side nav menu on mobile. You will also need to uncomment the relevant <span> in nav-topbar.php to activate this.   -->
