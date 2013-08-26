<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rh extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('membros_model');
		$this->load->model('notificacao_model');
		$this->load->model('login_model');
        $this->login_model->logged();


	}

	public function index()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		$this->load->view('rh/rh_principal',$dados);
	}

	public function membros()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'membros' => $this->membros_model->get_all()->result(),
			);
		$this->load->view('rh/membros',$dados);
	}


	public function presenca()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		$this->load->view('rh/presenca',$dados);
	}

	public function atividades()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		$this->load->view('rh/atividades',$dados);
	}

	public function documentos()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		$this->load->view('rh/documentos',$dados);
	}

	public function processo_seletivo()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		$this->load->view('rh/processo_seletivo',$dados);
	}

	public function termo_de_volutariado()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		$this->load->view('rh/termo',$dados);
	}

	public function treinamentos()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		$this->load->view('rh/treinamentos',$dados);
	}

	public function programa_trainee()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		$this->load->view('rh/programa_trainee',$dados);
	}

	public function desligamento()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		$this->load->view('rh/desligamento',$dados);
	}

	public function inserir_membros()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		
		$this->form_validation->set_rules('nome','NOME','required|is_unique[membros.nome]');
		$this->form_validation->set_rules('senha','SENHA','required|min_length[5]');
		$this->form_validation->set_message('matches','O campo %s está diferente do campo %s');
		$this->form_validation->set_rules('confirme_senha','CONFIRME SENHA','required|matches[senha]');
		$this->form_validation->set_rules('email_pessoal','EMAIL PESSOAL','required|strtolower|valid_email|is_unique[membros.email_pessoal]');
		$this->form_validation->set_rules('email_empresarial','EMAIL EMPRESARIAL','strtolower|valid_email|is_unique[membros.email_empresarial]');
		$this->form_validation->set_rules('nascimento','DATA DE NASCIMENTO','required');
		$this->form_validation->set_rules('matricula','MATRICULA NA FACULDADE','required','exact_length[7]');
		$this->form_validation->set_rules('telefone1','TELEFONE 1','required');
		$this->form_validation->set_rules('ingresso','INGRESSO NA EMPRESA','required');
		$this->form_validation->set_rules('cargo','CARGO','required');

		if($this->form_validation->run()==TRUE){
			$inseir = elements(array('nome','senha','nascimento','matricula','email_pessoal','email_empresarial','telefone1','telefone2','bairro','rua','numero','cep','ingresso','cargo','skype','github'),$this->input->post());
			$inserir['senha'] = md5($inserir['senha']);
			$this->membros_model->insert($inserir);
		}
		$this->load->view('rh/membros',$dados);
	}

	public function mostrar_membros()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'membros' => $this->membros_model->get_all()->result(),
			);
		$this->load->view('rh/mostrar',$dados);
	}




}