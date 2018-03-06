

<article id="post-<?php the_ID(); ?>" class="white" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">


		<h1 class="page-title thin center"><?php the_title(); ?></h1>

	</header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
			<?php the_post_thumbnail('full', array('class' => 'responsive-img'));?>
	</section> <!-- end article section -->

	<footer class="article-footer">
	</footer> <!-- end article footer -->



</article> <!-- end article -->
