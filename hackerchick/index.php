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
<div id="content" class="grid-container group">

  <!-- DISPLAY TOPICS OR NAME THE RESUTLS BEING DISPLAYED -->
  <div class="topics grid_6">
  <center>  

    <?php /* If Filtered Results, Display Filter Criteria */
    if ( is_search() || is_category() || is_tag() ) { ?>
          
       <div class="topic-box single">
         <div class="topic">
           <h3>
             <?php if (is_search()) { ?>Results for <?php the_search_query(); ?>
             <?php }           else {   single_cat_title(''); /* single_cat_title() will return category OR tag name */ } ?>
           </h3>

        </div>
      </div>

    <?php } else { /* Otherwise, display the topics across the top */ ?>
    
      <div class="topic-box">
        <a href="<?php echo home_url(); ?>/category/Technology"><div class="topic">
          <h3>Technology</h3>
          <p>Push the edge</p>
        </div></a>
      </div>
      <div class="topic-box">
        <a href="<?php echo home_url(); ?>/category/Inspiration"><div class="topic">
          <h3>Inspiration</h3>
          <p>Change the world</p>
        </div></a>
      </div>
      <div class="topic-box last">
        <a href="<?php echo home_url(); ?>/category/Community"><div class="topic">
          <h3>Community</h3>
          <p>Foster innovation</p>
        </div></a>
      </div>

    <?php } ?>
  
  </center>
  </div> <!-- END TOPICS OR NAME THE RESULTS BEING DISPLAYED -->

  <?php get_sidebar(); ?>

  <!-- ************************************************************************************************************************* -->
  <!-- TEASERS                                                                                                                   -->
  <!-- ************************************************************************************************************************* -->     
  <?php if (have_posts()) { ?>
    <?php $count = 0; ?>

    <div class="teasers">
    <?php while (have_posts()) : the_post(); ?>
      <?php $count++; ?>
        <div class="teaser grid_3 <?php if( is_even($count) ){ echo 'omega-short'; } ?>">
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
            <div class="teaser-image">
              <?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail( 'full' ); ?>
              <?php } else { ?><img src="<?php bloginfo('template_directory'); ?>/imgs/default-teaser-image.jpg"><?php } ?>
            </div>
            <h3 class="teaser-headline"><?php the_title(); ?></h3>
          </a>
          <?php the_excerpt(); ?>
        </div>
    <?php endwhile; ?>
    </div>

    <!-- NAVIGATION -->
    <div class="navigation grid_6">
      <div id="navigation-older"><?php next_posts_link('Older') ?></div>
      <a href="#"><div id="navigation-newer"><?php previous_posts_link('Newer') ?></div></a>
    </div> 

  <?php } else { ?>
    <!-- NO POSTS FOUND -->
    <h2 class="center">No Posts Found</h2>
    <?php get_search_form(); ?>
  <?php } ?>
  <!-- *************************************************** END TEASERS ********************************************************* -->
  

  <!-- BOTTOM BAR (for narrow screens) -->
  <div class="bottom-bar">
    <!-- About Footer -->
    <div class="about-footer grid_8">
      <hr />
      <p><strong><a href="<?php echo home_url(); ?>/About">Abby Fichtner</a></strong> helps people build amazing technology and push the edge on what's possible. Hacker in Residence for Harvard Innovation Lab and creator of Hack Boston, Abby has been named one of the Top 25 Women in Boston Tech.
      <br/>
      <center>  
        <span class="about-footer-social-media">
          <a href="http://twitter.com/HackerChick" target="_new"><img src="<?php bloginfo('template_directory'); ?>/imgs/twitter.png" alt="Twitter" /></a>
          <a href="http://facebook.com/HackerChickLabs" target="_new"><img src="<?php bloginfo('template_directory'); ?>/imgs/facebook.png" alt="Facebook" /></a>
          <a href="http://www.linkedin.com/in/abbyfichtner" target="_new"><img src="<?php bloginfo('template_directory'); ?>/imgs/linkedin.png" alt="LinkedIn" /></a>
          <a href="http://feeds.feedburner.com/TheHackerChickBlog" target="_new"><img src="<?php bloginfo('template_directory'); ?>/imgs/rss.png" alt="RSS" /></a>
        </span>
      </center>
      </p>    
    </div>
  </div>
  <!-- END BOTTOM BAR -->
</div>
<!-- *************************************************** END CONTENT ********************************************************* -->

<!-- INSERT FOOTER -->   
<?php get_footer(); ?>

