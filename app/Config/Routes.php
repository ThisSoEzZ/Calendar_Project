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
$routes->get('/', 'FullCalendar::index');
$routes->get('/home/index', 'Fullcalendar::index');
$routes->get('/register/signup', 'Register::index');
$routes->get('/login/signin', 'Login::index');
$routes->get('/home/index', 'User::index',['filter' => 'authGuard']);
$routes->get('/logout', 'Login::logout',['filter' => 'authGuard']);
$routes->get('/logout_message', 'Login::logout_message');
$routes->get('/dashboard', 'Admin::index',['filter' => 'authGuard']);

$routes->get('/User/edit_profile/(:num)', 'User::editprofile/$1',['filter' => 'authGuard']);
$routes->get('/User/edit_password/(:num)', 'User::editpassword/$1',['filter' => 'authGuard']);
$routes->get('/User/updatePassword/(:num)', 'User::updatePassword/$1',['filter' => 'authGuard']);
$routes->get('/User/meeting_user_information/(:num)', 'meeting::meeting_user_information/$1',['filter' => 'authGuard']);

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
$routes->get('/Admin/admin_repairDetail/(:num)', 'Admin::admin_repairDetail/$1');
$routes->get('/Admin/admin_Adminprofile/(:num)', 'Admin::admin_Adminprofile/$1');
$routes->get('/Admin/editAdminpasswordAdmin/(:num)', 'Admin::editAdminpasswordAdmin/$1');
$routes->get('/Admin/updateAdminPasswordAdmin/(:num)', 'Admin::updateAdminPasswordAdmin/$1');
$routes->get('/Admin/updateCaseRepair/(:num)', 'Admin::updateCaseRepair/$1');


// $routes->post('updateProfile', 'User::updateProfile');

$routes->post('updateProfile/(:num)', 'User::updateProfile/$1');


$routes->get('/FullCalendar/byroom', 'FullCalendar::byroom');
$routes->get('/FullCalendar/bystatus/(:num)', 'FullCalendar::bystatus/$1');
$routes->get('/FullCalendar/getRecords', 'FullCalendar::getRecords');
$routes->get('/Meeting/DetailMeetingRoom/(:num)', 'FullCalendar::DetailMeetingRoom/$1');


$routes->get('/Meeting/meeting_information', 'Meeting::meeting_information');
$routes->get('/Meeting/update_detail_meeting/(:num)', 'Meeting::update_detail_meeting/$1',['filter' => 'authGuard']);
$routes->get('/Meeting/user_meeting_detail_edit/(:num)', 'Meeting::user_meeting_detail_edit/$1');
$routes->get('/Meeting/delete/(:num)', 'Meeting::delete_meeting_user/$1',['filter' => 'authGuard']);
$routes->get('/insert/(:num)', 'Meeting::insert/$1',['filter' => 'authGuard']);
$routes->get('/insert', 'Meeting::insert',['filter' => 'authGuard']);
$routes->post('submit-form', 'Meeting::store',['filter' => 'authGuard']);


$routes->get('/room/information_room', 'Room::index');
$routes->get('/room/room_detail/(:num)', 'Room::GetRoomId/$1');

$routes->get('/report/meeting_report', 'Report::index');
$routes->get('/TestEvent/(:num)', 'Report::Test/$1',['filter' => 'authGuard']);

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
