<?php
/*
Plugin Name: Classic Mode
Plugin URI: n/a
Description: Sets up your WordPress installation admin panel to classic mode prior to version 5.0 | Dated: 10th Aug, 2022
Author:  Aamir Hussain
Version: 1.0
Author URI: n/a
 */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_theme_support( 'block-templates' );
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );