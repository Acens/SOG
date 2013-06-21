<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    
class Login_model extends CI_Model{

function validate() {
        $this->db->where('username', $this->input->post('username')); 
        $this->db->where('senha', md5($this->input->post('senha')));
        $this->db->where('status', 'ativo'); // Verifica o status do usuário
        $dados = $this->db->select('id');
        $query = $this->db->get('membros'); 

        if ($query->num_rows == 1) { 
            $id_usuario = $query->result_array();//pega o id do usuario logado
            $dados = array(
                'validar' => true,
                'id_usuario' => $id_usuario[0]['id'], 
                );
            return $dados; // RETORNA VERDADEIRO
        }
    }

    # VERIFICA SE O USUÁRIO ESTÁ LOGADO
    
    function logged() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
           redirect('index');
        }
    }

    function logout(){
        $this->session->sess_destroy();
    }

    function restricoes(){


    }

}