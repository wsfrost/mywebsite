<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {

	
	public function get_all_category()
	{
		return $this -> db -> get('t_category') -> result();
	}
	
	public function get_article($category_id){
		$this -> db -> select('article.*,category.category_name');
		$this -> db -> from('t_article article');
		$this -> db -> join('t_category category','article.category_id = category.category_id');
		$this -> db -> where('article.category_id',$category_id);
		return $this -> db -> get() -> result();
	}
	
}