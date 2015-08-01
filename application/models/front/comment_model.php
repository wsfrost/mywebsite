<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {

	public function save($data){
			$this -> db -> insert('t_comment', $data);
			if($this -> db -> affected_rows() > 0){
				return TRUE;
			}
			return FALSE;
	}
	
	public function get_tag($article_id){
		$this -> db -> select('tags.*,tag.tag_name');
		$this -> db -> from('t_article_tag tags');
		$this -> db -> join('t_tag tag','tags.tag_id = tag.tag_id');
		$this -> db -> where('tags.article_id',$article_id);
		return $this -> db -> get() -> result();
	}
	
	public function get_comment($article_id){
		$this -> db -> select('comment.*,user.username');
		$this -> db -> from('t_comment comment');
		$this -> db -> join('t_user user','comment.user_id = user.user_id');
		$this -> db -> where('comment.article_id',$article_id);
		return $this -> db -> get() -> result();
	}
	
	public function get_las_comments(){
		$this -> db -> select('article.*,comment.add_time');
		$this -> db -> from('t_article article');
		$this -> db -> join('t_comment comment','comment.article_id = article.article_id');
		$this -> db -> order_by('comment.add_time','desc');
		$this -> db -> limit(3);
		return $this -> db -> get() -> result();
		
	}
	
}