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


}