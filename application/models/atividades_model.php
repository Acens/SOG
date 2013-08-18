<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
class Atividades_model extends CI_Model{

	public function insert($dados=NULL){
		if ($dados!=NULL) {
			$this->db->insert('presenca',$dados);
		}
	}

	public function get_all(){
		return $this->db->get('presenca');

	}

	public function update($dados){
		$this->db->where('id', $dados['id']);
		$this->db->update('presenca', $dados['inserir']);
	}


	public function checar($dados=NULL){
		$id_logado = $this->session->userdata('id_usuario');
		$data_hoje = date("y-m-d");
		$this->db->where('date', $data_hoje);
		$this->db->where('id_memb', $id_logado);
	    $dados = $this->db->select('id');
	    $dados = $this->db->select('atividade');
	    	$query = $this->db->get('presenca'); 
    	if ($query->num_rows == 1) { 
        	return  $query->result_array(); // RETORNA VERDADEIRO
    		//$imprimir = $query->result_array();
    		//echo '<pre>'; 
			//print_r($imprimir);
    	}
    	return 0;

	}

}