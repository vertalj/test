<?php
/*
Plugin Name: Test
Description: Manage your password!
Version:     1.0.0
Author:      Varion
 *
 */
namespace Test;

require_once plugin_dir_path( __FILE__ ) . 'classes/cpt.php';


class Test
{
	public function __construct()
	{
		$this->init();
	}
	protected function init()
	{
		CPT::register();

	}
}

new Test();