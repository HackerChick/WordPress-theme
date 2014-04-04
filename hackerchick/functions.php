<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/* Add thumbnail support */
add_theme_support( 'post-thumbnails' );
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Secondary Image',
            'id' => 'secondary-image',
            'post_type' => 'post'
        )
    );
}


/* ----------------------------
  UTILS
  ----------------------------- */
function is_ie()
{
    if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        return true;
    else
        return false;
}

function is_even($number) {
  return !($number & 1);
}

function shorten_text($text, $length) {
    if ( strlen($text) > $length ) {
	$text = substr($text,0,$length);
	echo $text . $after;
    } else {
	 echo $text;
    }
}
