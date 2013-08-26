<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
class Sprint_model extends CI_Model{

	public function insert($dados=NULL){
		if ($dados!=NULL) {
			$this->db->insert('sprint',$dados);
		}
	}

	public function get_all(){
		return $this->db->get('sprint');

	}

	public function procurar_sprint($projeto=NULL){
		if($projeto!=NULL){
			$this->db->where('sprint_chave_pro', $projeto);
			//$dados = $this->db->select('mp_chave_pro');
			//$dados = $this->db->select('mp_cargo');
			$query = $this->db->get('sprint'); 
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