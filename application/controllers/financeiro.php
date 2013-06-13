<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Financeiro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('financeiro/financeiro_principal');
	}

	public function orcamento()
	{
		$this->load->view('financeiro/orcamento');
	}

	public function balancete()
	{
		$this->load->view('financeiro/balancete');
	}		
}