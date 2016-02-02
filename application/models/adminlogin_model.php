<?php
class adminlogin_model extends CI_MODEL{
	function check($email, $password)
	{
	
   $this -> db -> select('id, email, password, firstname, lastname');
   $this -> db -> from('admin');
   $this -> db -> where('email', $email);
   $this -> db -> where('password', $password);
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


}