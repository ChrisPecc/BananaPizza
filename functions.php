<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
function add_normalize_CSS()
{
    wp_enqueue_style('normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
