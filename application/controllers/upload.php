<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	/*
	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}
	*/
	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'doc|docx|pdf';
		$config['max_size']	= '2048';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->load->library('upload', $config);
if ( ! $this->upload->do_upload())
		{
			$data = array('upload_data' => $this->upload->data());
			//echo var_dump($data);
			$this->load->model('user_model');
			//echo var_dump($error);
			$data['rows'] = $this->user_model->profile();
			$data['message'] = '<br />Upload fail!!';
			$this->load->view('upload_cv',$data);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//echo var_dump($data);
			$this->load->model('user_model');
			$data['rows'] = $this->user_model->profile();
			$data['message'] = '<br />Upload Success!!';
			$this->load->view('upload_cv',$data);
			/*Echo "Upload Successful!";
			$this->load->view('upload_cv', array('title' => 'My Title',
              'heading' => 'My Heading',
              'message' => 'Upload Successful!'));*/
		}
	}
}
?>