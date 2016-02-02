<?php

class Login_model extends CI_MODEL {

    function check($email, $password) {

        $this->db->select('id, email, password, firstname, lastname');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
		$this->db->where('status', 1);
//        $this->db->where('status', 'Active');
        $this->db->limit(1);
        $query = $this->db->get();
//        echo $this->db->last_query();exit;

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
	function verify_account($id) {
		$data = array(
               'status' => 1
            );

			$this->db->where('id', $id);
			$query=$this->db->update('users', $data); 
		if($query){
			return true;
		}
		else{
			return false;
		}
	}
	function check_email($email) {

        $this->db->select('id, email, password, firstname, lastname');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
	public function reset_password($email){
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		$pass = implode(" ",$pass);
		$pass = str_replace(' ', '', $pass);
		$data = array(
		'password' => md5($pass) //change function password
		);
		$query = $this->db->where('email',$email);
		$query = $this->db->update('users', $this->db->escape($data));
		if($query){
			return $pass;
		}
		else{
			return false;
		}
	}
	
	public function update_password($email, $last_name, $about_me){
		$user_id = $this->session->userdata('id');
		$data = array(
		'firstname' => $first_name,
		'lastname'  => $last_name,
		'about'   => $about_me
		);
		$query = $this->db->where('id',$user_id);
		$query = $this->db->update('users', $this->db->escape($data));
		if($query){
			return true;
		}
		else{
			return false;
		}
	}
    function check_already_login() {
        $user_id = $this->session->userdata('id');
        $this->db->select('session_id, ip_address, user_agent, user_id');
        $this->db->from('ci_sessions');
        $this->db->where('user_id', $user_id);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return true;
        } else {
            return false;
        }
    }

    function store_session() {
        $id = $this->session->userdata('session_id');
        $ip_address = $this->session->userdata('ip_address');
        $user_agent = $this->session->userdata('user_agent');
        $user_id = $this->session->userdata('id');
        $user_name = $this->session->userdata('name');
        $data = array(
            'session_id' => $id,
            'ip_address' => $ip_address,
            'user_agent' => $user_agent,
            'user_id' => $user_id,
            'user_name' => $user_name
        );

        $query = $this->db->insert('ci_sessions', $this->db->escape($data));
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    function check_session() {
        $id = $this->session->userdata('session_id');

        $sql = "SELECT * FROM ci_sessions WHERE session_id = ? ";
        $result = $this->db->query($sql, array($id));
        if ($result->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function delete_session($id) {
        $sql = "DELETE  FROM ci_sessions WHERE user_id = ?";
        $result = $this->db->query($sql, array($id));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}
