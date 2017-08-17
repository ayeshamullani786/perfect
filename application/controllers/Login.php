<?php
	
	class Login extends CI_Controller{
		
		function index(){
			$data['main_content']='signin';
			$this->load->view('includes/template',$data);
		}
		
		function signup(){
			$data['main_content']='signup';
			$this->load->view('includes/template',$data);
		}
		
		
		function validate_credentials(){
			$this->load->model('membership_model');
			$userid=$this->membership_model->validate();
			// echo "c".$query;
			if($userid!=false){
				
				// echo $userid;
				$data=array(
				'username'=>$this->input->post('email'),
				'userid'=>$userid,
				'is_logged_in'=>true
				);
				
				$this->session->set_userdata($data);
				redirect("site/dashboard");
				}else{
				$this->index();
			}
		}
		
		
		
		function register_user(){
			
			$this->load->model('membership_model');
			
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$password=$this->input->post('password');
			$cnfpassword=$this->input->post('cnfpassword');
			$college=$this->input->post('college');
			$branch=$this->input->post('branch');
			$course=$this->input->post('course');
			$year=$this->input->post('year');
			
			$insert_data=array(
			'name'=>$name,
			'email'=>$email,
			'mobile'=>$mobile,
			'password'=>$password,
			'college'=>$college,
			'branch'=>$branch,
			'course'=>$course,
			'year'=>$year
			);
			
			$data['register_user']=$this->membership_model->sign_up($insert_data);
			
			if($data['register_user']){
				redirect('login/index');
			}
		}
		
		
		
		function log_out(){
			
			$this->session->sess_destroy();
			$this->index();
			
		}
		
		
	}
	
	
	
?>