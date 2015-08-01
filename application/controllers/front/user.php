<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function __construct()
    {
    	parent::__construct();
		$this -> load -> model('front/user_model');
		$this -> load -> model('front/comment_model');
    }
	
	/*public function check_name(){
		$email = $this -> input -> get('email');
		$user = $this -> user_model -> get_by_email($email );
		if($user){
			echo 'fail';
		}else{
			echo 'success';
		}
	}*/
	
	public function logout(){
		$this -> session -> unset_userdata('login_user');
		redirect('front/index');
	}
	
	public function ajax_check_login()
	{
		$login_user = $this -> session -> userdata('login_user');
		if($login_user){
			echo 'logined';
		}else{
			echo 'not_login';
		}
	}
	
	
	public function ajax_post()
	{
		$blog_id = $this -> input -> post('blogId');
		$content = $this -> input -> post('content');
		$login_user = $this -> session -> userdata('login_user');
		$user_id = $login_user -> user_id;
		
		$save_data = array(
			'user_id' => $user_id,
			'article_id' => $blog_id,
			'content' => $content
		);
		
		$result = $this -> comment_model -> save($save_data);
		if($result){
			echo 'success';
		}else{
			echo 'fail';
		}
	}
}