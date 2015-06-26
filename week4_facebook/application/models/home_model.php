<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
  

  	public function checklogin(){ 
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('users');
        //$this->db->where('email', $this->input->post('email'));
        //$query = $this->db->get('recipes');

       // $this->output->set_output($query);

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

    public function recipes(){

        $data = array('recipe_name'=>$this->input->post('recipe_name'));
        $query=$this->db->insert('recipes', $data);


        $lastrecipeid = $this->db->insert_id();
       
        
        $data = array('ingredient_id'=>$this->input->post('ingredient_id1'),
                      'quantity'=>$this->input->post('quantity1'),
                      'email'=>$_SESSION['email'],
                      'recipe_id'=>$lastrecipeid);
        $query=$this->db->insert('ingredients', $data);



        $data = array('ingredient_id'=>$this->input->post('ingredient_id2'),
                      'quantity'=>$this->input->post('quantity2'),
                      'email'=>$_SESSION['email'],
                      'recipe_id'=>$lastrecipeid);
        $query=$this->db->insert('ingredients', $data);



        $data = array('ingredient_id'=>$this->input->post('ingredient_id3'),
                      'quantity'=>$this->input->post('quantity3'),
                      'email'=>$_SESSION['email'],
                      'recipe_id'=>$lastrecipeid);
        $query=$this->db->insert('ingredients', $data);
        
                        /*$this->db->select('ingredient_id');
                        $this->db->from('ingredients');
                        $query=$this->db->get();
                        return $row->$ingredient;*/

        if($query){
          return true;
        }else{
          return false;
        }
        
        
    }
        
        
       
        
            
}

    
        

    
    
        
    
                
            


    
    
    	

  