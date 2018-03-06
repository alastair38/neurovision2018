<?php get_header();
//get_template_part( 'parts/content', 'breadcrumbs' );
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<main class="container">

		<div class="row" role="main">

		    <div class="col s12 ">

					<header>
						<h1 class="page-title thin center"><?php echo'Contributed by ' . $curauth->display_name;?></h1>

					</header>
					<ul class="collection with-header">
						<li class="collection-header"><h4>Blog Posts</h4></li>
			    <?php if (have_posts()) : while (have_posts()) : the_post();


					get_template_part( 'parts/loop', 'archive' );

					endwhile;

					joints_page_navi();

					else :

					get_template_part( 'parts/content', 'missing-author' );


					endif;

					?>
					</ul>
					<ul class="collection with-header">
						<li class="collection-header"><h4>Publications</h4></li>
				<?php	$args = array(
    'post_type' => 'publications' ,
    'author' => get_queried_object_id(), // this will be the author ID on the author page
    'showposts' => 10
);
$custom_posts = new WP_Query( $args );
if ( $custom_posts->have_posts() ):
    while ( $custom_posts->have_posts() ) : $custom_posts->the_post();
        get_template_part( 'parts/loop', 'archive' );
    endwhile;
else:
    get_template_part( 'parts/content', 'missing-author_pubs' );
endif;?>
</ul>
				</div>

			<?php //get_sidebar('archives'); ?>

		</div> <!-- end #main -->

</main> <!-- end main -->

<?php get_footer(); ?>
