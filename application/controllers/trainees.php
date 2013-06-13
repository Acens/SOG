<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trainees extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('trainee/trainee_principal');
	}
}