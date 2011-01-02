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
    <!-- HACKER CHICjK : END -->

    <div class="sidebar_content">

    <!-- HACKER -->
    <div class="item">
    <!-- NOTE: Title Image"Hacker" is in the Header -->
    <p>Someone who thinks outside the box. Someone who discards conventional wisdom and does something else instead. Someone who looks at the edge and wonders what's beyond. Someone who sees a set of rules and wonders what happens if you don't follow them. <font size="-1"><em>- Bruce Schneier</em></font></p>
    </div>
    <!-- HACKER: END -->

    <div id="hackerchick_spacer"></div>

    <!-- FACEBOOK -->
    <div class="facebookiframe">
    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FHackerChickLabs&amp;width=285&amp;connections=0&amp;stream=true&amp;header=false&amp;height=427"
            scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:285px; height:427px;" allowTransparency="true"></iframe>
    </div>
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
    <div id="badge-adp"><a href="http://www.sqe.com/AgileDevPracticesWest/Concurrent/Default.aspx?Day=Wednesday#AW8" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-agiledevpractices.png" width="59" height="73" alt="Agile Development Practices" border="0"/></a></div>
    <div id="badge-agile10"><a href="http://agile2010.agilealliance.org/testing.html#5514" title="Better Story Testing through Programmer-Tester Pairing" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-agile2010.png" width="110" height="66" alt="Agile 2010" border="0"/></a></div>
    <div id="badge-geekgirl"><a href="http://www.geekgirlblogs.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-geekgirlblogs.png" width="142" height="50" alt="Geek Girl Blogs" border="0"/></a></div>
    <div id="badge-devchix"><a href="http://www.devchix.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-devchix.png" width="69" height="75" alt="DevChix" border="0"/></a></div>
    <div id="badge-bbw"><a href="http://www.blogsbywomen.org/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/badge-blogsbywomen.png" width="80" height="15" alt="Blogs by Women" border="0"/></a></div>
    </div>
    <!-- BADGES: END -->

    <div style="clear: both;"></div> 
    <!-- CC LICENSE -->
    <center>
    <div class="item" id="cc_license">
    <p>Information wants to be free<br/>
    <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/creative-commons.png" width="88" height="31" alt="Creative Commons Attribution-Noncommercial-Share Alike License" border="0"/></a><br/>
    The Hacker Chick Blog by <a href="http://www.TheHackerChickBlog.com">Abby Fichtner</a> is licensed under a <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/" target="_blank">Creative Commons Attribution-Noncommercial Shake Alike 3.0 Lience</a>.</p>

    <p><strong><em>Disclaimer: The opinions expressed herein are my own personal opinions and do not represent my employer's view in anyway.</em></strong></p>
    </div></center>
    <!-- CC LICENSE: END -->
    
</div></div>
<!-- SIDEBAR: END -->