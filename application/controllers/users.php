<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller{
	public function __construct() {//using constructor for loading the user_login_model automatically on the user_login controller call.
    parent::__construct();
   $this->load->model('user_model');
}


public function dashboard(){
	if($this->session->userdata('is_logged_in')){//checking if the session is avilable or not..
		$data['rows'] = $this->user_model->profile();
		$data['user_post'] = $this->user_model->get_user_posts();
		$this->load->view('dashboard',$data);
	}
	else{
		redirect('login');
	}
}


//*********Functionality for user profile related actions*********

public function profile(){
	if($this->session->userdata('is_logged_in')){//checking if the session is avilable or not..
		$data['rows'] = $this->user_model->profile();
		$this->load->view('profile',$data);
	}
	else{
		redirect('login');
	}
}

	public function edit_profile(){
	if($this->session->userdata('is_logged_in')){//checking if the session is avilable or not..
	$data['rows'] = $this->user_model->profile();
	$this->load->view('edit profile',$data);
}
	else{
		redirect('user_login');
	}
}

	public function update_profile(){
	if($this->session->userdata('is_logged_in')){
		$this->form_validation->set_rules('firstname', 'First Name','trim|xss_clean|required|min_length[2]|max_length[30]' );
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|xss_clean|required|max_length[30]');
		$this->form_validation->set_rules('about', 'About', 'trim|xss_clean|required|max_length[200]');
		if($this->form_validation->run()== FALSE)
	{	$data['rows'] = $this->user_model->profile();
		$this->load->view('edit profile', $data);
	}
	else{
		$first_name 	 = $this->input->post('firstname');
		$last_name 	 	 = $this->input->post('lastname');
		$about_me		 = $this->input->post('about');
		if($this->user_model->update_user($first_name, $last_name, $about_me)){
			$this->session->set_flashdata(
    			'Updation_successful', 
    			'Profile updated successfuly'
				);
			redirect('users/profile');
		}
		else{
			echo 'Not updated';
		}
	}
}
}

public function edit_image(){
	$data['rows'] = $this->user_model->profile();
	$this->load->view('edit_image',$data);
}

public function upload_cv_form() {
	$data['rows'] = $this->user_model->profile();
	$this->load->view('upload_cv',$data);
}
public function update_password() {
	$data['rows'] = $this->user_model->profile();
	$this->load->view('update_password',$data);
}

public function edit_password() {
	//$this->load->library(‘form_validation’);
	$data['rows'] = $this->user_model->profile();
	$this->form_validation->set_rules('oldpassword', 'Old Password', 'trim|required|xss_clean|min_length[2]');
    $this->form_validation->set_rules('newpassword', 'New Password', 'trim|required|xss_clean|min_length[2]');
	$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|xss_clean|min_length[2]|matches[newpassword]');
	if ($this->form_validation->run() == FALSE) {
        $this->load->view('update_password', $data);
			}
	else {
		 $oldpassword = $this->input->post('oldpassword');
         $newpassword = $this->input->post('newpassword');
         $confirmpassword = $this->input->post('confirmpassword');
		 $checkpass = $this->user_model->check_password($data['rows'][0]->email,md5($oldpassword));
		if($checkpass) {
			$result = $this->user_model->change_password($oldpassword, $newpassword, $confirmpassword);
			$data['message'] = "<h3 style='color:green;'>Password Changed!!!!!</h3>";
			$this->load->view('update_password', $data);
		} else {
			$data['message'] = "<h3 style='color:red;'>Password Failed!!!!!!!</h3>";
			$this->load->view('update_password', $data);
		}
		//$this->load->view('update_password', $data);
	}
} //https://sathyalog.wordpress.com/2013/02/08/create-change-password-functionality-in-codeigniter-along-with-css-framework/
public function update_image(){
	 $config['upload_path'] ='./webroot/images/user_images/';
         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size']    = '1000000';
		 $config['max_width']  = '800';
		 $config['max_height']  = '603';
         $config['overwrite'] = TRUE;
         $config['remove_spaces'] = TRUE;
         $config['encrypt_name'] = FALSE;

         $this->load->library('upload', $config);
         $field_name = "profile_file";
		
         if ( ! $this->upload->do_upload($field_name))
          {
         $error = array('error' => $this->upload->display_errors());
		 $data['rows'] = $this->user_model->profile();
	$this->load->view('edit_image',$data, $error);
		
           }
					
		else 
		{
           $image_path = $this->upload->data();
         
			
				  $data = array(
				'image'  => $image_path[file_name],
            );
           
            print_r($data);
			$user_id = $this->session->userdata('id');
			$this->db->where('id', $user_id);
            $this->db->update('users', $data);
            $this->session->set_flashdata('image_updated', "image updated successfully");

            redirect('users/profile');
            }
					
				
}
public function view_profile(){
	 if ($this->uri->segment(3) === FALSE)
{
    $id = 0;
	show_404();
}
	if($this->session->userdata('is_logged_in')){
		$id = $this->uri->segment(3);
		$user_id = $this->session->userdata('id');
	 	if($id !== $user_id){
		
	 	$view_profile = $this->user_model->view_profile();
		
	if($view_profile === FALSE)
	{
		show_404();
	}
	
		$data['rows'] = $this->user_model->profile();
		$data['user_profile'] = $view_profile;
	 	$this->load->view('view_users_profile',$data);
	}
	else{
		redirect('users/profile');
	}
	}
	
	else{
		//$id = $this->uri->segment(3);
		$data['rows'] = $this->user_model->profile();
	 	$this->load->view('view_profile',$data);
	}
}


//*********Functionality for posts related actions*********

    public function get_all_posts(){
	$data['rows'] = $this->user_model->profile();
	$data['all_posts'] = $this->user_model->get_all_posts();
	$this->load->view('all posts',$data);
}

	public function get_user_posts(){
	if($this->session->userdata('is_logged_in')){
	$data['row'] = $this->user_model->get_user_posts();
	$this->load->view('Client/my_posts',$data);
	}
	else{
		redirect('user_login');
	}
}


 public function view_post(){
	 if ($this->uri->segment(3) === FALSE)
{
    $id = 0;
	show_404();
}
else
{
    $id = $this->uri->segment(3);
}
	 $view_post = $this->user_model->get_one_posts($id);
	 $view_comments = $this->user_model->get_comments($id);
	 if($view_post === FALSE)
	{
		show_404();
	}
	if($view_comments === FALSE)
	{
		show_404();
	}
	if($view_post)
	{
		$data['onepost'] = $view_post;
	}
	$view_comments = $this->user_model->get_comments($id);
	if($view_comments)
	{
		$data['c_row'] = $view_comments;
	}
	$data['rows'] = $this->user_model->profile();
	$this->load->view('view_post',$data);
	
}



public function compose_post(){
		$this->form_validation->set_rules('mypost', 'The Post','trim|xss_clean|required');
		if($this->form_validation->run() == TRUE){
			$post_content = $this->input->post('mypost');
			$poster_name  = $this->input->post('poster_name'); 
			if($this->user_model->insert_post($post_content, $poster_name)){
				redirect('users/dashboard');
			}
			else
			{
				echo 'cannot add your post this time';
				die();
			}
			
		}
		else{
			$data['user_post'] = $this->user_model->get_user_posts();
			$this->load->view('users/dashboard',$data);
		}
	}
	
	
	
	public function add_comment(){
		$this->form_validation->set_rules('mycomment','Comment','trim|xss_clean|required');
		if($this->form_validation->run() == TRUE){
			$comment = $this->input->post('mycomment');
			$post_id = $this->input->post('postid');
			$poster_name = $this->input->post('poster_name');
			if($this->user_model->insert_comment($comment, $post_id,$poster_name)){
				
				
				redirect("users/view_post/".$post_id."");
			}
		}
	}
//*********Functionality for user Friend Request related actions*********	

	public function add_friend(){
	if($this->session->userdata('is_logged_in')){
	$id = $this->uri->segment(3);
	$friend_name = $this->uri->segment(4);
	if($this->user_model->addfriend($id,$friend_name))
	{
		redirect("users/view_profile/$id");
	}
	}
	else{
		redirect('user_login');
	}
}

//GET Friend List and Freind Requests
public function get_friends(){
	if($this->session->userdata('is_logged_in')){
	$data['get_friends'] = $this->user_model->get_friend_request();
	$data['get_my_friendsone'] = $this->user_model->get_my_friends_1();
	$data['get_my_friends2'] = $this->user_model->get_my_friends_2();
	$data['rows'] = $this->user_model->profile();
	$this->load->view('friends',$data);
	}
	else{
		redirect('user_login');
	}
}

//FRIEND REQUEST ACTIONS
public function request_action(){
	$id = $this->uri->segment(3);
	$action = $this->uri->segment(4);
	if($action === 'accept'){
		if($this->user_model->friend_accept($id)){
			$this->session->set_flashdata(
    			'Friend_added', 
    			'Friend request accepted'
				);
			redirect('users/get_friends');
		}
	}else if($action === 'reject'){
		if($this->user_model->reject_friend($id)){
			$this->session->set_flashdata(
    			'Friend_added', 
    			'Friend request accepted'
				);
			redirect('users/get_friends');
		}
	}
	
}



public function search_people(){
	$data['rows'] = $this->user_model->profile();
	$this->load->view('search', $data);
	
}
public function search_friend(){
		$search =  $this->input->post('search');
        $data['query'] = $this->user_model->get_search($search);
		$data['rows'] = $this->user_model->profile();
		//$data['result'] = $this->search_model-> check_search_result($search);
        $this->load->view('searchresult', $data);

}
	
	
	public function chat(){		
	$data['get_friends'] = $this->user_model->get_friend_request();
	$data['get_my_friendsone'] = $this->user_model->get_my_friends_1();
	$data['get_my_friends2'] = $this->user_model->get_my_friends_2();
	$data['rows'] = $this->user_model->profile();
	$this->load->view('friends_online',$data);
		
	}

}