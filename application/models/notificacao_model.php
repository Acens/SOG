<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	
class Notificacao_model extends CI_Model{

	public function insert($dados=NULL){
		if ($dados!=NULL) {
			$this->db->insert('notificacao',$dados);
		}
	}

	public function get_all(){
		return $this->db->get('notificacao');

	}


}