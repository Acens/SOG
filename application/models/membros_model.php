<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
class Membros_model extends CI_Model{

	public function insert($dados=NULL){
		if ($dados!=NULL) {
			$this->db->insert('membros',$dados);
			$this->session->set_flashdata('cadastrook','Cadastro efetuado com sucesso');
			redirect('rh/membros');
		}
	}

	public function get_all(){
		return $this->db->get('membros');

	}
/*
	public function procurar_membro($username){
		$this->db->where('username', $username);
        $dados = $this->db->select('id'); 
        $query = $this->db->get('membros'); 
        if ($query->num_rows == 1) { 
            return $dados; // RETORNA VERDADEIRO
        }
	}
*/
	public function procurar_membro($username){
		$this->db->where('username', $username);
		$dados = $this->db->select('id');
        $query = $this->db->get('membros'); 
        if ($query->num_rows == 1) { 
            return  $query->result_array(); // RETORNA VERDADEIRO
        	//echo '<pre>'; 
        }
	}
}