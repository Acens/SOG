<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scrum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('notificacao_model');
		$this->load->model('login_model');
        $this->login_model->logged();
	}


	/*Chamada para o scrum*/
	public function index()
	{
		$notificacao = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);
		$this->load->view('scrum/projetos_alocados',$notificacao);
	}


	public function quadro()
	{
		$this->load->view('scrum/quadro');
	}

}