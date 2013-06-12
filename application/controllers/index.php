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
	
	/*Chamada para as diretorias*/
	public function recursos_humanos()
	{
		$this->load->view('diretorias/recursos_humanos');
	}

	/*Chamada para as recursos humanos*/
	public function membros()
	{
		$this->load->view('recursos_humanos/membros');
	}

public function inserir_membros()
	{
		//$this->load->view('recursos_humanos/membros');
		
		$this->form_validation->set_rules('nome','NOME','required');

		if($this->form_validation->run()==TRUE){
			$dados = elements(array('nome','senha','nascimento','matricula','email_pessoal','email_empresarial','telefone1','telefone2','bairro','rua','numero','cep','ingresso','cargo','skype','github'),$this->input->post());
			$dados['senha'] = md5($dados['senha']);
			$this->load->model('membros_model');
			$this->membros_model->insert($dados);
		}

	}



}
