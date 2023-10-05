<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// Collection Main Category
$route['main-category'] = 'category/main';
$route['main-category/create'] = 'category/main_create';
$route['main-category/store'] = 'category/main_store';
$route['main-category/edit/(:any)'] = 'category/main_edit/$1';
$route['main-category/update/(:any)'] = 'category/main_update/$1';
$route['main-category/delete/(:any)'] = 'category/main_delete/$1';

// Collection Sub Category
$route['sub-category'] = 'category/sub';
$route['sub-category/create'] = 'category/sub_create';
$route['sub-category/store'] = 'category/sub_store';
$route['sub-category/edit/(:any)'] = 'category/sub_edit/$1';
$route['sub-category/update/(:any)'] = 'category/sub_update/$1';
$route['sub-category/delete/(:any)'] = 'category/sub_delete/$1';

// User Portal
// $route['about-us'] = 'user/about_us';
$route['library'] = 'user/library';
$route['library/search'] = 'user/search';
$route['library/book/(:any)'] = 'user/book/$1';
// $route['news-events'] = 'user/news_events';
$route['contact-us'] = 'user/contact_us';
$route['msac'] = 'MSAC/index';

// News and Events
$route['news-events'] = 'NewsEvents/news_events';
$route['news'] = 'NewsEvents/index';
$route['news/create'] = 'NewsEvents/create';
$route['news/store'] = 'NewsEvents/store';
$route['news/edit/(:any)'] = 'NewsEvents/edit/$1';
$route['news/update/(:any)'] = 'NewsEvents/update/$1';
$route['news/delete/(:any)'] = 'NewsEvents/delete/$1';
$route['news-events/read-more/(:any)'] = 'NewsEvents/read_more/$1';

// About Us
$route['about-us/lgrc-mimaropa-km-framework'] = 'about/framework';
$route['about-us/vision-mission-objectives-value-proposition'] = 'about/index';
$route['about-us/organizational-structure'] = 'about/organizational_structure';
$route['about-us/operations-management-policies-and-procedures'] = 'about/operations_management';
$route['about-us/guiding-principle-and-strategies'] = 'about/guiding_principles';
$route['about-us/popularizing-the-lgrc'] = 'about/popularizing_lgrc';

$route['default_controller'] = 'user';
$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = TRUE;
