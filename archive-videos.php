<?php get_header();?>

<main class="container">

		<div class="row" role="main">
			<div class="col s12">

				<header>
					<h1 class="page-title thin center"><?php post_type_archive_title(); ?></h1>

				</header>



		    <div class="col s12">

					<div class="col s12">
							<a class="chip" href="#modal1">Filter Videos<i class="filter material-icons">filter_list</i></a>
						</div>

			    <?php if (have_posts()) : while (have_posts()) : the_post();

					get_template_part( 'parts/loop', 'videos' );

					?>

					<?php endwhile; ?>

					<?php joints_page_navi(); ?>

					<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

					<?php endif; ?>

			</div> <!-- end .col s9 -->


		</div> <!-- end .col s12 -->
	</div> <!-- end .row -->

</main> <!-- end main -->
		<?php get_template_part( 'parts/loop', 'filter' ); ?>

<?php get_footer(); ?>
