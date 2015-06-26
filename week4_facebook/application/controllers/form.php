<?php  
    class Form extends CI_Controller {
        
        public function index(){

                $this->load->helper('security');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email', 'Email', 'required|callback_validation_login');
                $this->form_validation->set_rules('password', 'Password', 'required|md5');
                $this->form_validation->set_rules('username', 'username');
                              
 
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('header');
                        $this->load->view('myform');
                        $this->load->view('footer');
                          
                }
                else
                {  
                        
                        $key = md5(uniqid());
                        $this->load->library('email');
                        $this->load->view('header2');
                        $this->load->view('user');
                        $this->load->view('footer');
                }
        }

        public function validation_login(){
                $this->load->model('home_model');
                $query=$this->home_model->checklogin();
                if($query){
                    $data = array(
                          'email'=>$this->input->post('email'),
                          'is_logged_in'=>true
                        );
                    $this->session->set_userdata($data);
                    //redirect('form/user');


                }else{
                        $this->form_validation->set_message('validation_login','Incorrect email or password');
                        return false;
                }
        }

        public function logout(){
               $this->session->sess_destroy();
               $this->load->view('header');
               $this->load->view('myform');
               $this->load->view('footer');
        }

        public function signup(){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
                $this->form_validation->set_message('is_unique','This email is registered');

               if ($this->form_validation->run() == TRUE)
                {
                        $this->load->model('home_model');

                        if($this->home_model->register()){
                                $this->load->view('header');
                                $this->load->view('myform');
                                $this->load->view('footer');
                        }
                        
                        
                }
                else
                {   
                        
                        $this->load->view('header3');
                        $this->load->view('signup');
                        $this->load->view('footer');
                }

        }
         

        public function user(){

                $is_logged_in=$this->session->userdata('is_logged_in');
                if(!isset($is_logged_in) || $is_logged_in != true){
                    $this->load->view('header');
                    $this->load->view('myform');
                    $this->load->view('footer');
                    die();
                }else{

                    $this->load->view('header2');
                    $this->load->view('user');
                    $this->load->view('footer');
                }
               
                
        }

        
        public function recipe(){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('recipe_name', 'Recipe_name', 'required');
                $this->form_validation->set_rules('ingredient_id1', 'ingredient_id1', 'required');
                $this->form_validation->set_rules('quantity1', 'quantity1', 'required');
               

               if ($this->form_validation->run() == true)

                {     
                        $this->load->model('home_model'); 
                        $query['ingredient']=$this->home_model->recipes();
                                
                        $this->load->view('header2');
                        $this->load->view('result',$query);
                        $this->load->view('footer');

                
                }
                else
                {   
                    $this->load->view('header2');
                    $this->load->view('user');
                    $this->load->view('footer');
                }
        }

       

        /*public function facebookLogin(){
           $this->load->library("facebook", array('appId'=> '884772851569521'), 'secret'=>'5c5e456eeb8bf52ad116cf4ccd36b241');
           $this->user=$this->facebook->getUser();
           if($this->user){
            try{
                $this->user=$this->facebook->api('/me');
                $this->logoutUrl=$this->facebook->getLogoutUrl(array("next"=>base_url()."login/logout"));
            }catch(FAcebookApiException $e){
                error_log($e);
                $this->user=null;
            }
           if($this->user){
            redirect(base_url()."form/validation_login");
            
            }
            $data->load->view('user', $data);
           
        }*/


        
    } 


  