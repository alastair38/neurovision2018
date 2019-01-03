<?php
/*
Template Name: Home
*/

get_header(); ?>

	<main class="">
			<div class="row">
					<?php

								get_template_part( 'parts/loop', 'slider' );
								?>

				</div>

			</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div id="about" class="row white">

					<div class="container center">
						<div class="col s12">
							<?php $content = get_the_content();?>
							<h2 class="center home-quote"><?php echo $content; ?>
</h2>
						</div>
					</div>

				</div>

					<?php

								get_template_part( 'parts/loop', 'page-home' );

						endwhile; endif;
					?>

			 <!-- end #main -->

	</main> <!-- end main -->

<?php get_footer(); ?>
