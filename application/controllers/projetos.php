<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projetos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('membros_model');
		$this->load->model('notificacao_model');
		$this->load->model('login_model');
		$this->load->model('projetos_model');
		$this->load->model('membproj_model');
        $this->login_model->logged();

	}

	public function index()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			);

		$this->load->view('projetos/projetos_principal',$dados);
	}

	public function scrum_de_projetos()
	{
		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'projetos' => $this->projetos_model->get_all()->result(),
			'membros' => $this->membros_model->get_all()->result(),
			);
		$this->load->view('projetos/scrum_de_projetos',$dados);
	}

	public function inserir_projeto()
	{
		$this->form_validation->set_rules('pro_nome','NOME','required|is_unique[projetos.pro_nome]');
		$this->form_validation->set_rules('pro_inicio','DATA DE INICIO','required');
		$this->form_validation->set_rules('pro_prazo','DATA A SER ENTREGUE','required');
		$this->form_validation->set_rules('po','P.O.','required');
		$this->form_validation->set_rules('scrum','SCRUM MASTER','required');
		$this->form_validation->set_rules('desenvolvedor','DESENVOLVEDORES','required');
		

		if($this->form_validation->run()==TRUE){
			$dados = elements(array('pro_nome','pro_categoria','pro_inicio','pro_prazo','pro_obs'),$this->input->post());
			$desen = $this->input->post('desenvolvedor');
			$po = $this->input->post('po');
			$scrum = $this->input->post('scrum');
			//$desenvolvedores = elements('desenvolvedor',$this->input->post());
			//$vet_desenvolvedor = explode("/", $desenvolvedores->desenvolvedor);
			//echo '<pre>'; 
			//print_r($po);

			$this->projetos_model->insert($dados);
			$id_projeto = $this->projetos_model->procurar_projeto($dados);
			$id_po = $this->membros_model->procurar_membro($po);
			$id_scrum = $this->membros_model->procurar_membro($scrum);
			$id_desenvolvedor = $this->membros_model->procurar_membro($desen);
//			$id_projeto = $this->projetos_model->teste();
			//echo '<pre>'; 
			//echo $id_projeto[0]['id'];
			//print_r($id_projeto);
			//echo '<pre>'; 
			//echo $id_po[0]['id'];
			//print_r($id_po);

			
			$dados2 = array(
				'mp_chave_pro' => $id_projeto[0]['id'], 
				'mp_chave_membro' => $id_po[0]['id'],
				'mp_cargo' => 'P.O.',
				);
			$this->membproj_model->insert($dados2);

			
			$dados2 = array(
				'mp_chave_pro' => $id_projeto[0]['id'], 
				'mp_chave_membro' => $id_scrum[0]['id'],
				'mp_cargo' => 'Scrum Master',
				);
			$this->membproj_model->insert($dados2);

			//foreach ($vet_desenvolvedor as $desen) {

			
				$dados2 = array(
					'mp_chave_pro' => $id_projeto[0]['id'], 
					'mp_chave_membro' => $id_desenvolvedor[0]['id'],
					'mp_cargo' => 'Desenvolvedor',
					);
				$this->membproj_model->insert($dados2);

			//}



		}

		$dados = array(
			'notificacao' => $this->notificacao_model->get_all()->result(),
			'projetos' => $this->projetos_model->get_all()->result(),
			'membros' => $this->membros_model->get_all()->result(),
			);
		$this->load->view('projetos/scrum_de_projetos',$dados);
	}

}