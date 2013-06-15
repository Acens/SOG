<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Marketing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/*Chamada para página Principal do Marketing*/
	public function index()
	{
		$this->load->view('marketing/marketing_principal');
	}

	public function planos_de_marketing()
	{
		$this->load->view('marketing/planos_marketing');
	}	

	public function briefings()
	{
		$this->load->view('marketing/briefings');
	}

	public function material_promocional()
	{
		$this->load->view('marketing/material_promo');
	}	

	public function newsletter()
	{
		$this->load->view('marketing/newsletter');
	}	

	public function manual_da_marca()
	{
		$this->load->view('marketing/manual_marca');
	}		

	public function pesquisas()
	{
		$this->load->view('marketing/pesquisas');
	}				
}
