<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scrum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('notificacao_model');
		$this->load->model('projetos_model');
		$this->load->model('membproj_model');
		$this->load->model('sprint_model');
		$this->load->model('postit_model');
		$this->load->model('login_model');
        $this->login_model->logged();
	}


	/*Chamada para o scrum*/
	public function index()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'projetos' => $this->projetos_model->get_all()->result(),
			'meus_projetos' => $this->membproj_model->procurar_meus_projetos(),
			);
		$this->load->view('scrum/projetos_alocados',$dados);
	}

	public function sprint()
	{
		$sprint_chave_pro = $this->input->post('sprint_chave_pro');
		$nome = $this->input->post('nome');
		$percentual = $this->input->post('percentual');


		$projeto= array(
			'sprint_chave_pro' => $sprint_chave_pro,
			'projeto' => $nome,
			'percentual' => $percentual,
			);


		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'projetos' => $this->projetos_model->get_all()->result(),
			'sprint' => $this->sprint_model->procurar_sprint($sprint_chave_pro),
			'meu_projeto' => $projeto,
			);
		$this->load->view('scrum/sprints',$dados);
	}

	public function inserir_sprint()
	{
		$inserir = array(
			'sprint_chave_pro' => $this->input->post('sprint_chave_pro'),
			'sprint_numero' => $this->input->post('sprint_numero'),
			'sprint_inicio' => $this->input->post('sprint_inicio'),
			'sprint_final' => $this->input->post('sprint_final'),
			'sprint_obs' => $this->input->post('sprint_obs'), 
			);
		$this->sprint_model->insert($inserir);
		
		$projeto= array(
			'chave_projeto' => $this->input->post('sprint_chave_pro'),
			'chave_sprint' => $this->input->post('sprint_numero'),
			);

		$postit['quantidade'] = 0;

		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'projeto' => $projeto,
			'postit' => $postit,
			);

		$this->load->view('scrum/quadro',$dados);
//		redirect('scrum/sprint');
	}


	public function quadro()
	{

		$projeto= array(
			'chave_projeto' => $this->input->post('sprint_chave_pro'),
			'chave_sprint' => $this->input->post('sprint_numero'),
			'nome_projeto' => $this->projetos_model->id_projetos($this->input->post('sprint_chave_pro')),
			);


		$postit = $this->postit_model->procurar_postit($projeto);


		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'projeto' => $projeto,
			'postit' => $postit,
			);

		$this->load->view('scrum/quadro',$dados);
	}


	public function inserir_postit()
	{
		if($this->input->post('postit_cor') == 'red'){
			$prioridade = 'A';
		}elseif ($this->input->post('postit_cor') == 'blue') {
			$prioridade = 'B';
		}elseif ($this->input->post('postit_cor') == 'roxo') {
			$prioridade = 'C';
		}elseif ($this->input->post('postit_cor') == 'verde') {
			$prioridade = 'D';
		}elseif ($this->input->post('postit_cor') == 'musgo') {
			$prioridade = 'E';
		}elseif ($this->input->post('postit_cor') == 'ouro') {
			$prioridade = 'F';
		}elseif ($this->input->post('postit_cor') == 'amarelo') {
			$prioridade = 'G';
		}


		$inserir= array(
			'postit_chave_pro' => $this->input->post('chave_projeto'),
			'postit_chave_sprint' => $this->input->post('chave_sprint'),
			'postit_titulo' => $this->input->post('postit_titulo'),
			'postit_prioridade' => $prioridade,
			'postit_cor' => $this->input->post('postit_cor'),
			'postit_horas' => $this->input->post('postit_horas'),
			'postit_conteudo' => $this->input->post('postit_conteudo'),
			'postit_status' => 'fazer',
			);

		$this->postit_model->insert($inserir);

		

		$projeto= array(
			'chave_projeto' => $this->input->post('chave_projeto'),
			'chave_sprint' => $this->input->post('chave_sprint'),
			'nome_projeto' => $this->projetos_model->id_projetos($this->input->post('chave_projeto')),
			);

		$postit = $this->postit_model->procurar_postit($projeto);

		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'projeto' => $projeto,
			'postit' => $postit,
			);

		$this->load->view('scrum/quadro',$dados);

	}



}