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
				<?php

					echo '<br />Year of recording: '. get_the_term_list( '', 'video_date', '', ', ', '' );

				?>
				<?php

				 ?>
			</label>

      <?php $private = get_field('private');?>
      			<?php if($private == "Yes") {?>
              <a href="<?php the_permalink();?>" class="btn materialize-red lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Click to request access to this video"><i class="material-icons right">lock</i>Request Access</a>
            <?php } else {?>
              <a href="<?php the_permalink();?>" class="btn grey darken-3">View video </a>
            <?php } ?>


			</div>

	</article>

	<?php //get_template_part( 'parts/content', 'share' ); ?>

</div>
