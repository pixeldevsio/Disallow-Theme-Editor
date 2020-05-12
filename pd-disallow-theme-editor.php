<?php
/**
* Plugin Name: Disallow Theme Editing
* Plugin URI: https://www.pixeldevs.io
* Description: Disables theme editing on non-child themes
* Version: 1.0
* Author: PixelDevs
* Author URI: https://www.pixeldevs.io
**/

add_action(
  'init',
  function () {
    if (get_template_directory() === get_stylesheet_directory()) {
      define( 'DISALLOW_FILE_EDIT', true );
	    chmod("" . get_stylesheet_directory() . "", 0555);
    } else {
      define( 'DISALLOW_FILE_EDIT', false );
    }
  }
);
?>