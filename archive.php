<?php get_header();
get_template_part( 'parts/content', 'breadcrumbs' );
$title = single_cat_title("", false);
?>

<main class="container">

		<div class="row" role="main">
			<div class="col s12">

				<header>
					<?php
						echo '<h1 class="page-title thin center">' . $title . '</h1>';
					?>

				</header>

		    <div class="col s12 l9">



			    <?php if (have_posts()) : while (have_posts()) : the_post();

					get_template_part( 'parts/loop', 'blog' );

					endwhile;

					joints_page_navi();

					else :

					get_template_part( 'parts/content', 'missing' );

					endif;

					?>

				</div>

			<?php get_sidebar('archives'); ?>

		</div> <!-- end #main -->
	</div>
</main> <!-- end main -->

<?php get_footer(); ?>
