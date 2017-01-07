<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*---Login Routes---*/
$route['login'] = 'Login/Index';
$route['login/auth_login'] = 'Login/Auth_login';
/*---End Login Routes---*/

/*---Logout Routes---*/
$route['logout'] = 'Logout/Index';
/*---End Lougout Routes---*/

/*---Admin Routes---*/
//Dashboard
$route['admin/dashboard'] = 'Admin_Dboard/Dashboard/Index';
$route['admin'] = 'Admin_Dboard/Dashboard/Index';

//Account Manager
$route['admin/acct_mngr'] = 'Account_Manager/Account_manager/Index';

//Course Manager
$route['admin/course_mngr'] = 'Course_Manager/Course_manager/Index';

//Student Record
$route['admin/student_rcrd'] = 'Student_Records/Student_records/Index';

//School Year and Semester
$route['admin/settings/school_year'] = 'Yr_Semester/School_year/Index';
/*---End Admin Routes---*/

//School Year and Semester
$route['admin/settings/fee_mngr'] = 'Fee_manager/Fee_manager/Index';
/*---End Admin Routes---*/