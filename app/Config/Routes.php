<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('User');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// custom routes
$routes->get('/', 'User::index');
$routes->get('/home/index', 'User::index');
$routes->get('/register/signup', 'Register::index');
$routes->get('/login/signin', 'Login::index');
$routes->get('/home/index', 'User::index',['filter' => 'authGuard']);
$routes->get('/logout', 'Login::logout');
$routes->get('/logout_message', 'Login::logout_message');
$routes->get('/dashboard', 'Admin::index',['filter' => 'authGuard']);

$routes->get('/User/repair_list', 'Repair::index');
$routes->get('/User/repair_detail/(:num)', 'Repair::repairDetail/$1');
$routes->get('/User/edit_profile/(:num)', 'User::editprofile/$1');
$routes->get('/User/user_detail_repair/(:num)', 'User::Getidrepair/$1');
$routes->get('/User/user_deatil_edit_repair/(:num)', 'User::GetEditRepair/$1');
$routes->get('/User/User_detail_id_repair/(:num)', 'User::GetidDetailrepair/$1');
$routes->get('/User/repair_list', 'Repair::demo2');
$routes->get('/User/bystatus/(:num)', 'Repair::bystatus/$1');
$routes->get('/User/edit_password/(:num)', 'User::editpassword/$1');
$routes->get('/User/updatePassword/(:num)', 'User::updatePassword/$1');


$routes->get('/Admin/admin_all_user', 'Admin::getAlluser');
$routes->get('/Admin/admin_all_admin', 'Admin::getAllAdmin');
$routes->get('/Admin/admin_all_repair', 'Admin::getAllrepair');
$routes->get('/Admin/Admindeleterepair/(:num)', 'Admin::Admindeleterepair/$1');
$routes->get('/Admin/admin_profile/(:num)', 'Admin::admin_profile/$1');
$routes->get('/Admin/updateProfileAdmin/(:num)', 'Admin::updateProfileAdmin/$1');
$routes->get('/Admin/bystatusAdmin/(:num)', 'Admin::bystatusAdmin/$1');
$routes->get('/Admin/editpassword/(:num)', 'Admin::editpassword/$1');
$routes->get('/Admin/updatePasswordAdmin/(:num)', 'Admin::updatePasswordAdmin/$1');
$routes->get('/Admin/admin_Userprofile/(:num)', 'Admin::admin_Userprofile/$1');
$routes->get('/Admin/editpasswordAdmin/(:num)', 'Admin::editpasswordAdmin/$1');
$routes->get('/Admin/updatePasswordUser/(:num)', 'Admin::updatePasswordUser/$1');

$routes->post('update_user_detail_case/(:num)', 'User::update_user_detail_case/$1');
$routes->post('update_user_detail_case2/(:num)', 'User::update_user_detail_case2/$1');

// $routes->get('/User/edit_profile_Image/(:num)', 'User::editprofileImage/$1');
$routes->post('updateProfile', 'User::updateProfile');

// $routes->get('/User/repair_insert_case/(:num)', 'Repair::repairGetId/$1');
$routes->get('/User/repair_insert_case/(:num)', 'Repair::repairGetId/$1');

$routes->post('repair_case_insert', 'Repair::repair_case_insert');
$routes->get('/repair/confirm-delete/(:num)', 'Repair::confirmdelete/$1');
$routes->get('/repair/delete/(:num)', 'Repair::delete/$1');

// $routes->post('updateimgprofile', 'User::updateimgprofile');
$routes->post('updateProfile2/(:num)', 'User::updateProfile2/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
