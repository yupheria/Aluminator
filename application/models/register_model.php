<?php

class Register_model extends CI_MODEL {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function user_check($studentid) {

        $this->db->select('id, student_id');
        $this->db->from('users');
        $this->db->where('student_id', $studentid);
        $this->db->where('status', 'Active');
        $this->db->limit(1);
        $query = $this->db->get();
//        echo $this->db->last_query();
//        echo $query->num_rows();

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_id_status($studentid) {
        $data = array(
            'status' => 'Active',
        );
        $rowId = $this->db->insert_id();

        $query = $this->db->where('id', $rowId);
        $query = $this->db->update('users', $this->db->escape($data));
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    //function to add users to the user table database
    public function add_user($firstname, $lastname, $email, $password, $gender,$department, $driverlicense , $image, $studentid) {
       $md5_password = md5($password);
		//$md5_password = $password;
        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'student_id' => $studentid,
            'email' => $email,
            'password' => $md5_password,
            'gender' => $gender,
			'department' => $department,
			'driverlicense' => $driverlicense,
            'image' => $image,
            'created_on' => date("Y-m-d")
        );
		$query = $this->db->insert('users', $this->db->escape($data));
		$this->load->library('email'); // Note: no $config param needed
				$this->email->from('aluminator2015@gmail.com', 'Aluminator');  
                $this->email->to($email);  
                $this->email->subject('Aluminator');  
				$link = "<a href='http://localhost/aluminator/index.php/login/verify_account/".$this->db->insert_id()."'>http://localhost/aluminator/index.php/login/verify_account/".$this->db->insert_id()."</a>";
                $this->email->message("Please verify your account <br /> Please click this link: <br /> ".$link);  
                $this->email->send();
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

}
