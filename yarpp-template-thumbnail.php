<?php /*
Post Thumbnail Template
Author: Zach Dunn (www.buildinternet.com)
*/
?>

<br />

<p class="more-articles">
<?php if ($related_query->have_posts()):?>
  More articles about: <?php the_tags('', ' | ', ' '); ?> under <?php the_category(', ') ?>:</p>
  <ul>
    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
      <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
  </ul>
<?php else: ?>

  <!-- no related posts found -->
  Tags: <?php the_tags('', ' | ', ' '); ?> under <?php the_category(', ') ?>

  <?php endif; ?>

</p>