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
<!-- Facebook Like Box plugin -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end Facebook Like Box plugin -->

<div id="page">

<!-- ************************************************************************************************************************* -->
<!-- HEADER                                                                                                                    -->
<!-- ************************************************************************************************************************* -->
<div id="header">

   <div class="menu">
      <a class="menu_item" href="<?php echo get_option('home'); ?>">Home</a>
      &nbsp;|&nbsp;&nbsp;&nbsp;
      Topics:
      <a class="menu_item" href="<?php echo get_option('home'); ?>/category/agile">Agile</a>
      <a class="menu_item" href="<?php echo get_option('home'); ?>/category/programming">Dev</a>
      <a class="menu_item" href="<?php echo get_option('home'); ?>/category/startups">Startups</a>
      <a class="menu_item" href="<?php echo get_option('home'); ?>/category/community">Community/Culture</a>
      

      &nbsp;|&nbsp;
      <a class="menu_item" href="<?php echo get_option('home'); ?>/about">About</a> 
      <a class="menu_item" href="<?php echo get_option('home'); ?>/resume">Resume</a>
      <a class="menu_item" href="http://www.slideshare.net/HackerChick" target=_new>Presentations</a>
   </div>      
          
    <div id="headerimg">
        <a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/title-top.png" width="781" height="42" border="0" alt="The Hacker Chick Blog" /></a><img src="<?php bloginfo('template_directory'); ?>/images/title-bottom.png" width="762" height="54" border="0" alt="Looking at the edge &amp; wondering what's beyond" />
    </div>

</div>
<!-- HEADER: END -->
