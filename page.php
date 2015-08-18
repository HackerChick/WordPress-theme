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


<!-- ************************************************************************************************************************* -->
<!-- BLOG CONTENT                                                                                                              -->
<!-- ************************************************************************************************************************* -->     
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">
      <h1 class="title page"><?php the_title(); ?></h1>
      <div class="postbody"><?php the_content( ); ?></div>
    </div>

    <!-- Social Media Footer -->
    <div class="about-footer">
    <hr><br />
    <center>  
    <span class="about-footer-social-media">
        <a href="http://twitter.com/HackerChick" target="_new"><img src="<?php bloginfo('template_directory'); ?>/imgs/twitter.png" alt="Twitter" /></a>
        <a href="http://facebook.com/HackerChickLabs" target="_new"><img src="<?php bloginfo('template_directory'); ?>/imgs/facebook.png" alt="Facebook" /></a>
        <a href="http://www.linkedin.com/in/abbyfichtner" target="_new"><img src="<?php bloginfo('template_directory'); ?>/imgs/linkedin.png" alt="LinkedIn" /></a>
        <a href="<?php echo home_url(); ?>/Contact"><img src="<?php bloginfo('template_directory'); ?>/imgs/email.png" alt="Email" /></a>
        </span>
    </center>
    </div>

  <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
    

</div>
<!-- *************************************************** END CONTENT ********************************************************* -->

<!-- INSERT FOOTER -->   
<?php get_footer(); ?>
