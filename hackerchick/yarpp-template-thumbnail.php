<?php /*
Post Thumbnail Template
Author: Zach Dunn (www.buildinternet.com)
*/
?>

<br />

<?php if ($related_query->have_posts()):?>
<div class="subtitle">You Might Also Like...</div>

    <table border="0" cellspacing="5"><tr>
    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
        <td valign="top" width="155"><a href="<?php the_permalink() ?>" rel="bookmark"> 

	<?php if ( has_post_thumbnail() ) { ?>
	  <?php $image_id = get_post_thumbnail_id();  $thumbnail_url = wp_get_attachment_image_src($image_id, 'medium'); ?>
	  <img  border="0" src="<?php echo $thumbnail_url[0] ?>" width="150" height="50" alt="<?php the_title(); ?>">
	<?php } else { ?>
	  <img border="0" src="<?php bloginfo('template_directory'); ?>/images/default-thumbnail.jpg" width="150" height="50" alt="<?php the_title(); ?>">
	<?php } ?>
	<br />
	<div class="relatedPostTitles"><?php the_title(); ?></div></a>
        </td>
    <?php endwhile; ?>
    </table>
    
<?php else: ?>

<!-- no related posts found -->

<?php endif; ?>