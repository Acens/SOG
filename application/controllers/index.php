<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->load->view('principal');
	}

	public function sobre_presidencia()
	{
		$this->load->view('sobre_cargos/sobre_presidencia');
	}

	public function info_gerais()
	{
		$this->load->view('info/info_gerais');
	}
}
