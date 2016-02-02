<?php

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        ##delete old captchas
        $expiration = time() - 7200; // Two hour limit
        $this->db->query("DELETE FROM captcha WHERE captcha_time < " . $expiration);
    }

    function index() {

        // generate captcha
        $vals = array(
            'img_path' => './captcha/',
            'img_url' => base_url() . 'captcha/',
            'img_width' => 200,
            'img_height' => 75,
            'expiration' => 7200,
            'word' => rand(11111, 99999),
        );
        $cap = create_captcha($vals);
//print_r($cap);
        $data = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
        );
        $this->session->set_userdata('captchaWord', $cap['word']);
        $query = $this->db->insert_string('captcha', $data);
        $this->db->query($query);

//      print_r($this->session->userdata('user'));
        $data['cap'] = $cap;
        $this->data = $data;

        $this->load->view('register',$data);
    }

    function validation() {
        $this->load->library('form_validation'); //Loading Form validation library
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|xss_clean|required|min_length[2]|max_length[30]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|xss_clean|required|max_length[30]');
        $this->form_validation->set_rules('studentid', 'Student ID', 'trim|xss_clean|required|callback_user_id_check');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|xss_clean|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[2]');
        $this->form_validation->set_rules('confirm_password', 'Confirm', 'trim|required|xss_clean|min_length[2]|matches[password]');
        $this->form_validation->set_rules('genderselect', 'Gender', 'trim|xss_clean|required');
		$this->form_validation->set_rules('departmentselect', 'Department', 'trim|xss_clean|required');
		$this->form_validation->set_rules('licenseselect', 'Driver License', 'trim|xss_clean|required');		
        $this->form_validation->set_rules('accept_terms', 'Terms', 'trim|required|xss_clean');
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|xss_clean|callback_captchacheck[users.captcha]');
        $this->form_validation->set_message('is_unique', "This Email Address is already registered.");



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {


            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $studentid = $this->input->post('studentid');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $gender = $this->input->post('genderselect');
			$department = $this->input->post('departmentselect');
			$driverlicense = $this->input->post('licenseselect');
            if ($gender == 'female') {
                $image = 'female.png';
            } else {
                $image = 'male.png';
            }
            $this->load->model('register_model'); //Loading Model

            if ($this->register_model->add_user($firstname, $lastname, $email, $password, $gender, $department , $driverlicense ,$image, $studentid)) {
                if ($this->register_model->update_id_status($studentid)) {//updaing the id of student status From active to Dactive
                    $this->session->set_flashdata(
                            'Registration_successful', 'Registration successful please check your email to verify your account.'
                    );
                    redirect('login');
                }
            } else {
                echo 'Failed to regsiter now';
            }
        }
    }

    function user_id_check() {
        $this->load->model('register_model'); //Loading Model
        $studentid = $this->input->post('studentid');
        $result = $this->register_model->user_check($studentid);
        if ($result) {
            $this->form_validation->set_message('user_id_check', "This Student ID is invalid or has been already registered.");
            return false;
        }
    }

    // check captcha
    public function captchacheck($word) {
//        echo $word;
//        print $this->session->userdata('captchaWord');
//        exit;
        if (strcmp(strtoupper($word), strtoupper($this->session->userdata('captchaWord'))) == 0) {
            return true;
        } else {
            $this->form_validation->set_message('captchacheck', 'Captcha Error.. !');
            return false;
        }
    }
	

}
