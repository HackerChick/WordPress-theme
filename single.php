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

  
    <!-- POST -->
      <?php $coverImageURL = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image');
        if( $coverImageURL != "" ) { ?>
        <div class="post-cover-image group">
          <!-- Post Header Image -->
          <img src="<?php echo $coverImageURL; ?>" />
        </div>
      <?php } ?>

    <!-- Title -->
    <div class="post" id="post-<?php the_ID(); ?>">
      <h1 class="title"><?php the_title(); ?></h1>

      <?php
        $taglines = get_post_custom_values('post_tagline');
        if( $taglines ){
          foreach ( $taglines as $key => $value ) { ?>
          <h2 class="subtitle"><?php echo $value; ?></h2>
      <?php } } ?>      

      <!-- AUXILLARY INFO (AUTHOR, SHARE BUTTONS) -->
      <div class="post-aux-info">
        <span class="post-share-buttons">
          <!-- in reverse order -->
          <a href="javascript:sharehackernews()"><img src="<?php bloginfo('template_directory'); ?>/imgs/hackernews.png" alt="Hacker News" title="Share on Hacker News" /></a>
          <a href="javascript:sharelinkedin()"><img src="<?php bloginfo('template_directory'); ?>/imgs/linkedin.png" alt="LinkedIn" title="Share on LinkedIn" /></a>
          <a href="javascript:sharegoogleplus()"><img src="<?php bloginfo('template_directory'); ?>/imgs/googleplus.png" alt="Google+" title="Share on Google+" /></a>
          <a href="javascript:sharefacebook()"><img src="<?php bloginfo('template_directory'); ?>/imgs/facebook.png" alt="Facebook" title="Share on Facebook" /></a>
          <a href="javascript:sharetwitter()"><img src="<?php bloginfo('template_directory'); ?>/imgs/twitter.png" alt="Twitter" title="Share on Twitter" /></a>
        </span>
        <span>by <a href="<?php echo home_url(); ?>/About">Abby Fichtner</a></span>
      </div>

      <div class="postbody"><?php the_content( ); ?></div>
      
    </div>
    <!-- POST: END -->

    <!-- NAVIGATION -->
    <div class="navigation single bottom group">
      <div id="navigation-older"><?php previous_post_link('&laquo; %link') ?></div>
      <div id="navigation-newer"><?php next_post_link('%link &raquo;') ?></div>
    </div> 

    <!-- Comments OFF -->
    <?php /* comments_template(); */ ?>

    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>

  <?php endif; ?>
    

  <!-- About Footer -->
  <div class="about-footer">
  <hr>
  <p><strong><a href="<?php echo home_url(); ?>/About">Abby Fichtner</a></strong> helps people build amazing technology and push the edge on what's possible. Hacker in Residence for Harvard Innovation Lab and creator of Hack Boston, Abby has been named one of the Top 25 Women in Boston Tech.
    <br/>
  <div style="text-align: center;">
  <span class="about-footer-social-media">
      <a href="http://twitter.com/HackerChick" target="_new"><img src="<?php bloginfo('template_directory'); ?>/imgs/twitter.png" alt="Twitter" /></a>
      <a href="http://facebook.com/HackerChickLabs" target="_new"><img src="<?php bloginfo('template_directory'); ?>/imgs/facebook.png" alt="Facebook" /></a>
      <a href="http://www.linkedin.com/in/abbyfichtner" target="_new"><img src="<?php bloginfo('template_directory'); ?>/imgs/linkedin.png" alt="LinkedIn" /></a>
      <a href="<?php echo home_url(); ?>/Contact"><img src="<?php bloginfo('template_directory'); ?>/imgs/email.png" alt="Email" /></a>
      </span>
  </div>
  </p>    
  </div>

  <!-- You Might Also Like... -->
  <div class="you-might-also-like">
    <hr>
    <div class="you-might-also-like-contents">
    <?php related_posts() ?>

    <p class="more-articles">Trending:</p>
    <ul>
      <li><a href="<?php bloginfo('url'); ?>/2012/01/agile-vs-lean-yeah-yeah-whats-the-difference.html">Agile vs. Lean: Yeah Yeah...</a></li>
      <li><a href="<?php bloginfo('url'); ?>/2012/01/kanban-is-the-new-scrum.html">Kanban is the new Scrum</a></li>
      <li><a href="<?php bloginfo('url'); ?>/2013/02/5-mvp-examples.html">5 Awesome MVP Examples</a></li>
      <li><a href="<?php bloginfo('url'); ?>/2010/02/are-we-agile-yet.html">Are We Agile Yet?</a></li>
      <li><a href="<?php bloginfo('url'); ?>/2013/01/focus-in-chaos-why-i-like-kanban-for-startups.html">Focus in Chaos: Why I Like Kanban for Startups</a></li>
    </ul>
    </div>
  </div>

</div>
<!-- *************************************************** END CONTENT ********************************************************* -->

<!-- INSERT FOOTER -->   
<?php get_footer(); ?>
