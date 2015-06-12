<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

  	public function checklogin(){

        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('users');

        if ($query->num_rows()==1){
        	return true;

        }else{
        	return false;
        }
  	}  
    public function register(){

        $data = array('username'=>$this->input->post('username'),
                      'email'=>$this->input->post('email'),
                      'password'=>md5($this->input->post('password')));
        
        $query=$this->db->insert('users', $data);
        
        if($query){
          return true;
        }else {
          return false;
        }

    }  
	
}
  