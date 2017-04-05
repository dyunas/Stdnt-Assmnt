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
$route['admin/dashboard'] = 'Admin/Dashboard/Dashboard/Index';
$route['admin'] = 'Admin/Dashboard/Dashboard/Index';

//Account Manager
$route['admin/acct_mngr'] = 'Admin/Account_Manager/Account_manager/Index';

//Course Manager
$route['admin/course_mngr/toggler'] = 'Admin/Course_Manager/Course_manager/Toggler_availability';
$route['admin/course_mngr/update'] = 'Admin/Course_Manager/Course_manager/Update_course';
$route['admin/course_mngr/get_course_info'] = 'Admin/Course_Manager/Course_manager/Get_course_info';
$route['admin/course_mngr/add'] = 'Admin/Course_Manager/Course_manager/Add_course';
$route['admin/course_mngr'] = 'Admin/Course_Manager/Course_manager/Index';

//Student Record
$route['admin/student_rcrd/get_student_assessment_info'] = 'Admin/Student_Records/Student_records/Get_student_assessment_info';
$route['admin/student_rcrd/update_assessment/(:any)'] = 'Admin/Student_Records/Student_records/Update_student_assessment/$1';
$route['admin/student_rcrd/view/(:any)'] = 'Admin/Student_Records/Student_records/View_record/$1';
$route['admin/student_rcrd'] = 'Admin/Student_Records/Student_records/Index';
$route['admin/student_rcrd/get_fee_amount'] = 'Admin/Student_Records/Student_records/Get_fee_amount';
$route['admin/student_rcrd/get_payment_scheme'] = 'Admin/Student_Records/Student_records/Get_payment_scheme';

//School Year and Semester
$route['admin/settings/school_year/sy/update'] = 'Admin/Yr_Semester/School_year/Update_sy';
$route['admin/settings/school_year/sem/update'] = 'Admin/Yr_Semester/School_year/Update_sem';
$route['admin/settings/school_year'] = 'Admin/Yr_Semester/School_year/Index';
/*---End Admin Routes---*/

//School Year and Semester
$route['admin/settings/fee_mngr/toggler'] = 'Admin/Fee_manager/Fee_manager/Toggler_availability';
$route['admin/settings/fee_mngr/add'] = 'Admin/Fee_manager/Fee_manager/Add_fee';
$route['admin/settings/fee_mngr'] = 'Admin/Fee_manager/Fee_manager/Index';

//Payment Scheme
$route['admin/settings/pymnt_schm/toggler'] = 'Admin/Payment_scheme/Payment_scheme/Toggler_availability';
$route['admin/settings/pymnt_schm/update'] = 'Admin/Payment_scheme/Payment_scheme/Update_scheme';
$route['admin/settings/pymnt_schm/add'] = 'Admin/Payment_scheme/Payment_scheme/Add_scheme';
$route['admin/settings/pymnt_schm'] = 'Admin/Payment_scheme/Payment_scheme/Index';
/*---End Admin Routes---*/

/*---Cashier Routes--*/
//$route['cashier/student_rcrd/view/(:any)'] = 'Cashier/Dashboard/Dashboard/View_record/$1';
$route['cashier/dashboard'] = 'Cashier/Dashboard/Dashboard/Index';
$route['cashier'] = 'Cashier/Dashboard/Dashboard/Index';
$route['cashier/get_student_record'] = 'Cashier/Student_Records/Student_records/Get_student_record';
$route['cashier/get_student_payment'] = 'Cashier/Student_Records/Student_records/Get_student_payment';
$route['cashier/update_payment'] = 'Cashier/Student_Records/Student_records/Update_student_payment';
$route['cashier/proc_other_payment'] = 'Cashier/Student_Records/Student_records/Process_other_payment';

// View daily transactions
$route['cashier/transactions/export_to_excel'] = 'Cashier/Transactions/Export_to_excel/Export_daily_transaction';
$route['cashier/transaction/get_transaction_tbl'] = 'Cashier/Transactions/Transactions/Get_transaction_tbl';
$route['cashier/transactions'] = 'Cashier/Transactions/Transactions/Index';
/*---End Cashier Routes---*/

/*---Registrar Routes--*/
// Dashboard
$route['registrar/dashboard'] = 'Registrar/Dashboard/Dashboard/Index';
$route['registrar'] = 'Registrar/Dashboard/Dashboard/Index';

// Student Record
$route['registrar/student_rcrd/view/(:any)'] = 'Registrar/Student_Records/Student_records/View_record/$1';
$route['registrar/student_rcrd/auth_enroll'] = 'Registrar/Student_Records/Student_records/Auth_student_enrollment';
$route['registrar/student_rcrd/enroll'] = 'Registrar/Student_Records/Student_records/Enroll_student';
$route['registrar/student_rcrd'] = 'Registrar/Student_records/Student_records/Index';
/*---End Cashier Routes---*/