<?php
get_header(); ?>

	<main class="container">
			<div class="row">
				<div class="col s12" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php
			if( is_page('About Neurosec') && !$post->post_parent > 0 ) {
							get_template_part( 'parts/loop', 'page-about' );
					} else {
						get_template_part( 'parts/loop', 'page' );
					}
					endwhile; endif;
				?>

			</div>
			</div> <!-- end #main -->

			<!-- <aside class="card 	row">
				<?php
				if( is_page('Neurosec Team') ) {

			$args = array( 'posts_per_page' => 10, 'post_type'=> 'projects', 'parent' => 0, 'hierarchical' => 0 );

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="col s6">
					<div class="">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
			<?php endforeach;
			wp_reset_postdata();}?>

			</aside> -->

	</main> <!-- end main -->




<?php get_footer(); ?>
