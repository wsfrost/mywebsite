<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function index()
	{
		$this->load->view('admin/admin-index');
	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function list_article()
	{
		$this -> load -> model('admin/article_model');
		$articles = $this -> article_model -> get_all();

		$this -> load -> model('admin/category_model');
		$categories = $this -> category_model -> get_all();
		
		$data = array(
		    'articles' => $articles,
		    'categories' => $categories
		);
		$this->load->view('admin/list-article',$data);
	}

	public function post()
	{
		
		$this -> load -> model('admin/category_model');
		$categories = $this -> category_model -> get_all();
		$this->load->view('admin/post-article', array(
			'categories' => $categories
		));
		
		$this -> load -> view('admin/post-article');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */