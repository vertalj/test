<?php
namespace Test;

class CPT
{
	protected static $labels = array(
		
	);
	public static function register()
	{
		self::initLabels();

		add_action( "init", array( "Test\CPT", "RegisterAds" ) );
	}
	protected static function initLabels()
	{
		self::$labels = array(
			'name' 			=> __( 'Test' ),
		    'singular_name' => __( 'Test' ),
		    'menu_name'     => __( 'Test' ),
		    'add_new_item'	=> __( 'Add new test' ),
		    'add_new'	    => __( 'New test' )
		);
	}
	public static function registerAds()
	{
		register_post_type( 'test',
    		// CPT Options
	        array(
	            'labels' => self::$labels,
	            'show_in_rest' => true,
	            'public' => true,
	            'has_archive' => true,
	            'rewrite' => array( 'slug' => 'test' ),
	            'supports' => array( 'title', 'editor' ),
	            'show_ui' => true,
	            'menu_position' => 5,
	            'show_in_menu' => true,
	            'show_in_nav_menus' => true
	        )
	    );
	}
}