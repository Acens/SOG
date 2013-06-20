<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
class Projetos_model extends CI_Model{

	public function insert($dados=NULL){
		if ($dados!=NULL) {
			$this->db->insert('projetos',$dados);
			
			
		}
	}

	public function get_all(){
		return $this->db->get('projetos');

	}

	public function procurar_projeto($projeto){
		$this->db->where('pro_nome', $projeto['pro_nome']);
		$this->db->where('pro_categoria', $projeto['pro_categoria']);
		$this->db->where('pro_inicio', $projeto['pro_inicio']);
		$this->db->where('pro_prazo', $projeto['pro_prazo']);
		$this->db->where('pro_obs', $projeto['pro_obs']);
        $dados = $this->db->select('id');
        $query = $this->db->get('projetos'); 
        if ($query->num_rows == 1) { 
            return  $query->result_array(); // RETORNA VERDADEIRO
        	//echo '<pre>'; 
			//print_r($imprimir);
        }
	}
/*
	public function procurar_projeto($projeto){
		$this->db->where('pro_nome', $projeto['pro_nome']);
		$this->db->where('pro_categoria', $projeto['pro_categoria']);
		$this->db->where('pro_inicio', $projeto['pro_inicio']);
		$this->db->where('pro_prazo', $projeto['pro_prazo']);
		$this->db->where('pro_obs', $projeto['pro_obs']);
		$dados = $this->db->get('projetos');
		$query = $dados->result_array();
		return $query;
		//echo '<pre>'; 
		//print_r($query);
	}*/

}