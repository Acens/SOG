<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('login_model');
	}

	/*Chamada para página Principal*/
	public function index()
	{
		$this->load->view('login');
		/*$this->load->view('principal');*/
	}
	
	public function login(){
		// VALIDATION RULES
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');



        // MODELO MEMBERSHIP
        $query = $this->login_model->validate();

       
            if ($query) { // VERIFICA LOGIN E SENHA
                $data = array(
                    'username' => $this->input->post('username'),
                    'logged' => true
                );
                $this->session->set_userdata($data);
                $this->load->view('principal');
            } else {
                redirect($this->index());
            }
        
    
	}


	public function logout(){
		$this->session->sess_destroy();
		$this->load->view('login');
	}
	public function principal()
	{
		$this->load->view('principal');
	}



	/*Chamada para página de testes*/
	public function teste()
	{
		$this->load->view('teste');
	}	

	/*Chamada provisória página Login  http://localhost/SOG/index.php/index/login */
	/*public function login()
	{
		$this->load->view('login');
	}
*/

	/*Funções de chamadas para páginas SOBRE*/
	public function sobre_a_presidencia()
	{
		$this->load->view('presidencia/sobre_presidencia');
	}

	public function informacoes_gerais()
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

	

	/*Funções de chamadas para páginas DAS DIRETORIAS*/
	public function presidencia()
	{
		$this->load->view('presidencia/presidencia_principal');
	}

	public function financeiro()
	{
		$this->load->view('financeiro/financeiro_principal');
	}

	public function rh()
	{
		$this->load->view('rh/rh_principal');
	}

	public function projetos()
	{
		$this->load->view('projetos/projetos_principal');
	}		

	public function marketing()
	{
		$this->load->view('marketing/marketing_principal');
	}

	public function trainee()
	{
		$this->load->view('trainee/trainee_principal');
	}		
}
