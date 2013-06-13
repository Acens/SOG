<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rh extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('rh/rh_principal');
	}
}