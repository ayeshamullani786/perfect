<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**   
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome   
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/   
     
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
     
     function __construct() 
     {
        parent::__construct();
        $this->load->model(array('UserVerification'));
        $this->load->helper(array('form', 'url'));
        $this->load->database();
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->library('pagination');
        
    }
    public function index()
    {
        $this->load->view('login');  
        
    }    
    
    public function login_user() {
        
       $username = $this->input->post('nm');
       $password = $this->input->post('pswd');
  
        if ($this->UserVerification->verifyUser($username, $password) == TRUE) {
          
            $query_user_details = $this->UserVerification->select_user_details($username, $password);
            
            
            foreach ($query_user_details->result() as $row) {
                
                $username = $row->user_username;
                $user_accesslevel = $row->accessLevel;
                $user_id=$row->id;
                $address=$row->address;
                $first_name=$row->firstname;
                
            }
                 
              
                $_SESSION['status'] = $user_accesslevel;
                $_SESSION['username'] = $username; 
                $_SESSION['user_id']=$user_id;
                $_SESSION['address']=$address;
                $_SESSION['first_name']=$first_name;

                $this->UserVerification->select_session_userdata($username, $user_accesslevel,$user_id,$address,$first_name);

            echo "<link href='//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css' rel='stylesheet'/>
                            <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
                            <script src='//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js'></script>

                           <script>  
                              $(document).ready(function(){
                                 var base_url = window.location.origin;
                                
                                 
                                   window.location = base_url+'/perfect-master/Welcome/dashboard';
                                    toastr.success('Login Successfull!!'); 
                                });
                            </script>";          
        } else {
       
            echo "<link href='//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css' rel='stylesheet'/>
                            <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
                            <script src='//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js'></script>

                           <script>
                              $(document).ready(function(){  
                                toastr.warning('valid Username & Password!!!','Please Enter');                      
                                });
                            </script>";

            $this->load->view('login');  
        }
    }
    public function logout() {

        if (isset($_SESSION['status'])) {

            $this->output->delete_cache(); // Clear All Cached Data or Page information for back links.
            $message = $this->UserVerification->logout();
            $message = array('result' => "<div align='center'class='alert alert-success'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>
                      <strong>Logged Out Successfully.</strong> </div>");

            $this->load->view('login', $message);
        } else {
            redirect(base_url() . 'Welcome/login_user', 'refresh');

        }
    }

    public function dashboard(){           
            $data['title']='Perfect Tailors';
            $data['main_content']='dashboard';
            $this->load->view('includes/template',$data);
    }

    public function UserProfile()
    {
        $data['UserData'] = $this->UserVerification->select_userDetails($_SESSION['username']);
         //print_r($data); 
           $this->load->view('includes/header');
           $this->load->view('edituser',$data);
           $this->load->view('includes/footer');
    }


}    