<?php
class User_model extends CI_Model{
	
//*********Database Query Functionality for user profile related actions*********
//*********The Mysql queries are used in an Active Data Query manner and also with advance query binding techiques of codigniter******

	public function profile(){//function to get users details from the database
		$sql = "SELECT firstname, lastname, email, gender, image, created_on, about FROM users WHERE id = ? AND status = ?"; 
		$user_id = $this->session->userdata('id');
		$result = $this->db->query($sql, array($user_id, 1));
		if($result->num_rows() > 0){
			foreach($result->result() as $row){
				$data[] = $row;
			}
			
			return $data;
		}
	}
	
	public function update_user($first_name, $last_name, $about_me){
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
	public function check_password($email, $oldpass) {
		$this->db->select('email, password');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $oldpass);
		$this->db->where('status', 1);
//        $this->db->where('status', 'Active');
        $this->db->limit(1);
        $query = $this->db->get();
//        echo $this->db->last_query();exit;

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
	}
	public function change_password ($oldpassword, $newpassword, $confirmpassword){
		$user_id = $this->session->userdata('id');
		
		$data = array(
		'password' => md5($newpassword)
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
	
	public function view_profile(){
		$query = $this->db->where('id',$this->uri->segment(3));
		$query = $this->db->get('users');
		if($query->num_rows() >0){
			foreach($query->result() as $up){
				$data[] = $up;
			}
			return $data;
		}else{
			return false;
		}
	}

//*********Functionality for posts related actions*********	
	public function get_all_posts(){
		$query = $this->db->order_by("id", "desc"); 
		$query = $this->db->get('posts');
		//$query = $this->db->where('id',$this->uri->segment(3));
		if($query->num_rows() > 0){
			foreach($query->result() as $apost){
				$data[] = $apost;
				}
				return $data;
		}
	}
	
	public function get_user_posts(){
		$user_id = $this->session->userdata('id');
		$query = $this->db->order_by("id", "desc"); 
		$query = $this->db->where('poster_id',$user_id);
		$query = $this->db->get('posts');
		if($query->num_rows() > 0){
			foreach($query->result() as $upost){
				$data[] = $upost;
				}
				return $data;
		}
		
		
	}
	
	
	
	public function check_posts(){
		$user_id = $this->session->userdata('id');
		$query = $this->db->where('poster_id',$user_id);
		$query = $this->db->get('posts');
		if($query->num_rows() > 0){
			return true;
		}
		else{ 
		return false;
	}
	}
	
	
	public function check_only_posts(){
		$query = $this->db->get('posts');
		if($query->num_rows() > 0){
			return true;
		}
		else{ 
		return false;
	}
	}
	
	public function get_one_posts($id){
		$query = $this->db->where('id',$id);
		$query = $this->db->get('posts');
		if($query->num_rows() > 0){
			foreach($query->result() as $opost){
				$data[] = $opost;
				}
				return $data;
		}
		else
		{
			return false;
		}
	}
	public function get_comments(){
		$query = $this->db->where('post_id',$this->uri->segment(3));
		$query = $this->db->get('comments');
		if($query->num_rows() > 0){
			foreach($query->result() as $c_row){
				$data[] = $c_row;
				}
				return $data;
		}
	}
	public function check_comments(){
		$query = $this->db->where('post_id',$this->uri->segment(3));
		$query = $this->db->get('comments');
		if($query->num_rows() > 0){
			return true;
		}
		else{ 
		return false;
	}
	}
	
	public function insert_post($post_content, $poster_name){
		$data = array(
		'body' => $post_content,
		'poster_id' => $this->session->userdata('id'),
		'poster_name' => $poster_name,
		'created_on' => date("Y-m-d h:i:sa")
		);
		$query = $this->db->insert('posts',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function insert_comment($comment, $post_id, $poster_name){
		$data = array(
		'post_id' 			=>  $post_id,
		'commenter_id' 		=>  $this->session->userdata('id'),
		'commenter_name' 	=>  $poster_name,
		 'content'			=>	$comment,
		 'created_on' => date("Y-m-d h:i:sa")
		);
		$query = $this->db->insert('comments',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}
//*********Functionality for user Friend Request related actions*********	
	public function addfriend($id,$friend_name){
		$data = array(
		'friend_id' =>$id,
		'user_id'	=> $this->session->userdata('id'),
		'user_name'	=> $this->session->userdata('name'),
		'friend_name' => $friend_name
		);
		$query = $this->db->insert('friendlist',$data);
		if($query){
			return true;
		}
		else{ 
		return false;
	}
	}
	
	//friend request status check
	public function check_friend($id){
		$query = $this->db->where('friend_id',$id);
		$query = $this->db->where('user_id',$this->session->userdata('id'));
		$query = $this->db->get('friendlist');
		if($query->num_rows() >0){
			foreach($query->result() as $f_r){
				$data[] = $f_r;
				}
				return $data;
		}
		else{
			return false;
		}

	}
	
	public function check_friend_otherside($id){
		$query = $this->db->where('friend_id',$this->session->userdata('id'));
		$query = $this->db->where('user_id',$id);
		$query = $this->db->get('friendlist');
		if($query->num_rows() >0){
			foreach($query->result() as $f_r_os){
				$data[] = $f_r_os;
				}
				return $data;
		}
		else{
			return false;
		}

	}
	
	public function get_friend_request(){
		$query = $this->db->where('friend_id',$this->session->userdata('id'));
		$query = $this->db->where('status','Request Pending');
		$query = $this->db->get('friendlist');
		if($query->num_rows() >0){
			foreach($query->result() as $get_fr){
				$data[] = $get_fr;
				}
				return $data;
		}
		else{
			return false;
		}

	}
	
	
	//Make Friend List
	public function get_my_friends_1(){
		$sql = "SELECT * FROM friendlist WHERE user_id = ? AND status = ?"; 
		$user_id = $this->session->userdata('id');
		$result = $this->db->query($sql, array($user_id, 'Friends'));
		if($result->num_rows() > 0){
			foreach($result->result() as $flist){
				$data[] = $flist;
			}
			return $data;
		}
	}
	
	
	public function get_my_friends_2(){

		$sql = "SELECT * FROM friendlist WHERE friend_id = ? AND status = ?"; 
		$friend_id = $this->session->userdata('id');
		$result = $this->db->query($sql, array($friend_id, 'Friends'));
		if($result->num_rows() > 0){
			foreach($result->result() as $flist1){
				$data[] = $flist1;
			}
			return $data;
		}
	}
	
	public function friend_accept($id){
		$user_id = $this->session->userdata('id');
		$data = array('status' => 'Friends');
		
		$query = $this->db->where('id',$id);
		$query = $this->db->update('friendlist', $this->db->escape($data));
		if($query){
			return true;
		}
		else{
			return false;
		}
	}
	
	public function reject_friend($id){
	$user_id = $this->session->userdata('id');
	$query = $this->db->where('id', $id);
     $query = $this->db->delete('friendlist'); 
		if($query){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
	function get_search($search)
{
$this->db->select('*');
        $this->db->from('users');
        $this->db->like('firstname',$search);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
		if($query){
        return $query->result_array();
		return true;
		}
		else{
			return false;
		}
		
}
	
}