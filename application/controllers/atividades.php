<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Atividades extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('notificacao_model');
		$this->load->model('projetos_model');
		$this->load->model('membproj_model');
		$this->load->model('atividades_model');
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
			'atividade' => $this->atividades_model->checar(),
			);
		$this->load->view('atividades/atividade',$dados);
	}


	public function inserir_atividade()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'projetos' => $this->projetos_model->get_all()->result(),
			'meus_projetos' => $this->membproj_model->procurar_meus_projetos(),
			);

		$this->form_validation->set_rules('atividade','ATIVIDADE','required');
		if($this->form_validation->run()==TRUE){
			$atividade = $this->input->post();
			$inserir = array(
				'id_memb' => $this->session->userdata('id_usuario'),
				'date' => date("y-m-d"),
				'atividade' => $atividade['atividade'], 
				);
			$banco = $this->atividades_model->checar();
			if($banco==0){
				$this->atividades_model->insert($inserir);	
			}
			else{
				$up = array(
					'inserir' => $inserir,
					'id' => $banco[0]['id'], 
					);
				$this->atividades_model->update($up);
			}



			redirect($this->index());

		}

	}

}