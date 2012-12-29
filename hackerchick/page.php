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
<div class="pagecontent">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- space first post down so it aligns with pages (internal pages have navigation up top) -->
        <div id="postNavigation_spacer"></div>

        <!-- POST -->
	<div class="post" id="post-<?php the_ID(); ?>">
	<p class="posttitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
	<div class="postbody"><?php the_content( ); ?></div>
	</div>
	<!-- POST: END -->

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
