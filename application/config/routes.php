<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';


$route['admin/login'] = 'admin/welcome/login';
$route['admin/check_login'] = 'admin/admin/check_login';
$route['admin/index'] = 'admin/welcome/index';
$route['admin/post-article'] = 'admin/welcome/post';
$route['admin/list-article'] = 'admin/welcome/list_article';



$route['front/login'] = 'front/welcome/login';
$route['front/reg'] = 'front/welcome/reg';
$route['front/do_reg'] = 'front/welcome/do_reg';
$route['front/check_login'] = 'front/welcome/check_login';
$route['front/index'] = 'front/welcome/index';
$route['front/index/(:num)'] = 'front/welcome/index';
$route['front/about'] = 'front/welcome/about';
//$route['front/index2'] = 'front/welcome/index2';
$route['front/contact'] = 'front/welcome/contact';
$route['front/single'] = 'front/welcome/single';
$route['front/category'] = 'front/welcome/category';
$route['front/tag'] = 'front/welcome/tag';
$route['front/do_contact'] = 'front/welcome/do_contact';


$route['front/logout'] = 'front/user/login';
/* End of file routes.php */
/* Location: ./application/config/routes.php */