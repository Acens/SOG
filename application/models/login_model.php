<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    
class Login_model extends CI_Model{

function validate() {
        $this->db->where('username', $this->input->post('username')); 
        $this->db->where('senha', md5($this->input->post('senha')));
        $this->db->where('status', 'ativo'); // Verifica o status do usuário

        $query = $this->db->get('membros'); 

        if ($query->num_rows == 1) { 
            return true; // RETORNA VERDADEIRO
        }
    }

    # VERIFICA SE O USUÁRIO ESTÁ LOGADO
    function logged() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
            echo 'Voce nao tem permissao para entrar nessa pagina. ';
            die();
        }
    }

}