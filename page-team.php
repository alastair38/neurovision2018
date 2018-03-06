<?php

/*
Template Name: Users
*/

get_header(); ?>



	<main class="container">
			<div class="row" role="main">
				<header class="article-header">


					<h2 class="page-title center"><?php the_title(); ?></h2>


				</header> <!-- end article header -->

				<?php $args = array(
	'posts_per_page'   => 10,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'title',
	'order'            => 'ASC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'projects',
	'post_mime_type'   => '',
	'post_parent'      => '0',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true
);
$posts_array = get_posts( $args );

foreach ($posts_array as $posts) {
	$title = $posts->post_title;
	$link = $posts->guid;
	$args = array(
		'blog_id'      => $GLOBALS['blog_id'],
		'role'         => '',
		'role__in'     => array(),
		'role__not_in' => array(),
		'meta_key'     => 'your_projects',
		'meta_value'   => $posts->ID,
		'meta_compare' => 'LIKE',
		'meta_query'   => array(),
		'date_query'   => array(),
		'include'      => array(),
		'exclude'      => array(),
		'orderby'      => 'login',
		'order'        => 'ASC',
		'offset'       => '',
		'search'       => '',
		'number'       => '',
		'count_total'  => false,
		'fields'       => 'all',
		'who'          => ''
	 );
	$blogusers = get_users( $args );
	if($blogusers) {
		echo "<div class='row'><h5><a href='" . $link . "'>" . $title . "</a></h5>";
	foreach ( $blogusers as $user ) {
		?>
			 <div class="col s6 m4 l2">
				 <article class="card large">
						<div class="card-image waves-effect waves-block waves-light">
							<?php echo '<img class="" src="' . get_field('user_image', 'user_' . $user->ID . '') . '" />' ?>
						</div>
						<div class="card-content text-white">
							<h6 class="cardtitle text-white">
								<a href="<?php echo  get_author_posts_url($user->ID, $user->user_nicename) . '">' . $user->display_name;?></a>
							</h6>
							<p>
								
							</p>

							<?php //get_template_part( 'parts/content', 'share' ); ?>
						</div>
					</article>

			 </div>

			 <?php
	} echo "</div>";
}
}
 ?>


				<?php $args = array(
					'blog_id'      => $GLOBALS['blog_id'],
					'role'         => '',
					'role__in'     => array(),
					'role__not_in' => array(),
					'meta_key'     => 'your_projects',
					'meta_value'   => '2154',
					'meta_compare' => '=',
					'meta_query'   => array(),
					'date_query'   => array(),
					'include'      => array(),
					'exclude'      => array(),
					'orderby'      => 'login',
					'order'        => 'ASC',
					'offset'       => '',
					'search'       => '',
					'number'       => '',
					'count_total'  => false,
					'fields'       => 'all',
					'who'          => ''
				 );
				$blogusers = get_users( $args );

				foreach ( $blogusers as $user ) {
				?>
					<div class="col s6 m4 l3">
						<article class="card">
							 <div class="card-image waves-effect waves-block waves-light">
								 <?php echo '<img class="activator" src="' . get_field('user_image', 'user_' . $user->ID . '') . '" />' ?>
							 </div>
							 <div class="card-content">
								 <h3 class="card-title activator grey-text text-darken-4"><?php echo $user->display_name; ?><i class="mdi mdi-chevron-up right"></i></h3>
								 <p>
									 <?php

									 //the_field('your_projects', 'user_' . $user->ID . ''); ?>
								 </p>

								 <?php //get_template_part( 'parts/content', 'share' ); ?>
							 </div>
							 <div class="card-reveal">
								 <span class="card-title grey-text text-darken-4">Biography<i class="mdi mdi-close right"></i></span><br />
								 <?php echo get_user_meta($user->ID, 'description', true);?>


							 </div>
						 </article>

					</div>

					<?php


				}

	?>


		</div> <!-- end #main -->

			<?php // get_sidebar(); ?>

	</main> <!-- end main -->



<?php get_footer(); ?>
