<?php
/**
 * @package WordPress
 * @subpackage Hackerchick_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

<script language="Javascript">
<!--
var timer = null;

function ShowPicture(id) {
    CancelDefaultMouseoverDisplay(id);
    
    if (document.layers) document.layers[''+id+''].visibility = "show";
    else if (document.all) document.all[''+id+''].style.visibility = "visible";
    else if (document.getElementById) document.getElementById(''+id+'').style.visibility = "visible";
}

function HidePicture(id) {
    if (document.layers) document.layers[''+id+''].visibility = "hide";
    else if (document.all) document.all[''+id+''].style.visibility = "hidden";
    else if (document.getElementById) document.getElementById(''+id+'').style.visibility = "hidden";

    try{
        if( id != 'mouseover-default' ) timer = setTimeout("ShowPicture( 'mouseover-default' )", 2000 );
    }catch (error){}
}

function CancelDefaultMouseoverDisplay(id){
    clearTimeout( timer );
    try{
	if( id != 'mouseover-default' ) HidePicture( 'mouseover-default' );
    }catch (error){}
}

//-->
</script>

</head>
<body>
<div id="page">

<!-- ************************************************************************************************************************* -->
<!-- HEADER                                                                                                                    -->
<!-- ************************************************************************************************************************* -->
<div id="header">
          
    <div id="headerimg">
        <a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/title.png" width="762" height="96" border="0" alt="The Hacker Chick Blog: Looking at the edge &amp; wondering what's beyond" /></a>
    </div>
           
    <a class="aboutLink" href="<?php echo get_option('home'); ?>/about">&nbsp;</a> 

    <!-- SOCIAL MEDIA LINKS -->
    <div class="mouseover-hint" id="mouseover-twitter"><img src="<?php bloginfo('template_directory'); ?>/images/follow-me.png" width="148" height="56"></div>
    <div class="mouseover-hint" id="mouseover-facebook"><img src="<?php bloginfo('template_directory'); ?>/images/share-on-facebook.png" width="230" height="76"></div>
    <div class="mouseover-hint" id="mouseover-linkedin"><img src="<?php bloginfo('template_directory'); ?>/images/see-connected.png" width="157" height="55"></div>
    <div class="mouseover-hint" id="mouseover-rss"><img src="<?php bloginfo('template_directory'); ?>/images/subscribe.png" width="153" height="67"></div>
    
    <div id="top_links">
        <a href="http://www.twitter.com/HackerChick" target="_blank" onmouseover="ShowPicture('mouseover-twitter')" onmouseout="HidePicture('mouseover-twitter')"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" width="60" height="56" border="0" alt="Follow The Hacker Chick on Twitter" /></a>
        <a href="http://www.facebook.com/HackerChickLabs" target="_blank" onmouseover="ShowPicture('mouseover-facebook')" onmouseout="HidePicture('mouseover-facebook')"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" width="60" height="56" border="0" alt="Share how you're pushing the edge on Hacker Chick Labs" /></a>
        <a href="http://www.linkedin.com/in/abbyfichtner" target="_blank" onmouseover="ShowPicture('mouseover-linkedin')" onmouseout="HidePicture('mouseover-linkedin')"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" width="60" height="56" border="0" alt="See how we're connected on LinkedIn" /></a>
        <a href="http://feeds.feedburner.com/TheHackerChickBlog" target="_blank" onmouseover="ShowPicture('mouseover-rss')" onmouseout="HidePicture('mouseover-rss')"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" width="60" height="56" border="0" alt="Subscribe to The Hacker Chick Blog" /></a>
    </div>

    <!-- TOP OF THE SIDEBAR (yes, this is awkward) -->
    <div style="clear: both;"></div> 
    <div id="top_of_sidebar">
    <img src="<?php bloginfo('template_directory'); ?>/images/hacker.png" width="134" height="27" alt="Hacker" border="0"/>
    </div>

    </div>
<div style="clear: both;"></div> 
<!-- HEADER: END -->
