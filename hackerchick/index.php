<?php
/**
 * @package WordPress
 * @subpackage Hackerchick_Theme
 */
?>

<!-- INSERT HEADER -->   
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
        
    <!-- DISPLAYING FOR... -->
    <?php if ( is_search() || is_category() || is_tag() ) { ?>
    <div id="displayingFor">
    <?php if (is_search()) { ?>
    <p>Displaying search results for: <strong><?php the_search_query(); ?></strong></a></p>
    <?php } elseif (is_category() ) { ?>
    <p>Displaying posts in category: <strong><?php single_cat_title(''); ?></strong></p>
    <?php } elseif (is_tag() ) { ?>
    <p>Displaying posts with tag: <strong><?php single_cat_title(''); ?></strong></p>
    <?php } ?>
    <font size=-1>[<a href="<?php echo get_option('home'); ?>">Display All Posts</a>]</font>
    </div>
    <?php } ?>
    <!-- DISPLAYING FOR... (END) -->

    
    <?php if (have_posts()) : ?>

        <!-- space first post down so it aligns when you click into it -->
        <div id="postNavigation_spacer"></div>

        <?php $count = 0; ?>
        <?php $teaserCount = 0; ?>
	<?php while (have_posts()) : the_post(); ?>
	    <?php $count++; ?>
	    
	    <!-- DISPLAY LARGE PREVIEWS -->
	    <?php if( $count <= 4 ) { ?>
                <!-- POST -->
		<div class="post">
		<p class="posttitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
		<div class="postbody"><?php the_content('<span class="readmoretext">Read More.....</span>'); ?></div>
		<p class="postmetadata"><?php the_tags('Tags: ', ', ', ' | '); ?> <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
		</div>
		<!-- POST: END -->

            <!-- DISPLAY SMALL TEASERS -->
	    <?php } else { ?>
	        <?php $teaserCount++; ?>
	        
		<!-- POST TEASER -->
	        <div class="post_teaser" id="<?php echo is_even($teaserCount) ? 'even' : 'odd' ?>">

		<div class="teaser_header">
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
		<p class="posttitle_teaser"><?php the_title(); ?></p>
		<?php if ( has_post_thumbnail() ) { ?>
		<?php the_post_thumbnail( 'full', array('class' => 'postimage_teaser', 'border' => '0' ) ); ?>
		<?php } else { ?>
		<img class="postimage_teaser" border="0" src="<?php bloginfo('template_directory'); ?>/images/default-thumbnail.jpg">
		<?php } ?>
		</a></div>
	     
		<div class="postbody_teaser"><?php the_excerpt(); ?></div>
		<div class="postteaser_spacer"></div>
		<a href="<?php the_permalink() ?>"><span class="readmoretext_teaser">Read More.....</span></a>
		<p class="postmetadata"><?php the_tags('Tags: ', ', ', ' | '); ?> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

		</div>
		<!-- POST TEASER: END -->

		<?php if( is_even($teaserCount) ) { ?>
		<div style="clear: both;"></div> 
		<?php } ?>

	    <?php } ?>
	    
	<?php endwhile; ?>

    <div style="clear: both;"></div> 


    <!-- Page Navigation -->
    <div style="clear: both;"></div> 
    <div class="pageNavigation">
    <div class="navOlderLink"><?php next_posts_link('&nbsp;') ?></div>
    <div class="navNewerLink"><?php previous_posts_link('&nbsp;') ?></div>
    <div class="navHomeLink"><a href="<?php echo get_option('home'); ?>">&nbsp;</a></div>
    </div>
    <div style="clear: both;"></div> 
    <!-- Page Navigation: END -->


    <!-- NO POSTS FOUND -->
    <?php else : ?>
	<h2 class="center">No Posts Found</h2>
	<?php get_search_form(); ?>
    <?php endif; ?>
    <!-- NO POSTS FOUND (END)-->

    
</div></div>
<!-- BLOG CONTENT: END -->

</div>
<div style="clear: both;"></div> 
<!-- CONTENT: END -->

<!-- INSERT FOOTER -->   
<?php get_footer(); ?>
