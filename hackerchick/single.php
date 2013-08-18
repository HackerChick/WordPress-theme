<?php
/**
 * @package WordPress
 * @subpackage Hackerchick_Theme
 */
?>
<?php get_header(); ?>

<!-- ************************************************************************************************************************* -->
<!-- CONTENT                                                                                                                   -->
<!-- ************************************************************************************************************************* -->
<div id="content">

<?php get_sidebar(); ?>

<!-- ************************************************************************************************************************* -->
<!-- BLOG CONTENT                                                                                                              -->
<!-- ************************************************************************************************************************* -->     
<div class="blogcontent_container">
<div class="blogcontent">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!-- POST NAVIGATION -->
	<table class="postNavigation" cellspacing="0" cellpadding="0" border="0" width="98%" height="20px">
	<tr>
	   <td align="left" width="45%"><?php previous_post_link('&laquo; %link') ?>&nbsp;</td>
	   <td align="center"><a href="<?php echo get_option('home'); ?>">Home</a></td>
	   <td align="right" width="45%"><?php next_post_link('%link &raquo;') ?>&nbsp;</td>
        </tr>
	</table>
	
        <!-- POST -->
	<div class="post" id="post-<?php the_ID(); ?>">
	<h1 class="posttitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	<div class="postbody"><?php the_content( ); ?></div>

	<div class="post_spacer"></div>
        <!-- Comments OFF -->
	<p class="postmetadata" id="single"><?php the_tags('Tags: ', ', ', ' '); ?> <?php edit_post_link('Edit', '', ' '); ?> <?php /* comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); */ ?> <br/>
	Posted <?php the_time('l, F jS, Y') ?>  under <?php the_category(', ') ?>.</p>
	</div>
	<!-- POST: END -->

<!-- Comments OFF -->
        <?php /* comments_template(); */ ?>

	<!-- POST NAVIGATION -->
	<table class="postNavigation" cellspacing="0" cellpadding="0" border="0" width="98%" height="20px">
	<tr>
	   <td align="left" width="45%"><?php previous_post_link('&laquo; %link') ?>&nbsp;</td>
	   <td align="center"><a href="<?php echo get_option('home'); ?>">Home</a></td>
	   <td align="right" width="45%"><?php next_post_link('%link &raquo;') ?>&nbsp;</td>
        </tr>
	</table>

	<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>

    <?php endif; ?>
    
</div></div>
<!-- BLOG CONTENT: END -->

</div>
<div style="clear: both;"></div> 
<!-- CONTENT: END -->

<!-- INSERT FOOTER -->   
<?php get_footer(); ?>
