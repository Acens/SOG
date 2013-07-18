<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scrum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('notificacao_model');
		$this->load->model('projetos_model');
		$this->load->model('membproj_model');
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


	public function quadro()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'projetos' => $this->projetos_model->get_all()->result(),
			'meus_projetos' => $this->membproj_model->procurar_meus_projetos(),
			);

		$this->load->view('scrum/quadro',$dados);
	}

}