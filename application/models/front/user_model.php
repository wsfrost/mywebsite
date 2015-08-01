<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	
	    public function get_by_email_pwd($username,$password){
	    	return  $this -> db -> get_where('t_user',array('username'=>$username,'password'=>$password))->row();
	    }
	
	    public function save($data){
	    	$this -> db -> insert('t_user',$data);
			if($this -> db -> affected_rows()>0){
				return TRUE;
			}
			return FALSE;
	    }
		
		public function get_by_email($email){
			return  $this -> db -> get_where('t_user',array('email'=>$email))->row();
		}
	
	
	   public function ajax_check_login(){
		$login_user = $this -> session -> userdata('login_user');
		if($login_user){
			echo 'logined';
		}else{
			echo 'not_login';
		}
	}
}
