<?php
class Admin_model extends CI_Model{
	
//*********Database Query Functionality for user profile related actions*********
//*********The Mysql queries are used in an Active Data Query manner and also with advance query binding techiques of codigniter******

	public function profile(){//function to get users details from the database
		$sql = "SELECT * FROM admin WHERE id = ? AND status = ?"; 
		$user_id = $this->session->userdata('id');
		$result = $this->db->query($sql, array($user_id, 'Active'));
		if($result->num_rows() > 0){
			foreach($result->result() as $row){
				$data[] = $row;
			}
			
			return $data;
		}
	}
	
	public function get_users(){
		
		$sql = "SELECT id, firstname, lastname, email, gender, image, created_on, status FROM users";
		$result = $this->db->query($sql);
		if($result->num_rows() > 0){
			foreach($result->result() as $gusers){
				$data[] = $gusers;
			}
			return $data;
		}
	}
	
	
	public function check_student_id($student_id){

   $this -> db -> select('id, student_id, status');
   $this -> db -> from('student_id');
   $this -> db -> where('student_id', $student_id);
   $this -> db -> limit(1);
   $query = $this -> db -> get();

 if($query -> num_rows() == 1)
   {
     return $query->result();
   }

   else
   {
     return false;
   }


	}
	
	public function add_student_id($student_id){
		$data = array(
		'student_id' => $student_id
		);
		$query = $this->db->insert('student_id',$this->db->escape($data));
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}