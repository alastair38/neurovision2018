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
							<h2 class="thin"><?php echo $content; ?>
</h2>
						</div>
					</div>

				</div>
				
					<?php

								get_template_part( 'parts/loop', 'page-home' );

						endwhile; endif;
					?>

					<!-- byline and smooth scroll to content below the fold
					<h4 style="font-style:italic; letter-spacing: 2px;" aria-hidden="true" class="grey-text thin">neuroscience, ethics and society</h4>
					<a href="#starting"><i class="material-icons">keyboard_arrow_down</i></a>
					 -->

			 <!-- end #main -->

	</main> <!-- end main -->

<?php get_footer(); ?>
