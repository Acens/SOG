<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
class Membros_model extends CI_Model{

	public function insert($dados=NULL){
		if ($dados!=NULL) {
			$this->db->insert('membros',$dados);
			$this->session->set_flashdata('cadastrook','Cadastro efetuado com sucesso');
			redirect('index/membros');
		}
	}

	public function get_all(){
		return $this->db->get('membros');

	}


}