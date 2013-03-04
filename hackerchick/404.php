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

<br>
<h2 class="center">You can't get there from here</h2>
Some of my links changed when I migrated to WordPress, sorry about that - you might try searching on the blog title here:
<?php get_search_form(); ?>
    
</div></div>
<!-- BLOG CONTENT: END -->

</div>
<div style="clear: both;"></div> 
<!-- CONTENT: END -->

<!-- INSERT FOOTER -->   
<?php get_footer(); ?>
