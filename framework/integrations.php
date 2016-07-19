<?php

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles');
function salient_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('font-awesome'));
    if ( is_rtl() ) 
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
}

add_action('wp_head','integratecodes');
add_action('widgets_init', 'salient_wm4d_footer_widget_wide');

function integratecodes() {
?>
	<script>
    (function($) {	
		$(document).ready(function() {
			var offer = $('p.datetoday').html();
			var date = new Date().toDateString();
			var fday = date.split(" ")[0];
			var month = date.split(" ")[1];
			var day = date.split(" ")[2];
			var year = date.split(" ")[3];
			var newdate =  fday+', '+month+' '+day+', '+year;
			$('p.datetoday').html(offer+' '+newdate);
	
		});
    })(jQuery);
    </script>
<?php
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function salient_wm4d_footer_widget_wide() {

	register_sidebar( array(
		'name'          => 'WM4D Footer Widget Wide',
		'id'            => 'salient_wm4d_footer_widget_wide',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'WM4D Header Widget Wide',
		'id'            => 'salient_wm4d_header_widget_wide',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	) );

}


?>