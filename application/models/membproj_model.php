<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
class Membproj_model extends CI_Model{

	public function insert($dados=NULL){
		if ($dados!=NULL) {
			$this->db->insert('membproj',$dados);
		return 1;
		}
	return 0;
	}

	public function get_all(){
		return $this->db->get('membproj');

	}

	public function procurar_meus_projetos(){
		$id_logado = $this->session->userdata('id_usuario');
		$this->db->where('mp_chave_membro', $id_logado);
		$dados = $this->db->select('mp_chave_pro');
		$dados = $this->db->select('mp_cargo');
        $query = $this->db->get('membproj'); 
        if ($query->num_rows >= 1) { 
            return  $query->result_array(); // RETORNA VERDADEIRO

        }

	}


}