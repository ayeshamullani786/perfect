<?php
	class Dashboard extends CI_Controller{
		
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
			
			// $this->load->model('ads_model');
			// $data['ads']=$this->ads_model->get_ads();
			$data['title']='Dashboard';
			$data['main_content']='dashboard';
			$this->load->view('includes/template',$data);
		}
	}
?>