<?php
/**
 * @package WordPress
 * @subpackage Hackerchick_Theme
 */
?>

<!-- ************************************************************************************************************************* -->
<!-- SIDEBAR                                                                                                                  -->
<!-- ************************************************************************************************************************* -->
<div id="sidebar">

    <!-- HACKER CHICK -->
    <div id="hackerchick"></div>
    <!-- HACKER CHICK : END -->

    <div class="sidebar_content">

    <!-- HACKER -->
    <div class="item">
    <img class="sidebar_header_image" src="<?php bloginfo('template_directory'); ?>/images/hacker.png" width="137" height="27" alt="hacker"/>
    <p>Someone who thinks outside the box. Someone who discards conventional wisdom and does something else instead. Someone who looks at the edge and wonders what's beyond. Someone who sees a set of rules and wonders what happens if you don't follow them. <font size="-1"><em>- Bruce Schneier</em></font></p>
    </div>
    <!-- HACKER: END -->

    <div id="hackerchick_spacer"></div>

           
    <!-- SOCIAL MEDIA LINKS -->
    <div class="mouseover-hint" id="mouseover-twitter"><img src="<?php bloginfo('template_directory'); ?>/images/follow-me.png" width="148" height="56"></div>
    <div class="mouseover-hint" id="mouseover-facebook"><img src="<?php bloginfo('template_directory'); ?>/images/share-on-facebook.png" width="230" height="76"></div>
    <div class="mouseover-hint" id="mouseover-linkedin"><img src="<?php bloginfo('template_directory'); ?>/images/see-connected.png" width="157" height="55"></div>
    <div class="mouseover-hint" id="mouseover-rss"><img src="<?php bloginfo('template_directory'); ?>/images/subscribe.png" width="153" height="67"></div>
    
    <center><div id="top_links">
        <a href="http://www.twitter.com/HackerChick" target="_blank" onmouseover="ShowPicture('mouseover-twitter')" onmouseout="HidePicture('mouseover-twitter')"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" width="60" height="56" border="0" alt="Follow The Hacker Chick on Twitter" /></a>
        <a href="http://www.facebook.com/HackerChickLabs" target="_blank" onmouseover="ShowPicture('mouseover-facebook')" onmouseout="HidePicture('mouseover-facebook')"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" width="60" height="56" border="0" alt="Share how you're pushing the edge on Hacker Chick Labs" /></a>
        <a href="http://www.linkedin.com/in/abbyfichtner" target="_blank" onmouseover="ShowPicture('mouseover-linkedin')" onmouseout="HidePicture('mouseover-linkedin')"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" width="60" height="56" border="0" alt="See how we're connected on LinkedIn" /></a>
        <a href="http://feeds.feedburner.com/TheHackerChickBlog" target="_blank" onmouseover="ShowPicture('mouseover-rss')" onmouseout="HidePicture('mouseover-rss')"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" width="60" height="56" border="0" alt="Subscribe to The Hacker Chick Blog" /></a>
    </div></center>

    <div style="clear: both;"></div> 

    
    <!-- FACEBOOK -->
    <div class="fb-like-box" data-href="http://www.facebook.com/HackerChickLabs" data-width="273" data-height="480" data-show-faces="true" data-stream="true" data-border-color="#e7e0d8" data-header="false"></div>    
    <!-- FACEBOOK: END -->

    <!-- FAVORITES -->
    <div class="item">
    <p><img class="sidebar_header_image" src="<?php bloginfo('template_directory'); ?>/images/favorites.png" width="176" height="27" alt="Favorites"/>
    <?php display_favorites( 10 ); ?></p>
    </div>
    <!-- FAVORITES: END -->

    <!-- TAGS -->
    <div class="item">
    <img class="sidebar_header_image" src="<?php bloginfo('template_directory'); ?>/images/topics.png" width="125" height="27" alt="topics"/>

    <p class="tagCloud"><?php wp_tag_cloud( array('smallest' => 8, 'largest' => '16' ) ); ?></p>
    </div>
    <!-- TAGS: END -->

    <!-- SEARCH -->
    <div class="item">
    <img class="sidebar_header_image" src="<?php bloginfo('template_directory'); ?>/images/search.png" width="136" height="28" alt="search"/>
    <?php get_search_form(); ?>
    </div>
    <!-- SEARCH: END -->
    

    <!-- BADGES -->
    <div class="item" id="badges">
    <div id="badge-topblogs"><a href="http://agilescout.com/top-agile-blogs-200/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/agile-top-200-blogs.png" width="100" height="94" alt="Top 200 Agile Blogs" border="0"/></a></div>
    <div id="badge-agile11"><a href="http://program2011.agilealliance.org/event/bbbd058a97e906ab96d85c0aa712a751" title="Lean Startup: How Development Looks Different When You're Changing the World" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-agile2011.png" width="150" height="68" alt="Agile 2011" border="0"/></a></div>
    <div id="badge-geekgirl"><a href="http://www.geekgirlblogs.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-geekgirlblogs.png" width="142" height="50" alt="Geek Girl Blogs" border="0"/></a></div>
    <div id="badge-devchix"><a href="http://www.devchix.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-devchix.png" width="69" height="75" alt="DevChix" border="0"/></a></div>
    <div id="badge-bbw"><a href="http://www.blogsbywomen.org/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-blogsbywomen.png" width="80" height="15" alt="Blogs by Women" border="0"/></a></div>
    </div>
    <!-- BADGES: END -->


    
</div></div>
<!-- SIDEBAR: END -->