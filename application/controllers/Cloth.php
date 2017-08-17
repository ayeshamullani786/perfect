<?php	
	class Cloth extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			//$this->is_logged_in();
		}
		
		/********************* Login Validation Start **********************/
		function is_logged_in(){
			
			$is_logged_in=$this->session->userdata('is_logged_in');
			if(!isset($is_logged_in) || $is_logged_in!=true){
				redirect('login/index');
			}
			
		}
		/********************* Login Validation End **********************/
		function index(){
			$data['title']='Cloth';
			$data['main_content']='cloth';
			$this->load->view('includes/template',$data);
		}
		
	}
?>