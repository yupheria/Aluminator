<?php

class Adminlogin extends CI_Controller {

    public function __construct() {//using constructor for loading the user_login_model automatically on the user_login controller call.
        parent::__construct();
        $this->load->model('adminlogin_model');
    }

    function index() {
        $this->load->view('admin/adminlogin');
    }

    public function validation() {
        $this->load->library('form_validation');
        //setting up form validation rules for validating the login form
        $this->form_validation->set_rules('email', 'Email ID', 'trim|xss_clean|required|valid_email|callback_login_check');
        $this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required');
        if ($this->form_validation->run() == TRUE) {
            redirect('admin/dashboard');
        } else {
            $this->load->view('admin/adminlogin');
        }
    }

    //function for checking user login credentials exists in the database or not
    public function login_check() {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password')); //converting password into MD5 encryption for user security	;
        $result = $this->adminlogin_model->check($email, $password);

        if ($result) {
            $data = array();
            foreach ($result as $row) {
                $data = array(
                    'id' => $row->id,
                    'email' => $row->email,
                    'name' => $row->firstname . $row->lastname,
                    'is_logged_admin' => 1
                );
                $this->session->set_userdata($data);
            }
        } else {
            $this->form_validation->set_message('login_check', 'Invalid username or password');
            return false;
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect('adminlogin');
    }

}
