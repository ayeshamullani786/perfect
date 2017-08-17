<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * Author : Guruprasad Patil
 * Organisation : Technicious Technology Services Pvt. Ltd.
 * Created on : 01/06/2016
 */

class UserVerification extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->helper('session');
    }

    function verifyUser($username, $password) {

        $query = $this->db->get_where('user', array('user_username' => $username, 'user_password' => $password));
        $rowcount = $query->num_rows(); 
       
        if($rowcount > 0){
			return TRUE;
		}   
		else{
			return FALSE;
		}
    }

    function checkUserEntry($email) {
        $query = $this->db->get_where('userinfo', array('email' => $email, 'registeredfrom' => 'website'));
        $rowcount = $query->num_rows();
		if($rowcount > 0){
			return TRUE;
		}
		else{
			return FALSE;
		}
    }
    public function checkSocialUserEntry($socialid, $email) {
        $query = $this->db->query("select social_id, email from userinfo where `social_id` ='" . $socialid . "' and `email`='" . $email . "'");
        //$row = $query->result();
        $rowcount = $query->num_rows();
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function check_number($number) {
        $query = $this->db->where('mobile', $number);
        $query = $this->db->get('userinfo');
        $row = $query->result_array();

        $num = $row[0]['mobile'];
        return $num;
    }

    function get_verification_status($useremail) {
        $query = $this->db->query("SELECT `mobile_verification`, `email_verification` FROM `userinfo` WHERE email='" . $useremail . "'");
        $row = $query->result_array();

        $mobile_verification = $row[0]['mobile_verification'];
        $email_verification = $row[0]['email_verification'];

        if ($mobile_verification == 1 || $email_verification == 1)
            return 1;
        else
            return 0;
    }

    function get_user_number($useremail) {
        $query = $this->db->get_where('userinfo', array('email' => $useremail));
        foreach ($query->result_array() as $row) {
            $number = $row['mobile'];
            return $number;
        }
    }

    function get_user_type($useremail) {
        $query = $this->db->get_where('userinfo', array('email' => $useremail), 1);
        foreach ($query->result_array() as $row) {
            $type = $row['user_type']; // '$row['email']' collects email id of user in '$user'
            return $type;
        }
    }

    public function get_qualification_row($email, $id) {
        $query = $this->db->where('id', $id);
        $query = $this->db->where('email', $email);
        $query = $this->db->get('user_qualification'); // fetch complete table data
        $row = $query->result();

        foreach ($row as $r) { //check in row
            $qualification = $r->qualification;
            $institute = $r->institute;
            $yearofpassing = $r->yearofpassing;
            $specialization = $r->specialization;

            $data = array($id, $qualification, $institute, $yearofpassing, $specialization);
            return $data;
        }
    }

    public function get_experience_row($email, $id) {
        $query = $this->db->where('id', $id);
        $query = $this->db->where('email', $email);
        $query = $this->db->get('teacher_experience'); // fetch complete table data

        $row = $query->result();

        foreach ($row as $r) { //check in row
            $id = $r->id;
            $institute = $r->organization;
            $years = $r->years;
            $specialization = $r->specialization;
            $type = $r->type;

            $data = array($id, $institute, $years, $specialization, $type);
            return $data;
        }
    }

    public function get_certification_row($email, $id) {
        $query = $this->db->where('id', $id);
        $query = $this->db->where('email', $email);
        $query = $this->db->get('user_certification'); // fetch complete table data

        $row = $query->result();

        foreach ($row as $r) { //check in row
            $id = $r->id;
            $institute = $r->institute;
            $yearofpassing = $r->year;
            $specialization = $r->specialization;

            $data = array($id, $institute, $yearofpassing, $specialization);
            return $data;
        }
    }

    public function get_qualifications($email) {
        $query = $this->db->query("select * from user_qualification where email = '" . $email . "' ORDER BY `yearofpassing` DESC"); // fetch complete table data
        return $query;
    }

    public function get_certifications($email) {
        $query = $this->db->query("select * from user_certification where email = '" . $email . "' ORDER BY `year` DESC"); // fetch complete table data
        return $query;
    }

    public function get_experience($email) {
        $query = $this->db->query("select * from teacher_experience where email = '" . $email . "'"); // fetch complete table data
        return $query;
    }

    public function logout() {
		if (isset($_SESSION['status'])) {
			$this->session->unset_userdata('status');  
                         session_destroy();
        } 	
       
    }

	public function select_user_details($username, $password) {
        $query = $this->db->query("select * from user where user_username='" . $username . "' and user_password='" . $password . "' ");
        return $query;
    }
	
	public function select_session_userdata($username, $user_accesslevel,$user_id,$address,$first_name) {
        $q = $this->session->set_userdata('activeuser', array('username'=>$username,'status'=>$user_accesslevel,'user_id'=>$user_id,'address'=>$address,'first_name'=>$first_name));
        return $q;
    }

    public function select_userDetails($username)
    {
        $query = $this->db->query("select * from user where user_username='" . $username . "'  ");
        return $query->result();
    }

}

/* End of file user.php */
/* Location: ./application/models/user.php */
