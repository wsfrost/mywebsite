<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_model extends CI_Model {

	
	public function get_all()
	{
		return $this -> db -> get('t_article') -> result();
		
	}
	
	public function get_limit(){
		$this -> db -> select('article.*');
		$this -> db -> from('t_article article');
		$this -> db -> order_by('article.add_time','desc');
		$this -> db -> limit(8);
		return $this -> db -> get() -> result();
	}
	
	public function get_by_id($article_id){
		$this -> db -> set('click','click+1',FALSE);
		$this -> db -> where('article_id',$article_id);
		$this -> db -> update('t_article');
		
		$this -> db -> select('article.*,category.category_name');
		$this -> db -> from('t_article article');
		$this -> db -> join('t_category category','article.category_id = category.category_id');
		$this -> db -> where('article.article_id',$article_id);
		return $this -> db -> get() -> row();
	}
	
	public function get_tag($article_id){
		$this -> db -> select('tags.*,tag.tag_name');
		$this -> db -> from('t_article_tag tags');
		$this -> db -> join('t_tag tag','tags.tag_id = tag.tag_id');
		$this -> db -> where('tags.article_id',$article_id);
		return $this -> db -> get() -> result();
	}

    public function get_desc_article(){
    	$this -> db -> select('article.*');
		$this -> db -> from('t_article article');
    	$this -> db -> order_by('article.add_time','desc');
		$this -> db -> limit(3);
		return $this -> db -> get() -> result();
    }
}