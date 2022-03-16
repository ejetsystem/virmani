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


$route['default_controller'] = 'home/index';
$route['404_override'] = 'home/error_404';
$route['translate_uri_dashes'] = FALSE;
$route['index'] = 'home/index';
$route['error-404'] = 'home/error_404';

// super admin routes
$route['superadmin/dashboard'] = 'admin/dashboard';
$route['superadmin/settings'] = 'admin/settings';
$route['superadmin/settings/appearance'] = 'admin/settings/appearance';
$route['superadmin/language'] = 'admin/language';
$route['superadmin/language/edit/(:any)'] = 'admin/language/edit/$1';

$route['superadmin/settings/set_language'] = 'admin/settings/set_language';

$route['superadmin/package'] = 'admin/package';
$route['superadmin/package/edit/(:any)'] = 'admin/package/edit/$1';


$route['superadmin/payment/transactions'] = 'admin/payment/transactions';
$route['superadmin/department'] = 'admin/department';
$route['superadmin/department/add'] = 'admin/department/add';
$route['superadmin/department/edit/(:any)'] = 'admin/department/edit/$1';

$route['superadmin/users'] = 'admin/users';

$route['superadmin/blog_category'] = 'admin/blog_category';
$route['superadmin/blog_category/add'] = 'admin/blog_category/add';
$route['superadmin/blog_category/edit/(:any)'] = 'admin/blog_category/edit/$1';

$route['superadmin/blog'] = 'admin/blog';
$route['superadmin/blog/add'] = 'admin/blog/add';
$route['superadmin/blog/edit/(:any)'] = 'admin/blog/edit/$1';

$route['superadmin/services'] = 'admin/services';
$route['superadmin/services/add'] = 'admin/services/add';
$route['superadmin/services/edit/(:any)'] = 'admin/services/edit/$1';

$route['superadmin/pages'] = 'admin/pages';
$route['superadmin/pages/add'] = 'admin/pages/add';
$route['superadmin/pages/edit/(:any)'] = 'admin/pages/edit/$1';

$route['superadmin/faq'] = 'admin/faq';
$route['superadmin/contact'] = 'admin/contact';

//site routes
$route['features'] = 'home/features';
$route['faqs'] = 'home/faqs';
$route['pricing'] = 'home/pricing';
$route['contact'] = 'home/contact';
$route['blogs'] = 'home/blogs';
$route['users'] = 'home/users';
$route['category/(:any)'] = 'home/category/$1';
$route['post/(:any)'] = 'home/post_details/$1';
$route['page/(:any)'] = 'home/page/$1';

$route['create-profile'] = 'home/create_profile';
$route['create-profile/(:any)'] = 'home/create_profile/$1';
$route['page/(:any)'] = 'home/page/$1';
$route['home/check_username/(:any)'] = 'home/check_username/$1';
$route['purchase-plan/(:any)'] = 'home/purchase/$1';
$route['payment-success/(:any)'] = 'home/payment_success/$1';
$route['payment-cancel/(:any)'] = 'home/payment_cancel/$1';
$route['pay'] = 'home/pays';

//user route
$route['profile/(:any)'] = 'profile/user/$1';
$route['profile/about-me/(:any)'] = 'profile/about_me/$1';
$route['resume/(:any)'] = 'profile/resume/$1';
$route['portfolio/(:any)'] = 'profile/portfolio/$1';
$route['blog/(:any)'] = 'profile/blog/$1';
$route['post/(:any)/(:any)'] = 'profile/details/$1/$2';
$route['category/(:any)/(:any)'] = 'profile/category/$1/$2';
$route['contact/(:any)'] = 'profile/contact/$1';
$route['appointment/(:any)'] = 'profile/appointment/$1';
$route['book-appointment/(:any)'] = 'profile/book_appointment/$1';
$route['send-message'] = 'profile/send_message';
$route['download/(:any)'] = 'profile/download/$1';
$route['portfolio/(:any)/(:any)'] = 'profile/portfolio_details/$1/$2';


$route['change_password'] = 'admin/dashboard/change_password';


//auth routes
$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['verify-email'] = 'auth/verify';
$route['setup'] = 'auth/setup';



//Doctor
$route['clinic-admin/doctor'] = 'admin/doctor';
$route['clinic-admin/doctor/add'] = 'admin/doctor/add';
$route['clinic-admin/doctor/delete'] = 'admin/doctor/delete';
$route['clinic-admin/doctor/update'] = 'admin/doctor/update';

$route['clinic-admin/doctor/delete_doctor'] = 'admin/doctor/delete_doctor/$1';
$route['clinic-admin/doctor/edit/(:any)'] = 'admin/doctor/edit/$1';
$route['clinic-admin/doctor/delete_doctor/10'] = 'admin/doctor/delete_doctor/$1';


//Patients
$route['clinic-admin/patients'] = 'admin/patients';
$route['clinic-admin/patients/add'] = 'admin/patients/add';
$route['clinic-admin/patients/edit/(:any)'] = 'admin/patients/edit/$1';
$route['clinic-admin/patients/view/(:any)'] = 'admin/patients/view_patient/$1';
$route['clinic-admin/patients/view/(:any)/(:any)'] = 'admin/patients/view_patient/$1/$2';
$route['clinic-admin/patients/update'] = 'admin/patients/update_patient';
$route['clinic-admin/patients/delete-patients/(:any)'] = 'admin/patients/delete_patients/$1';
$route['clinic-admin/patients/delete-insurance'] = 'admin/patients/delete_insurance';
$route['clinic-admin/patients/get-phone'] = 'admin/patients/get_phone';
$route['clinic-admin/patients/all_prescriptions/(:any)'] = 'admin/patients/all_prescriptions/$1';

// Appointment
$route['clinic-admin/appointment'] = 'admin/appointment';
$route['clinic-admin/appointment/add-appointment'] = 'admin/appointment/add_appointment';
$route['clinic-admin/appointment/add'] = 'admin/appointment/add';
$route['clinic-admin/appointment/delete/(:any)'] = 'admin/appointment/delete/$1';
$route['clinic-admin/appointment/calendar-view'] = 'admin/appointment/calendar';
$route['clinic-admin/appointment/fetch'] = 'admin/appointment/fetch_particular_appointment';
$route['clinic-admin/appointment/chair-view'] = 'admin/appointment/chairView';
$route['clinic-admin/appointment/change-appointment-status'] = 'admin/appointment/changeAppointmentStatus';
////
$route['clinic-admin/appointment/all_list'] = 'admin/appointment/all_list';
$route['clinic-admin/appointment/chairView'] = 'admin/appointment/chairView';
$route['clinic-admin/appointment/calendar'] = 'admin/appointment/calendar';
$route['clinic-admin/appointment/assign'] = 'admin/appointment/assign';


 


//Dashboard
$route['clinic-admin/dashboard/user'] = 'admin/dashboard/user';
$route['clinic-admin/dashboard/change_password'] = 'admin/dashboard/change_password';

//Subcripton
$route['clinic-admin/subscription'] = 'admin/subscription';
$route['clinic-admin/subscription/upgrade/basic/monthly'] = 'admin/subscription/upgrade/basic/monthly';
$route['clinic-admin/subscription/upgrade/basic/monthly/(:any)'] = 'admin/subscription/upgrade/basic/monthly/$1';
$route['clinic-admin/subscription/upgrade/standared/monthly'] = 'admin/subscription/upgrade/standared/monthly';
$route['clinic-admin/subscription/upgrade/standared/monthly/(:any)'] = 'admin/subscription/upgrade/standared/monthly/$1';
$route['clinic-admin/subscription/upgrade/premium/monthly'] = 'admin/subscription/upgrade/premium/monthly';
$route['clinic-admin/subscription/upgrade/premium/monthly/(:any)'] = 'admin/subscription/upgrade/premium/monthly/$1';
$route['clinic-admin/subscription/upgrade/basic/yearly'] = 'admin/subscription/upgrade/basic/yearly';
$route['clinic-admin/subscription/upgrade/basic/yearly/(:any)'] = 'admin/subscription/upgrade/basic/yearly/$1';
$route['clinic-admin/subscription/upgrade/standared/yearly'] = 'admin/subscription/upgrade/standared/yearly';
$route['clinic-admin/subscription/upgrade/standared/yearly/(:any)'] = 'admin/subscription/upgrade/standared/yearly/$1';
$route['clinic-admin/subscription/upgrade/premium/yearly'] = 'admin/subscription/upgrade/premium/yearly';
$route['clinic-admin/subscription/upgrade/premium/yearly/(:any)'] = 'admin/subscription/upgrade/premium/yearly/$1';
$route['clinic-admin/subscription/upgrade/(:any)/(:any)'] = 'admin/subscription/upgrade/$1/$1';

//QR Code
$route['clinic-admin/profile/qr_code'] = 'admin/profile/qr_code';
$route['clinic-admin/profile/download_qrcode'] = 'admin/profile/download_qrcode';

//Rating
$route['clinic-admin/dashboard/rating'] = 'admin/dashboard/rating';

//Chamber
$route['clinic-admin/chamber'] = 'admin/chamber';
$route['clinic-admin/chamber/add'] = 'admin/chamber/add';
$route['clinic-admin/chamber/set_primary/(:any)'] = 'admin/chamber/set_primary/$1';
$route['clinic-admin/chamber/edit/(:any)'] = 'admin/chamber/edit/$1';
$route['clinic-admin/chamber/delete/(:any)'] = 'admin/chamber/delete/$1';

//Department
$route['clinic-admin/department'] = 'admin/department';
$route['clinic-admin/department/add'] = 'admin/department/add';
$route['clinic-admin/department/edit/(:any)'] = 'admin/department/edit/$1';
$route['clinic-admin/department/delete/(:any)'] = 'admin/department/delete//$1';

//Consultation Setting
$route['clinic-admin/live_consults/settings'] = 'admin/live_consults/settings';
$route['clinic-admin/live_consults'] = 'admin/live_consults';
$route['clinic-admin/live_consults/evisit_settings'] = 'admin/live_consults/evisit_settings';
$route['clinic-admin/live_consults/edit/(:any)'] = 'admin/live_consults/edit/$1';
// $route['clinic-admin/prescription'] = 'admin/live_consults/evisit_settings';

//Staff
$route['clinic-admin/staff'] = 'admin/staff';
$route['clinic-admin/staff/add'] = 'admin/staff/add';
$route['clinic-admin/staff/edit/(:any)'] = 'admin/staff/edit/$1';
$route['clinic-admin/staff/delete/(:any)'] = 'admin/staff/delete/$1';



//Settings
$route['clinic-admin/diagonosis'] = 'admin/diagonosis';
$route['clinic-admin/diagonosis/add'] = 'admin/diagonosis/add';
$route['clinic-admin/diagonosis/edit/(:any)'] = 'admin/diagonosis/edit/$1';
$route['clinic-admin/diagonosis/delete/(:any)'] = 'admin/diagonosis/delete/$1';

$route['clinic-admin/advises'] = 'admin/advises';
$route['clinic-admin/advises/add'] = 'admin/advises/add';
$route['clinic-admin/advises/edit/(:any)'] = 'admin/advises/edit/$1';
$route['clinic-admin/advises/delete/(:any)'] = 'admin/advises/delete/$1';

$route['clinic-admin/additional_advises'] = 'admin/additional_advises';
$route['clinic-admin/additional_advises/add'] = 'admin/additional_advises/add';
$route['clinic-admin/additional_advises/edit/(:any)'] = 'admin/additional_advises/edit/$1';
$route['clinic-admin/additional_advises/delete/(:any)'] = 'admin/additional_advises/delete/$1';

$route['clinic-admin/advise_investigation'] = 'admin/advise_investigation';
$route['clinic-admin/advise_investigation/add'] = 'admin/advise_investigation/add';
$route['clinic-admin/advise_investigation/edit/(:any)'] = 'admin/advise_investigation/edit/$1';
$route['clinic-admin/advise_investigation/delete/(:any)'] = 'admin/advise_investigation/delete/$1';


//Prescription
$route['clinic-admin/prescription'] = 'admin/prescription';
$route['clinic-admin/prescription/all_prescription'] = 'admin/prescription/all_prescription';

//Drugs
$route['clinic-admin/drugs'] = 'admin/drugs';
$route['clinic-admin/drugs/edit/(:any)'] = 'admin/drugs/edit/$1';
$route['clinic-admin/drugs/delete/(:any)'] = 'admin/drugs/delete/$1';

//Profile
$route['clinic-admin/profile'] = 'admin/profile';
$route['clinic-admin/profile/update'] = 'admin/profile/update';

//Education

$route['clinic-admin/educations'] = 'admin/educations';
$route['clinic-admin/educations/add'] = 'admin/educations/add';
$route['clinic-admin/educations/edit/(:any)'] = 'admin/educations/edit/$1';
$route['clinic-admin/educations/delete/(:any)'] = 'admin/educations/delete/$1';

//Exprience
$route['clinic-admin/experiences'] = 'admin/experiences';
$route['clinic-admin/experiences/add'] = 'admin/experiences/add';
$route['clinic-admin/experiences/edit/(:any)'] = 'admin/experiences/edit/$1';
$route['clinic-admin/experiences/delete/(:any)'] = 'admin/experiences/delete/$1';


 