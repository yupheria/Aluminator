<?php
class Home extends CI_Controller {
	
	
	function index(){
		$this->load->view('home');//loading index page view of the website
	}
	
	function about(){
		$this->load->view('about');
	}
}