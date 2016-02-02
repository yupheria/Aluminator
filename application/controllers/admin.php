<?php
class Admin extends CI_Controller{

function dashboard(){
if($this->session->userdata('is_logged_admin')){
	$this->load->model('admin_model');
	$data['rows'] = $this->admin_model->profile();
		$this->load->view('admin/dashboard',$data);
	}
	else{
		redirect('adminlogin');
	}

	
}

function get_users(){
	if($this->session->userdata('is_logged_admin')){
		$this->load->model('admin_model');
		$data['rows'] = $this->admin_model->profile();
		$data['gusers'] = $this->admin_model->get_users();
		$this->load->view('admin/getusers',$data);
	}
	
	else{
		redirect('adminlogin');
	}
	
}

function add_student_id(){
if($this->session->userdata('is_logged_admin')){
	$this->load->model('admin_model');
	$data['rows'] = $this->admin_model->profile();
$this->load->view('admin/add_student_id',$data);
}

}

function validate_student_id(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('student_id', 'Student ID', 'trim|xss_clean|required|callback_id_check');
	
	if($this->form_validation->run() == TRUE){
		
		
		  $this->session->set_flashdata(
    			'sucessfully_added', 
    			'student id added sucessfully'
				);
		redirect('admin/add_student_id');
	}
	else{
		$this->load->model('admin_model');
	$data['rows'] = $this->admin_model->profile();
$this->load->view('admin/add_student_id',$data);
	}
}

function id_check(){
$this->load->model('admin_model');
$student_id = $this->input->post('student_id');	
$result = $this->admin_model->check_student_id($student_id);
if($result)
   {
	  $this->session->set_flashdata(
    			'student_id_exist', 
    			'this student id already exist in the database'
				);
		redirect('admin/add_student_id'); 
   }else{
	   
	  $this->load->model('admin_model');
$student_id = $this->input->post('student_id');
if($this->admin_model->add_student_id($student_id))
{
	return TRUE;
}else{
	 $this->form_validation->set_message('id_check', 'Invalid id');
     return false;
}
 
   }
}
}






