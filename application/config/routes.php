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
$route['default_controller'] = 'site';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['site/about-info'] = 'site/about';
$route['site/contact'] = 'site/contact_info';
$route['site/service/(:num)/(:any)'] = 'site/service/$1/$2';
$route['site/variable'] = 'site/pass_var';
$route['site/insert-data'] = 'site/insert_data_into_table';

$route['action/select-all'] = 'action/get_all_data';
$route['action/update-data'] = 'action/update_data';
$route['action/all-users'] = 'action/get_users';
$route['action/delete-single'] = 'action/delete_single_user';
$route['action/phone-filter'] = 'action/condition';
$route['helpers/form'] = 'user/form_helper_study';
$route['helpers/form-submit'] = 'user/form_submit_method';
$route['users/list'] = 'user/list_all_users';

$route['add-session'] = 'mysession/add_session';
$route['get-sessions'] = 'mysession/get_session';
$route['remove-session'] = 'mysession/remove_session';

//File Upload Library Routes
$route['form-upload'] = 'myupload/my_upload_form';
$route['submit-file'] = 'myupload/upload_my_files';

//echo date("YmdHis");
$route['my-uri'] = 'myuri';
$route['my-segments'] = 'myuri/my_segments';

$route['custom-library'] = 'myuri/run';

$route['my-input-form'] = 'myuri/my_html';
$route['submit-form-data'] = 'myuri/submit_form_data';

$route['learn-helpers'] = 'learnhelpers/helper_class';
$route['learn-string-helpers'] = 'learnhelpers/string_helper';
$route['learn-captcha-helpers'] = 'learnhelpers/learn_captcha';

$route['my-form'] = 'learnhelpers/my_form';

$route['my-captcha'] = 'learnhelpers/my_captcha_form';
$route['my_captcha_submit'] = 'learnhelpers/my_captcha_form_submit';

$route['myfile'] = 'learnhelpers/my_file_helper';

$route['mydirectory'] = "learnhelpers/my_working_directory";

$route['inflector'] = "learnhelpers/my_call_inflector";

$route['myCustomHelper'] = "learnhelpers/my_custom_helper";
