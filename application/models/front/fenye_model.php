<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fenye_model extends CI_Model {
	
	    public function get_by_page($offect,$limit){
	    	$this -> db -> select('article.*,category.category_name');
		    $this -> db -> from('t_article article');
			$this -> db -> join('t_category category','article.category_id = category.category_id');
		    $this -> db -> limit($limit,$offect);
		    $query = $this -> db -> get();
	    	return $query -> result();
	    }
				
		public function get_by_page_category($category_id,$offect,$limit){
		    $this -> db -> select('article.*,category.category_name');
		    $this -> db -> from('t_article article');
		    $this -> db -> join('t_category category','article.category_id = category.category_id');
		    $this -> db -> where('article.category_id',$category_id);
		    $this -> db -> limit($limit,$offect);
		    return $this -> db -> get() -> result();
		}
		
		public function get_by_category($offect,$limit){
		    $this -> db -> select('article.*,category.category_name');
		    $this -> db -> from('t_article article');
		    $this -> db -> join('t_category category','article.category_id = category.category_id');
		    $this -> db -> limit($limit,$offect);
		    return $this -> db -> get() -> result();
		}
	
	
	
}
