<?php
//$title = single_cat_title("", false);
?>
<aside role="complementary">

<?php
if (  is_home() || is_category() || is_post_type_archive() || is_tax('video_date') ) {?>

	<div id="modal1" class="modal bottom-sheet">
	    <div class="modal-content col s4">


				<?php //	$my_search->the_form();

						if (  is_home() || is_category() || is_post_type_archive('news')){
							echo '<h6>Filter Blog and News Articles by Category</h6>';
							$cats = get_terms( 'category', array(
									'hide_empty' => 0
							) );

									echo '';
									foreach ( $cats as $cat ) {
											echo '<a href="' . esc_url( get_term_link( $cat ) ) . '">' . $cat->name . '</a><span class="round-badge">' . $cat->count . '</span>';
									}
									echo '';
						} elseif (  is_post_type_archive('videos') || is_tax('video_date')) {

							echo do_shortcode( '[searchandfilter taxonomies="video_date" types="checkbox" headings="Date" operators="OR" hide_empty="0"]' );
						}


			 ?>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>

	    </div>
	  </div>
	<?php
 }?>

</aside>
