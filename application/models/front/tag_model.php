<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tag_model extends CI_Model {

	
	public function get_tag_id($tag_id)
	{
		$this -> db -> select('article.*,tags.tag_id,category.category_name');
		$this -> db -> from('t_article article');
		$this -> db -> join('t_article_tag tags','article.article_id = tags.article_id');
		$this -> db -> join('t_category category',' category.category_id = article.category_id');
		$this -> db -> where('tags.tag_id',$tag_id);
		$this -> db -> limit(3);
		return $this -> db -> get() -> result();
	}
	
	public function get_all(){
		return $this -> db -> get('t_tag') -> result();
	}
	
	public function get_tag_name($tag_id){
		$this -> db -> select('tag.*');
		$this -> db -> from('t_tag tag');
		$this -> db -> where('tag.tag_id',$tag_id);
		return $this -> db -> get() -> result();	
	}

}