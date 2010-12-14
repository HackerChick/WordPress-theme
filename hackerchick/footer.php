<?php
/**
 * @package WordPress
 * @subpackage Hackerchick_Theme
 */
?>

<!-- ************************************************************************************************************************* -->
<!-- FOOTER                                                                                                                   -->
<!-- ************************************************************************************************************************* -->
<div id="footer">
<div class="footer_container">
    
    <div id="column1">
    <!-- TWITTER (WHATCHA SAYIN?) -->
    <img class="footer_header" src="<?php bloginfo('template_directory'); ?>/images/whatcha-sayin.png" width="171" height="17" alt="Whatcha Sayin?"/>
    <?php display_twitterFeed( 7 ); ?>
    </div>
    
    <div id="column2">
    <center>
    <!-- PAST EVENTS (THE BIG ROOM) -->
    <img class="footer_header" src="<?php bloginfo('template_directory'); ?>/images/big-room.png" width="144" height="17" alt="The Big Room"/>
    <div class="past_event_pix">

    <a href="http://faststartup-customer-development.eventbrite.com/" target="_blank" onmouseover="ShowPicture('mouseover-picture10')" onmouseout="HidePicture('mouseover-picture10')"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture10.jpg" width="150" height="90" alt="Past Event Picture" border="0"/></a>
    <a href="http://blogs.msdn.com/b/cbowen/archive/2010/09/27/new-england-code-camp-14-the-schedule.aspx" target="_blank" onmouseover="ShowPicture('mouseover-picture9')" onmouseout="HidePicture('mouseover-picture9')"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture9.jpg" width="92" height="90" alt="Past Event Picture" border="0"/></a>
    <a href="http://startupbootcamp.mit.edu/" target="_blank" onmouseover="ShowPicture('mouseover-picture8')" onmouseout="HidePicture('mouseover-picture8')"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture8.jpg" width="118" height="90" alt="Past Event Picture" border="0"/></a>
    <a href="http://startupbootcamp.mit.edu/" target="_blank" onmouseover="ShowPicture('mouseover-picture7')" onmouseout="HidePicture('mouseover-picture7')"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture7.jpg" width="119" height="90" alt="Past Event Picture" border="0"/></a>
    <a href="http://www.newtechusa.com/agileboston" target="_blank" onmouseover="ShowPicture('mouseover-picture6')" onmouseout="HidePicture('mouseover-picture6')"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture6.jpg" width="87" height="90" alt="Past Event Picture" border="0"/></a>
    <a href="http://www.sqe.com/AgileDevPracticesWest/Concurrent/Default.aspx?Day=Wednesday#AW8" target="_blank" onmouseover="ShowPicture('mouseover-picture5')" onmouseout="HidePicture('mouseover-picture5')"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture5.jpg" width="153" height="90" alt="Past Event Picture" border="0"/></a>
    <a href="http://boston.startupweekend.com/" target="_blank" onmouseover="ShowPicture('mouseover-picture4')" onmouseout="HidePicture('mouseover-picture4')"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture4.jpg" width="116" height="90" alt="Past Event Picture" border="0"/></a>
    <a href="http://dogpatchlabs.com/" target="_blank" onmouseover="ShowPicture('mouseover-picture3')" onmouseout="HidePicture('mouseover-picture3')"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture3.jpg" width="147" height="90" alt="Past Event Picture" border="0"/></a>
<!--    <a href="http://www.agilebazaar.org/index.php?option=com_content&view=category&layout=blog&id=43&Itemid=115" target="_blank" onmouseover="ShowPicture('mouseover-picture2')" onmouseout="HidePicture('mouseover-picture2')"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture2.jpg" width="86" height="90" alt="Past Event Picture" border="0"/></a> -->
    <a href="http://www.microsoft.com/about/diversity/programs/digigirlz.mspx" target="_blank" onmouseover="ShowPicture('mouseover-picture1')" onmouseout="HidePicture('mouseover-picture1')"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture1.jpg" width="132" height="90" alt="Past Event Picture" border="0"/></a>
    </div>

    <!-- Mouseover Descriptions of the div -->
    <div class="mouseover-caption" id="mouseover-picture1"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture1-text.png" width="480" height="80"></div>
    <div class="mouseover-caption" id="mouseover-picture2"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture2-text.png" width="480" height="80"></div>
    <div class="mouseover-caption" id="mouseover-picture3"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture3-text.png" width="480" height="80"></div>
    <div class="mouseover-caption" id="mouseover-picture4"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture4-text.png" width="480" height="80"></div>
    <div class="mouseover-caption" id="mouseover-picture5"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture5-text.png" width="480" height="80"></div>
    <div class="mouseover-caption" id="mouseover-picture6"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture6-text.png" width="480" height="80"></div>
    <div class="mouseover-caption" id="mouseover-picture7"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture7-text.png" width="480" height="80"></div>
    <div class="mouseover-caption" id="mouseover-picture8"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture8-text.png" width="480" height="80"></div>
    <div class="mouseover-caption" id="mouseover-picture9"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture9-text.png" width="480" height="80"></div>
    <div class="mouseover-caption" id="mouseover-picture10"><img src="<?php bloginfo('template_directory'); ?>/images/pix/picture10-text.png" width="480" height="80"></div>
    
    <div class="mouseover-caption" id="mouseover-default""><img src="<?php bloginfo('template_directory'); ?>/images/pix/mouseover-text.png" width="480" height="90"></div>

    </center>
    </div>
    
    <div id="column3">
    <!-- TOP COMMENTORS -->
    <img class="footer_header" src="<?php bloginfo('template_directory'); ?>/images/top-commentors.png" width="188" height="17" alt="Top Commentors"/>
    <?php display_top_commentors( ); ?>
    <div style="clear: both;"></div> 
    <img style="margin-top:5px;" src="<?php bloginfo('template_directory'); ?>/images/thankyou.png" width="108" height="17" alt="You all rock!"/>

    <!-- UPCOMING EVENTS -->
    <img class="footer_header" id="upcoming_events_header" src="<?php bloginfo('template_directory'); ?>/images/upcoming-events.png" width="185" height="17" alt="Upcoming Events"/>
    <?php display_upcoming_events( ); ?>
    </div>

    <div style="clear: both;"></div> 

    <!-- POWERED / HOSTED BY -->
    <center><p class="footnote">[ The Hacker Chick Blog is proudly powered by <a href="http://wordpress.org/" target="_blank">WordPress</a> for <a href="http://www.microsoft.com/web/wordpress/default.aspx" target="_blank">Windows</a> | Hosted by <a href="http://www.appliedi.net/wordpress-windows-hosting/" target="_blank">Applied Innovations</a> ]</p></center>
    
</div></div>
<!-- FOOTER: END -->
        
</div>
<!-- PAGE: END -->

<!-- Clicky Analytics -->
<script src="http://static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">clicky.init(204927);</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="http://in.getclicky.com/204927ns.gif" /></p></noscript>
<!-- Clicky Analytics: END -->


<!-- Google Analytics -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("UA-4575117-1");
pageTracker._trackPageview();
} catch(err) {}</script>
<!-- Google Analytics: END -->

<!-- MyBlogLog -->
<script type='text/javascript' src='http://track4.mybloglog.com/js/jsserv.php?mblID=2010090916214531'></script>
<!-- MyBlogLog: END -->

</body>
</html>
