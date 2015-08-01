<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
    {
    	parent::__construct();
        $this -> load ->model('front/articles_model');
		$this -> load ->model('front/comment_model');
		$this -> load -> model('front/category_model');
		$this -> load -> model('front/tag_model');
		$this -> load -> model('front/fenye_model');
		$this -> load -> model('front/user_model');
    }
	
	
	public function index()
	{
		$this->load->library('pagination');
		$result =$this -> articles_model -> get_all();
		if($this -> uri -> segment(3) == null){
			$start = 0 ;
		}else{
			$start = $this -> uri -> segment(3);
		}
		$config['base_url'] = base_url("front/index");
		$config['total_rows'] = count($result);
		$config['per_page'] = 8;
		$config['uri_segment'] = 3;
		$config['prev_tag_open'] = '<li>';
		$config['next_tag_open'] = '<li>';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['first_tag_open'] = '<li>';
		$config['first_link'] = 'First';
	    $config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		//$config['page_query_string'] = TRUE;
		
		
		/*$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li>';
		$config['cur_tag_close'] = '</li>';
		$config['full_tag_open'] = '<li>';
		$config['full_tag_close'] = '</li>';*/
		
		$this -> pagination -> initialize($config);
		$articless = $this -> fenye_model -> get_by_page($start,$config['per_page']);
		
		
		
		$categories = $this -> category_model -> get_all_category();
		$lim_articles = $this -> articles_model -> get_limit();
		$tagids = $this -> tag_model -> get_all();
		$las_comments = $this -> comment_model-> get_las_comments();
		$data = array(
		      'lim_articles'=>$lim_articles,
		      'categories' => $categories,
		      'tagids' => $tagids,
		      'las_comments'=> $las_comments,
		      'articless' => $articless
		);

	
		$this->load->view('front/index1',$data);
		
		
		
	}
	
	public function login(){
		$this->load->view('front/login');
	}
	
	public function check_login(){
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		$user = $this -> user_model -> get_by_email_pwd($username,$password);
		/*if($user){
			$this -> session -> set_userdata("login_user", $user);
			redirect('front/index');
		}else{
			$this->load->view('front/login');
		}*/
		
		if($user){
			$this -> session -> set_userdata("login_user", $user);
			echo 'success';
		}else{
			echo 'fail';
		}
	}
	
	public function reg(){
		$this->load->view('front/reg');
	}
	
	public function do_reg(){
		$name = $this -> input -> post('username');
		$pwd = $this -> input -> post('password');
		$pwd2 = $this -> input -> post('password2');
		$email = $this -> input -> post('email');
		
		if($pwd!=$pwd2){
			$this->load->view('reg');
		}else{
			$data = array(
			 'username' => $name,
		     'password' => $pwd,
		     'email' => $email,
		);
		
		$result = $this -> user_model -> save($data);
		if($result){
			//$this -> login();
			echo 'success';
		}else{
			$this -> reg();
		}
	  }
		
	}
	
	public function about()
	{
		$categories = $this -> category_model -> get_all_category();
		$this->load->view('front/about',array('categories' => $categories));
	}
	
	public function index2()
	{
	    $this->load->library('pagination');
		$result =$this -> articles_model -> get_all();
		if($this -> uri -> segment(4) == null){
			$start = 0 ;
		}else{
			$start = $this -> uri -> segment(4);
		}
		$config['base_url'] = base_url("front/welcome/index2");
		$config['total_rows'] = count($result);
		$config['per_page'] = 3;
		$config['uri_segment'] = 4;
		$config['prev_tag_open'] = '<li>';
		$config['next_tag_open'] = '<li>';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['first_tag_open'] = '<li>';
		$config['first_link'] = 'First';
	    $config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		
		$this -> pagination -> initialize($config);
		$articless = $this -> fenye_model -> get_by_page($start,$config['per_page']);
	    
			
		
		$categories = $this -> category_model -> get_all_category(); 
		$lim_articles = $this -> articles_model -> get_limit();  
		$las_comments = $this -> comment_model-> get_las_comments();
		$tagids = $this -> tag_model -> get_all();
		//$articles = $this -> articles_model -> get_all();
		$data = array(
		     //'articles' => $articles,
		     'lim_articles'=>$lim_articles,
		     'categories' => $categories,
		     'articless' => $articless,
		     'las_comments'=> $las_comments,
		     'tagids' => $tagids,
		);
		
		$this->load->view('front/index2',$data);
	}
	
	public function contact()
	{
		$categories = $this -> category_model -> get_all_category();
		$this->load->view('front/contact',array('categories' => $categories));
	}
	
	public function single()
	{ 
		$article_id = $this -> input -> get('article_id');
		$articles = $this -> articles_model -> get_all();
		$desc_article = $this -> articles_model -> get_desc_article();
		$categories = $this -> category_model -> get_all_category();
		$article = $this -> articles_model -> get_by_id($article_id);
		$tags = $this -> articles_model -> get_tag($article_id);
		$comments = $this -> comment_model -> get_comment($article_id);
		$tagids = $this -> tag_model -> get_all();
		$las_comments = $this -> comment_model-> get_las_comments();
		$lim_articles = $this -> articles_model -> get_limit();
		$data = array(
		     'article' => $article,
		     'tags' => $tags,
		     'comments' => $comments,
		     'categories' => $categories,
		     'articles' => $articles,
		     'tagids' => $tagids,
		     'las_comments'=> $las_comments,
		     'desc_article'=> $desc_article,
		     'lim_articles'=>$lim_articles
		);
		$this->load->view('front/single',$data);
	}
	
	public function category(){	
		$category_id = $this -> input ->get('category');
		$articles = $this -> articles_model -> get_all();
		$categories = $this -> category_model -> get_all_category(); 
		$desc_article = $this -> articles_model -> get_desc_article();
		$cat_articles = $this -> category_model ->get_article($category_id);
		$tags = $this -> articles_model -> get_tag($category_id);
		$tagids = $this -> tag_model -> get_all();
		$las_comments = $this -> comment_model-> get_las_comments();
		$lim_articles = $this -> articles_model -> get_limit();
		$data = array(
		     'articles' => $articles,
		     'categories' => $categories,
		     'cat_articles' => $cat_articles,
		     'tags' => $tags,
		     'tagids' => $tagids,
		     'las_comments'=> $las_comments,
		     'desc_article'=> $desc_article,
		     'lim_articles'=>$lim_articles
	
		);
		$this->load->view('front/category_article',$data);
		
	}

	public function tag(){
		$tag_id = $this -> input -> get('tag');
		$categories = $this -> category_model -> get_all_category();
		$tag_articles = $this -> tag_model -> get_tag_id($tag_id);
		$tag = $this -> tag_model -> get_tag_name($tag_id);
		$articles = $this -> articles_model -> get_all();
		$las_comments = $this -> comment_model-> get_las_comments();
		$tagids = $this -> tag_model -> get_all();
		$lim_articles = $this -> articles_model -> get_limit();
		$data = array(
		     'categories' => $categories,
		     'tag_articles' => $tag_articles,
		     'articles' => $articles,
		     'las_comments'=> $las_comments,
		     'tagids' => $tagids,
		     'tag' => $tag,
		     'lim_articles'=>$lim_articles
		);
		$this->load->view('front/tag_article',$data);
	}
	
	
	public function do_contact()
	{
		$name = $this -> input -> post('username');
		$pwd = $this -> input -> post('password');
		$email = $this -> input -> post('email');
		
			$data = array(
			 'username' => $name,
		     'password' => $pwd,
		     'email' => $email,
		);
		
		$result = $this -> user_model -> save($data);
		if($result){
			echo 'success';
		}else{
			echo 'fail';
		}
	  }
	
}