<?php
class Chat_model extends CI_Model{
	
	function get_person_online($id){
		$query = $this->db->where('user_id',$id);
		$query = $this->db->get('ci_sessions');
		if($query->num_rows() > 0){
			foreach($query->result() as $onlinefriend){
				$data[] = $onlinefriend;
				}
				return $data;
		}
		else
		{
			return false;
		}
	}
	
	function get_chat_id($id){
		$user_id = $this->session->userdata('id');
		$friend_id = $id;
	$sql = "SELECT id, created FROM chats WHERE user_id = ? AND friend_id = ?"; 
		$result = $this->db->query($sql, array($user_id, $friend_id));
		if($result->num_rows() > 0){
			foreach($result->result() as $chatid){
				$data[] = $chatid;
			}
			
			return $data;
		}

		
	}
	
	function get_chat_id_otherside($id){
		
		$friend_id = $this->session->userdata('id');
		$user_id = $id;
	$sql = "SELECT id, created FROM chats WHERE user_id = ? AND friend_id = ?"; 
		$result = $this->db->query($sql, array($id, $friend_id));
		if($result->num_rows() > 0){
			foreach($result->result() as $chatid2){
				$data[] = $chatid2;
			}
			
			return $data;
		}
		
	}
	
	function set_chat_id($id)
	{
		$user_id = $this->session->userdata('id');
		$friend_id = $id;
		$data = array(
		'user_id' => $user_id,
		'friend_id' => $friend_id,
		'created' => date("Y-m-d h:i:sa")
		);
		$query = $this->db->insert('chats',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
	function add_chat_messages($chat_id, $user_id, $chat_message_content){
		$created = date("Y-m-d h:i:sa");
		$query = "INSERT INTO chat_messages(chat_id, user_id, content, created) VALUES(?, ?, ?, ?)";
		$this->db->query($query, array($chat_id, $user_id, $chat_message_content, $created));
	}
	
	function get_chat_message($id){
		$query = "SELECT  cm.user_id, cm.content, DATE_FORMAT(cm.created, '%D of %M %Y at %H:%i:%s') 
				  AS created, u.firstname FROM `chat_messages` cm JOIN users u ON cm.user_id = u.id WHERE cm.chat_id = ?
				  ORDER BY cm.id DESC";
		
		$result = $this->db->query($query, $id); 
		return $result;
	}
}