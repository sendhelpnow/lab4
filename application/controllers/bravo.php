<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'Welcome.php';

class Bravo extends Welcome
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
        $this->show(2);

	}

}
