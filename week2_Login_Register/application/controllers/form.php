 
<?php 

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper('security');
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email', 'Email', 'required|callback_validation_login');
                $this->form_validation->set_rules('password', 'Password', 'required|md5');
                

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

                if ($this->home_model->checklogin()){
                        return true;

                }else{
                        $this->form_validation->set_message('validation_login','Incorrect email or password');
                        return false;
                }
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
               
                        $this->load->view('header2');
                        $this->load->view('user');
                        $this->load->view('footer');
                
                
        }

        public function logout(){
               $this->load->view('header');
               $this->load->view('myform');
               $this->load->view('footer');
        }
} 
  