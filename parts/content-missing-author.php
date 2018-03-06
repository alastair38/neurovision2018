<?php $author = get_queried_object();
$author_id = $author->ID;
?>

<li class="collection-item avatar">
			<?php echo the_author_meta( 'display_name', $author_id ) . " has not added any news or blog content yet.";?>
</li>
