<?php
/**
 * Theme support and early call functionality required before init hook.
 *
 * @since	1.1
 * @version	2.0
 *
 * @todo Potentially use more add_theme_support functionality to Wonderflux?
 */
class wflux_theme_support  extends wflux_data {

	function __construct(){
		parent::__construct();
	}

	/**
	 * Enables post and site/post comment RSS feed links in head of output.
 	 * THIS IS REQUIRED for WordPress theme repo compliance.
 	 * Easy to remove by remove_theme_support, remove_action, overload function etc!)
 	 *
	 * @since	1.1
	 * @version	2.0
	 *
	 * @param							none
	 */
	function wf_core_feed_links() {
		add_theme_support( 'automatic-feed-links' );
	}

	/**
	 * Enables title-tag support (available in WordPress 4.1+)
 	 * THIS IS REQUIRED for WordPress theme repo compliance.
 	 * Easy to remove by remove_theme_support, remove_action, overload function etc!)
 	 *
	 * @since	2.0
	 * @version	2.0
	 *
	 * @param							none
	 */
	function wf_core_title_tag() {
		if ( function_exists( '_wp_render_title_tag' ) ) {
			add_theme_support( 'title-tag' );
		}
	}

	/**
	 * Enables HTML5 support (the WordPress way!)
 	 * Easy to remove by remove_theme_support, remove_action, overload function etc!)
 	 *
	 * @since	2.3
	 * @version	2.3
	 *
	 * @param							none
	 */
	function wf_core_support_html5(){

		if ( $this->wfx_doc_type == 'html5' ) {

			add_theme_support( 'html5',
				array(
					'comment-list',
					'comment-form',
					'search-form',
					'gallery',
					'caption'
				)
			);

		}

	}

}