<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/*Chamada para página Principal*/
	public function index()
	{
		$this->load->view('principal');
	}

	/*Chamada provisória página Login  http://localhost/SOG/index.php/index/login */
	public function login()
	{
		$this->load->view('login');
	}


	/*Funções de chamadas para páginas SOBRE*/
	public function sobre_presidencia()
	{
		$this->load->view('sobre_cargos/sobre_presidencia');
	}

	public function info_gerais()
	{
		$this->load->view('info/info_gerais');
	}

	/*Chamada para o scrum*/
	public function projetos_alocados()
	{
		$this->load->view('scrum/projetos_alocados');
	}

	/*Funções de chamadas para páginas DAS DIRETORIAS*/
	public function presidencia_principal()
	{
		$this->load->view('presidencia/presidencia_principal');
	}

	public function financeiro_principal()
	{
		$this->load->view('financeiro/financeiro_principal');
	}

	public function rh_principal()
	{
		$this->load->view('rh/rh_principal');
	}

	public function projetos_principal()
	{
		$this->load->view('projetos/projetos_principal');
	}		

	public function marketing_principal()
	{
		$this->load->view('marketing/marketing_principal');
	}

	public function trainee_principal()
	{
		$this->load->view('trainee/trainee_principal');
	}		
}
