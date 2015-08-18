<?php
/**
 * @package WordPress
 * @subpackage Hackerchick_Theme
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />  

  <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico?v=3" type="image/x-icon" />
  
  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />

  <!-- Style Sheets -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/grid.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

  <!-- JavaScript -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script>
    // Used by functions.js for social media sharing, need here for PHP
    var pageURL = escape("<?php the_permalink(); ?>");
    var pageTitle = escape("<?php the_title(); ?>");
  </script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>

  <!-- News Feeds -->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); /* required just before closing </head> */ ?>
</head>

<body>
<div id="page">

<!-- Mobile Menu -->
<div id="mobile-menu">
  <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>/" accept-charset="utf-8">
    <input id="mobile-menu-search" name="s" title="Enter the terms you wish to search for." type="text" value="" size="15" maxlength="128" />
    <input type="submit" id="searchsubmit" value="Go!" style="display: none;"/>
  </form>
  <ul class="mobile-menu-items">
    <li><a href="<?php echo home_url(); ?>/category/Technology">Technology</a></li>
    <li><a href="<?php echo home_url(); ?>/category/Inspiration">Inspiration</a></li>
    <li><a href="<?php echo home_url(); ?>/category/Community">Community</a></li>
    <li><hr /></li>
    <li><a href="<?php echo home_url(); ?>/Social">Social</a></li>
    <li><a href="<?php echo home_url(); ?>/About">About</a></li>
    <li><a href="<?php echo home_url(); ?>/Speaking">Speaking</a></li>
    <li><a href="<?php echo home_url(); ?>/Contact">Hire Abby</a></li>
  </ul>
</div>

<!-- Topics Menu Dropdown -->
<div id="dropdown-menu">
  <ul class="dropdown-menu-items menu-items">
    <li><a href="<?php echo home_url(); ?>/category/technology">Technology</a></li>
    <li><a href="<?php echo home_url(); ?>/category/inspiration">Inspiration</a></li>
    <li><a href="<?php echo home_url(); ?>/category/community">Community</a></li>
  </ul>
</div>

<!-- SITE CONTAINER is everything that gets pushed to the side when the mobile menu is opened -->
<div id="sitecontainer">

 
<!-- ************************************************************************************************************************* -->
<!-- HEADER                                                                                                                    -->
<!-- ************************************************************************************************************************* -->
<div id="header">
  <div class="header-titlebar group">
    <a href="#" id="header-mobile-menu-button"><img src="<?php bloginfo('template_directory'); ?>/imgs/mobile-menu.png" alt="menu" /></a>
    <a href="<?php echo home_url(); ?>"><div class="header-title"></div></a>    
    <div class="menu">
      <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>/" accept-charset="utf-8">
        <a href="#" id="menu-search"></a>
        <input id="menu-search-field"  name="s" title="Enter the terms you wish to search for." type="text" value="" size="15" maxlength="128" />
        <input type="submit" id="searchsubmit" value="Go!" style="display: none;"/>
      </form>
      <ul class="nav-menu-items menu-items">
        <li><a href="#" id="topics-dropdown-menu">Topics</a></li>
        <li><a href="<?php echo home_url(); ?>/Social">Social</a></li>
        <li><a href="<?php echo home_url(); ?>/About">About</a></li>
        <li><a href="<?php echo home_url(); ?>/Speaking">Speaking</a></li>
        <li><a href="<?php echo home_url(); ?>/Contact">Hire Abby</a></li>
      </ul>
    </div>
  </div>
  
  <div class="header-spacer"></div>  
  <div class="header-titlebar-bottomwhitespace"></div>

  <?php if(!is_single()) { ?>
    <div class="header-bar group">
      <div class="header-hackerchick"></div> 
      <div class="header-symbols"></div>
    </div>
  <?php } ?>
</div>
<!-- *************************************************** END HEADER ********************************************************** -->
