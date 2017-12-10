<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'front/home';

// Buses Front
/* Searching Bus */
$route['search']='buses/search';

/* Booking Ticket */
$route['tickets']='buses/tickets';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Accomondations
$route['hotels.html/(.+)$'] = 'accomondations/hotels_details/$1';

$route['hotels.html'] = 'hotels';
$route['hotelspage.html']='hotels';


$route['hotels'] = "hotels/listhotel";
$route['hotels/listhotel(:any)'] = "hotels/listhotel/$1";
$route['hotels/listhotel/(:any)/(:any)'] = "hotels/listhotel/$1/$2";
$route['hotels/listhotel/(:any)/(:any)/(:any)'] = "hotels/listhotel/$1/$2/$3";
$route['hotels/listhotel/(:any)/(:any)/(:any)/(:any)'] = "hotels/listhotel/$1/$2/$3/$4"; 


// ==============================================

/*admin*/
$route['admin'] = 'admin/Admin_Login/index';
$route['signin.html'] = 'admin/Admin_Login/index';

//User Signup
$route['signup.html'] = 'admin/Admin_Login/signup';
$route['admin/guest_register'] = 'admin/Admin_Login/guest_register';


//When login button click
$route['admin/verifylogin'] = 'admin/Admin_Login/verifylogin';
//$route['admin/login/validate_credentials'] = 'user/validate_credentials';

// After Login Success
$route['admin/dashboard'] = 'admin/Admin_dashboard/index';
$route['dashboard.html'] = 'admin/Admin_dashboard/index';

$route['booking.html'] = 'admin/Admin_dashboard/booking';
// (:any)
$route['booking.html/(:any)'] = 'admin/Admin_dashboard/booking/$1';
$route['booking.html/(:any)/(:any)'] = 'admin/Admin_dashboard/booking/$1/$2';
$route['guests.html'] = 'admin/Admin_dashboard/guests';

$route['profile.html'] = 'admin/Admin_dashboard/profile';

$route['invoice-print.html'] = 'admin/Admin_dashboard/invoice_print';




// Vechicles Management
// list_vechicles
$route['vehicles.html'] = 'admin/vehicles/vehicles';

$route['list-vehicles.html'] = 'admin/vehicles/vehicles/list_vehicles';

// list_vechicles_blocked
$route['vehicle-blocked.html'] = 'admin/vehicles/vehicles/list_vechicles_blocked';
$route['vehicle-report.html']='admin/vehicles/vehicles/vehicle_report';
//show_vechicles

// $route['list-vechicles.html'] = 'admin/Admin_dashboard/show_vechicles';

$route['add-vehicles.html'] = 'admin/vehicles/vehicles/add';
$route['edit-vehicles.html'] = 'admin/vehicles/vehicles/edit';
$route['view-vehicles.html'] = 'admin/vehicles/vehicles/view';


// Logout
$route['logout'] = 'admin/Admin_Login/logout';
