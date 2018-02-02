<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include 'Welcome.php';

class Tango extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
        // Welcome::index();
        $this->show(5);

	}

}
