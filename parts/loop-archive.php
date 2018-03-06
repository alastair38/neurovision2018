<li class="collection-item avatar">
      <?php the_post_thumbnail(array(100,100), array('class' => 'responsive-img circle')); ?>
      <span><a href="<?php the_permalink() ?>" class="center" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></span>
      <label class="authors">Written	on <?php echo the_time('F j, Y') . '.';?></label>
      <?php the_excerpt();?>

      <a href="#!" class="secondary-content hide-on-small-only"><i class="material-icons">folder</i></a>
    </li>
