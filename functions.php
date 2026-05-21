<?php
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

add_theme_support( 'post-thumbnails' );
 
 
 // Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

 
 
/* Header Notification Bar Widget Start */ 


function TopBar_Announcement_Widget() {
	register_sidebar(array(
		'name' 		  => __('TopBar Announcement Widget'),
		'id'		  => 'TopBar_Announcement',
		'description' => 'Top Announcement Widgets',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title' => '<div class="widget-title">',
		'after_title'  => '</div>',
	) );
}
add_action('widgets_init', 'TopBar_Announcement_Widget');

 

/* Header Notification Bar Widget End */ 
?>