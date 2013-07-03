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

	public function contratos()
	{
		$this->load->view('financeiro/contratos');
	}

	public function propostas()
	{
		$this->load->view('financeiro/propostas');
	}	

	public function balancetes()
	{
		$this->load->view('financeiro/balancete');
	}		

	public function contas_a_pagar()
	{
		$this->load->view('financeiro/contas');
	}
}