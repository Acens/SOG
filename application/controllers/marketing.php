<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marketing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/*Chamada para página Principal*/
	public function index()
	{
		$this->load->view('marketing/marketing_principal');
	}

	public function material_promocional()
	{
		$this->load->view('marketing/material_promo');
	}	
}
