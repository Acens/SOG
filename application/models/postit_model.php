<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
class Postit_model extends CI_Model{

	public function insert($dados=NULL){
		if ($dados!=NULL) {
			$this->db->insert('postit',$dados);
		return 1;
		}
	return 0;
	}

	public function get_all(){
		return $this->db->get('postit');
	}


	public function procurar_postit($projeto=NULL){
		if($projeto!=NULL){
			$this->db->where('postit_chave_pro', $projeto['chave_projeto']);
			$this->db->where('postit_chave_sprint', $projeto['chave_sprint']);
			//$dados = $this->db->select('mp_chave_pro');
			//$dados = $this->db->select('mp_cargo');
			$query = $this->db->get('postit'); 
			if ($query->num_rows >= 1) { 
				$dados = array(
					'quantidade' => $query->num_rows,
					'resultado' => $query->result_array(),
					);

			return $dados; // RETORNA VERDADEIRO
			//$imprimir = $query->result_array(); // RETORNA VERDADEIRO
			//echo '<pre>'; 
			//print_r($imprimir);
			}
		}
	}


}