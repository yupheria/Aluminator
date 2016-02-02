<?php

class Login extends CI_Controller {

    public function __construct() {//using constructor for loading the user_login_model automatically on the user_login controller call.
        parent::__construct();
        $this->load->model('login_model');
    }

    function index() {
        $this->load->view('login');
    }

    public function validation() {
        $this->load->library('form_validation');
        //setting up form validation rules for validating the login form
        $this->form_validation->set_rules('email', 'Email ID', 'trim|xss_clean|required|valid_email|callback_login_check');
        $this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required');
        if ($this->form_validation->run() == TRUE) {
            redirect('users/dashboard');
        } else {
            $this->load->view('login');
        }
    }

    //function for checking user login credentials exists in the database or not
    public function login_check() {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password')); //converting password into MD5 encryption for user security	;
        $result = $this->login_model->check($email, $password);
//        print_r($result);exit;
        if ($result) {
            $data = array();
            foreach ($result as $row) {
                $data = array(
                    'id' => $row->id,
                    'email' => $row->email,
                    'name' => $row->firstname . $row->lastname,
                    'is_logged_in' => 1
                );
                $this->session->set_userdata($data);

                //Restricting already logged in user from getting logged in Again
//                if ($already_logged_in = $this->login_model->check_already_login()) {
//                    $set_sessiondata = $this->login_model->store_session();
//                } else {
//                    $this->session->set_flashdata(
//                            'already_logged_in', 'The User you are trying to log in with is already logged-in'
//                    );
//                    redirect('login');
//                }
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('login_check', 'Invalid username or password');
            return false;
        }
    }

    public function logout() {
        $id = $this->uri->segment(3);
        if ($this->uri->segment(3) === FALSE) {
            $id = 0;
            show_404();
        }

/*
        $check_sessiondata = $this->login_model->check_session();
        if ($check_sessiondata) {
            $delete_sessiondata = $this->login_model->delete_session($id);
            if ($delete_sessiondata) {

                $this->session->sess_destroy();
                redirect('login');
            }
        } */
    }

}
