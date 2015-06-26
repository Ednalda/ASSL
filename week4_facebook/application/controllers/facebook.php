<?php
     $this->load->library('facebook');

   
    FacebookSession::setDefaultApplication('884772851569521', '5c5e456eeb8bf52ad116cf4ccd36b241');
   
    $helper = new FacebookRedirectLoginHelper('http://localhost:8888/cutting/index.php/form');
    try {
      $session = $helper->getSessionFromRedirect();
    } catch(FacebookRequestException $ex) {
      // When Facebook returns an error
    } catch(\Exception $ex) {
      // When validation fails or other local issues
    }
    if ($session) {
      // Logged in
    }

    $session = new FacebookSession('access token here');       

    $request = new FacebookRequest($session, 'GET', '/me');
    $response = $request->execute();
    $graphObject = $response->getGraphObject();


    $me = (new FacebookRequest(
    $session, 'GET', '/me'
    ))->execute()->getGraphObject(GraphUser::className());






    
    /*class Facebook extends CI_Controller {

            public $user = "";

            public function __construct() {
            parent::__construct();

            // Load facebook library and pass associative array which contains appId and secret key
            $this->load->library('facebook', array('appId' => '884772851569521', 'secret' => '5c5e456eeb8bf52ad116cf4ccd36b241'));

            // Get user's login information
            $this->user = $this->facebook;
            }

            // Store user information and send to profile page
            public function index() {
            if ($this->user) {
            redirect(base_url()."facebbok");

            // Get logout url of facebook
            $data array("logoutUrl"=>$this->logoutUrl);

            // Send data to profile page
            $this->load->view('user', $data); 
           }

           public function login(){

                    if($this->input->post("username")==="test" && $this->input->post("password")===="test");
                        $info = array("username"=>)
                        $this->session->set_userdata($info)
                   }else if(isset($this->user['email'])){
                    $info=array("username"=>"test","name")=>"test user", "is_logged_in"=>true);
                    $this-<session->set_userdata($info);
                    redirect('form/user');

                   }
                   $this->session->set_userdata('error', 'password_error');
                   redirect("form");
            }


}*/
?>

  