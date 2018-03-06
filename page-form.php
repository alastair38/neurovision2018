<?php
/*
Template Name: Form
*/

acf_form_head();

get_header();

global $current_user;
get_currentuserinfo();
$url = get_permalink();
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<main class="container">

	<div class="row" role="main">

		<div class="col s12">
<?php // if ($url == $actual_link ) {?>
			<header class="article-header">


				<h1 class="page-title thin center"><?php the_title(); ?></h1>

				<? //var_dump($post);?>
			</header> <!-- end article header -->


				<?php if (have_posts()) : while (have_posts()) : the_post();

				if(is_user_logged_in ()) {
					get_template_part( 'parts/content', 'form' );
				} else {
					$page = get_page_by_path( 'member-login' );
					echo '<div class="col s12">You must be <a href="' . get_permalink($page) . '">logged in</a> to add content</div>';
				}


endwhile; endif;
 ?>
		</div> <!-- end s12 -->

		    <?php // get_sidebar(); ?>

	</div> <!-- end row -->

</main> <!-- end main -->


<?php get_footer(); ?>
