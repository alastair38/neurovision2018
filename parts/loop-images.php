<?php //if(  has_term( 'writing', 'category' ) ) { - this will be to output different styles depending on whether a video etc is being shown ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('grey-text text-darken-4 col s12 m6 l4'); ?>>
	<article class="card">
		<div class="card-image">
				<?php the_post_thumbnail('thumb', array('class' => 'responsive-img')); ?>
				<h2 class="card-title"><?php the_title(); ?></h2>
		</div>

		<div class="card-content">
			<?php if( strtotime( $post->post_date ) > strtotime('-8 day') ) {
					echo '<span class="badge new"></span>';
					}
			?>



				<label class="authors">Posted on <?php echo the_time('F j, Y') . '.';?>

			</label>

			<a href="<?php the_permalink();?>" class="btn grey darken-3">View image </a>




			</div>

	</article>

	<?php //get_template_part( 'parts/content', 'share' ); ?>

</div>
