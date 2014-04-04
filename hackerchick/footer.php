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

<div class="footer-bar">
  <img class="footer-image" />
  <p>Information wants to be free. The Hacker Chick Blog by <a href="<?php echo get_option('home'); ?>">Abby Fichtner</a>
    is licensed under a <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/us/" target="_blank">Creative Commons
    Attribution-Noncommercial Share Alike 3.0 License</a>.</p>
</div> <!-- End Footer Bar -->

</div>
<!-- *************************************************** END FOOTER ********************************************************** -->
        
</div></div>
<!-- PAGE: END (close sitecontainer + page) -->


<!-- FitText -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fittext.js"></script>
<script type="text/javascript">
  $(".title").fitText(1, { minFontSize: '32px', maxFontSize: '56px' });
  $(".teaser-headline").fitText(2, { minFontSize: '18px', maxFontSize: '26px' });
</script>

<!-- FluidVids -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fluidvids.js"></script>

<!-- Clicky Analytics -->
<script src="http://static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">clicky.init(204927);</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="http://in.getclicky.com/204927ns.gif" /></p></noscript>

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


</body>
</html>
