<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// if (is_file(APPPATH.'config/routes.php'))
// {
//     include(APPPATH.'config/routes.php');
// }

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
$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// https://www.kammavaari.com/admin
// https://www.kammavaari.com/admin/Admin_home  --- /MyDashboard
$route['admin/MyDashboard']  = "Admin_home";
// https://www.kammavaari.com/admin/admin_pv        ---- /profile_validation
// $route['admin/profile_validation']  = "admin_pv";
// https://www.kammavaari.com/admin/Admin_pv/pv_result      ---/validation_result       -- done
// $route['admin/validation_result']  = "Admin_pv/pv_result";
// $route['admin/validation_result/(:any)']  = "Admin_pv/pv_result";
// https://www.kammavaari.com/admin/admin_search/viewprofile/1193  --/view_myprofile
$route['admin/view_myprofile/:id']  = "admin_search/viewprofile";
// https://www.kammavaari.com/admin/admin_search ---/basic_search 
$route['admin/basic_search']  = "admin_search";

// https://www.kammavaari.com/admin/admin_search/searchprofiles  ---/search_result
// $route['admin/search_result']  = "admin_search/searchprofiles";
// $route['admin/search_result/(:any)']  = "admin_search/searchprofiles";

// https://www.kammavaari.com/admin/admin_search/prosearch_resultfileview/1193  --/search_viewprofile
$route['admin/search_viewprofile/:id']  = "admin_search/profileview";
// https://www.kammavaari.com/admin/admin_payment ---/enterpayment
$route['admin/enterpayment']  = "admin_payment";
// https://www.kammavaari.com/admin/admin_photos ---/photoshp_photos
$route['admin/photoshp_photos']  = "admin_photos";
$route['admin/admin_photosdelete']  = "admin_photosdelete";

// https://www.kammavaari.com/admin/admin_del_profiles  ---/set_del_profiles
$route['admin/set_del_profiles']  = "admin_del_profiles";
$route['admin/inactivate_profile']  = "Admin_ap/inactivateProfile";
$route['admin/list_inactivate_profiles']  = "Admin_ap/listInactivateProfiles";
$route['admin/list_inactivate_profiles/(:any)']  = "Admin_ap/listInactivateProfiles";

$route['admin/pv_result_myprofile'] = "Admin_pv/pv_result_myprofile";
$route['admin/pv_result_myprofile/(:any)'] = "Admin_pv/pv_result_myprofile";


$route['admin/employee_report'] = "Admin_ap/employee_report";
$route['admin/employee_report/(:any)'] = "Admin_ap/employee_report";


$route['admin/payment_report'] = "Admin_ap/payment_reports";
$route['admin/payment_report/(:any)'] = "Admin_ap/payment_reports";
// https://www.kammavaari.com/admin/profile_assign 
// https://www.kammavaari.com/admin/call_history


$route['admin/login']  = "Admin/index";

$route['admin/logout']  = "Admin/logout";

$route['admin/profile_assign']  = "Admin_ap/profile_assign";

$route['admin/call_history_pf/:id']    = "Admin_ap/call_history_pf";

$route['admin/marketing_reminders']    = "Admin_ap/marketing_reminders";

$route['admin/prime_profiles']   = "admin_ap/prime_profiles"; 

$route['admin/call_history']    = "Admin_ap/call_history";
$route['admin/mysidesinterest']    = "Admin_ap/mysidesinterest";
$route['admin/opposidesidesinterest']    = "Admin_ap/opposidesidesinterest";
$route['admin/opposidependingfourtyeighth']    = "Admin_ap/opposidependingfourtyeighth";
$route['admin/mysidefollowupsint']    = "Admin_ap/mysidefollowupsint";
$route['admin/matchmetingserious']    = "Admin_ap/matchmetingserious";
$route['admin/regularprofiles']    = "Admin_ap/regularprofiles";
$route['admin/notifications']    = "Admin_ap/loginNotifications";
$route['admin/confidentialprofiles']    = "Admin_ap/confidentialprofiles";
$route['admin/superconfidentialprofiles']    = "Admin_ap/superconfidentialprofiles";
$route['admin/eliteprofiles']    = "Admin_ap/eliteprofiles";
$route['admin/supereliteprofiles']    = "Admin_ap/supereliteprofiles";
$route['admin/notshownprofiles']    = "Admin_ap/notshownprofiles";
$route['admin/mysideclosetickets']    = "Admin_ap/mysideclosetickets";
$route['admin/opposideclosetickets']    = "Admin_ap/opposideclosetickets";
$route['admin/mysidefollowupsintfortyeighth']    = "Admin_ap/mysidefollowupsintfortyeighth";
$route['admin/freenewprofiles']    = "Admin_ap/freenewprofiles";
$route['admin/nearbyexpiryprofiles']    = "Admin_ap/nearbyexpiryprofiles";
$route['admin/noservicesincemonth']    = "Admin_ap/noservicesincemonth";
$route['admin/freeprofticketexpiry']    = "Admin_ap/freeprofticketexpiry";
$route['admin/unpaidmembers']    = "Admin_ap/unpaidmembers";
$route['admin/bothsideinterest']    = "Admin_ap/bothsideinterest";
$route['admin/bothsideinterest_action']    = "Admin_ap/bothsideinterest_action";
$route['admin/close_ticket_action']    = "Admin_ap/close_ticket_action";
$route['admin/mysidefollowupscloseticket']    = "Admin_ap/mysidefollowupscloseticket";
$route['admin/remindernotes']    = "Admin_ap/remindernotes";
$route['admin/mmstwoprofiles']    = "Admin_ap/mmstwoprofiles";
$route['admin/savermticketnotes']    = "Admin_ap/savermticketnotes";
$route['admin/getrmticketnotes']    = "Admin_ap/getrmticketnotes";
$route['admin/marketingticketshistory']    = "Admin_ap/marketingticketshistory";
$route['admin/viewcontactsinfo']    = "Admin_ap/viewcontactsinfo";
$route['admin/viewsaform']    = "Admin_ap/viewsaform";
$route['admin/rmsendinterest']    = "Admin_ap/rmsendinterest";
$route['admin/addeditstaff']    = "Admin_ap/addeditstaff";
$route['admin/staffdelete']    = "Admin_ap/staffdelete";
$route['admin/staffupdate']    = "Admin_ap/staffupdate";
$route['admin/addstaffadmin']    = "Admin_ap/addstaffadmin";
$route['admin/editeducdet']    = "Admin_ap/editeducdet";
$route['admin/profileviewed']    = "Admin_ap/profileviewed";
$route['admin/emailtemplates']    = "Admin_ap/emailtemplates";
$route['admin/submitemailtemplate']    = "Admin_ap/submitemailtemplate";
$route['admin/deletepayment']    = "Admin_ap/deletepayment";

$route['admin/successstories']    = "Successstories/index";

$route['admin/ws/update_profile_owner']  = "Admin_ap/update_profile_owner";

$route['admin/ws/get_customers']  = "Admin_ap/get_customers";
$route['admin/ws/get_registerby']  = "Admin_ap/get_registerby";

$route['admin/ws/get_employees']  = "Admin_ap/get_employees";

$route['admin/ws/get_call_log']  = "Admin_ap/get_call_log";

$route['admin/ws/save_customer_sa_fee']  = "Admin_ap/save_customer_sa_fee";

$route['admin/ws/save_customer_reg_fee']  = "Admin_ap/save_customer_reg_fee";

$route['admin/ws/save_call_log']  = "Admin_ap/save_call_log";

$route['admin/ws/save_reminder']  = "Admin_ap/save_reminder";
$route['admin/ws/save_reminderADM']  = "Marketing/save_reminderADM";

$route['admin/ws/getstatesADM']  = "Admin_ap/getstatesADM";
$route['admin/ws/getdistrictsADM']  = "Admin_ap/getdistrictsADM";

$route['admin/ws/get_user_info']  = "Admin_ap/get_user_info";
$route['admin/ws/get_user_infoADM']  = "Marketing/get_user_infoADM";
$route['admin/ws/get_call_logADM']  = "Marketing/get_call_logADM";
$route['admin/ws/get_market_reminder_search']  = "Admin_ap/get_market_reminder_search";

$route['admin/ws/get_emp_associated_profiles']  = "Admin_ap/get_emp_associated_profiles";
$route['admin/ws/get_emp_associated_profilesADM']  = "Marketing/get_emp_associated_profilesADM";

$route['admin/ws/get_association_search']  = "Admin_ap/get_association_search";

$route['admin/ws/getPropertyDataForUpdate']  	= "Admin_ap/getPropertyDataForUpdate";
$route['admin/ws/propertyDetailUpdate']  		= "Admin_ap/propertyDetailUpdate";

$route['admin/ws/getBasicDataForUpdate']  		= "Admin_ap/getBasicDataForUpdate";
$route['admin/ws/basicDetailUpdate']  			= "Admin_ap/basicDetailUpdate";
$route['admin/ws/getEducationDataForUpdate']  	= "Admin_ap/getEducationDataForUpdate";
$route['admin/ws/educationDetailUpdate']  		= "Admin_ap/educationDetailUpdate";
$route['admin/ws/getProfessionDataForUpdate']  		= "Admin_ap/getProfessionDataForUpdate";
$route['admin/ws/getEducationDataForUpdate']  	= "Admin_ap/getEducationDataForUpdate";
$route['admin/ws/proffesionDetailUpdate']  		= "Admin_ap/proffesionDetailUpdate";

$route['admin/ws/getParentsDataForUpdate']  	= "Admin_ap/getParentsDataForUpdate";
$route['admin/ws/parentsDetailUpdate']  		= "Admin_ap/parentsDetailUpdate";

$route['admin/ws/getSiblingDataForUpdate']  	= "Admin_ap/getSiblingDataForUpdate";
$route['admin/ws/siblingsDetailUpdate']  		= "Admin_ap/siblingsDetailUpdate";
$route['admin/ws/getdegreeUser']  				= "Admin_ap/getdegreeUser";
$route['admin/ws/getspecializationUser']  		= "Admin_ap/getspecializationUser";

$route['admin/ws/getSistersDataForUpdate']      = "Admin_ap/getSistersDataForUpdate";
$route['admin/ws/sisterDetailsUpdate']      	= "Admin_ap/sisterDetailsUpdate";
$route['admin/ws/sisterDetailsAdd']      		= "Admin_ap/sisterDetailsAdd";
$route['admin/ws/brotherDetailsAdd']      		= "Admin_ap/brotherDetailsAdd";
$route['admin/ws/getBrotherDataForUpdate']      = "Admin_ap/getBrotherDataForUpdate";
$route['admin/ws/brotherDetailsUpdate']      	= "Admin_ap/brotherDetailsUpdate";
$route['admin/ws/deletesiblings']      			= "Admin_ap/deletesiblings";
$route['admin/emailtest']      	= "Admin_ap/emailtest";


$route['admin/ws/getContactDataForUpdate']  	= "Admin_ap/getContactDataForUpdate";
$route['admin/ws/contactDetailUpdate']  		= "Admin_ap/contactDetailUpdate";

$route['admin/ws/getsubcastes']  				= "Admin_ap/getsubcastes";

$route['admin/ws/getAstroDataForUpdate']  		= "Admin_ap/getAstroDataForUpdate";
$route['admin/ws/astroDetailUpdate']  		= "Admin_ap/astroDetailUpdate";

$route['admin/ws/getRelativesDataForUpdate']  	   = "Admin_ap/getRelativesDataForUpdate";
$route['admin/ws/ParentsiblingsDetailUpdate']  	   = "Admin_ap/ParentsiblingsDetailUpdate";
$route['admin/ws/ParentssisterDetailsAdd']         = "Admin_ap/ParentssisterDetailsAdd";
$route['admin/ws/ParentsbrotherDetailsAdd']        = "Admin_ap/ParentsbrotherDetailsAdd";
$route['admin/ws/getParentsSistersDataForUpdate']  = "Admin_ap/getParentsSistersDataForUpdate";
$route['admin/ws/parentsisterDetailsUpdate']       = "Admin_ap/parentsisterDetailsUpdate";
$route['admin/ws/getparentsBrotherDataForUpdate']  = "Admin_ap/getparentsBrotherDataForUpdate";
$route['admin/ws/parentsbrotherDetailsUpdate']     = "Admin_ap/parentsbrotherDetailsUpdate";


$route['admin/ws/preferenceUpdate']    = "Admin_ap/preferenceUpdate";

$route['admin/ws/addProfile']    		= "Admin_ap/addProfile";
$route['admin/ws/sendProfileOnMail']    = "Admin_ap/sendProfileOnMail";
$route['admin/ws/deletesisterRelativesData']    = "Admin_ap/deletesisterRelativesData";
$route['admin/ws/deletebrotherRelativesData']    = "Admin_ap/deletebrotherRelativesData";
$route['admin/ws/getPartnerpreferenceDataForUpdate']    = "Admin_ap/getPartnerpreferenceDataForUpdate";

$route['admin/ws/getServiceData']    	  = "Admin_ap/getServiceData";
$route['admin/ws/getIDServiceData']    	  = "Admin_ap/getIDServiceData";
$route['admin/ws/setInterestedStatus']    = "Admin_ap/setInterestedStatus";


$route['admin/ws/user_full_report']    = "Admin_ap/user_full_report";

$route['admin/ws/verifyMobile']     = "Admin_ap/verifyMobile";
$route['admin/ws/verifyEmail']      = "Admin_ap/verifyEmail";
$route['admin/ws/updateEliteInfo']  = "Admin_ap/updateEliteInfo";
$route['admin/ws/updateShownInfo']  = "Admin_ap/updateShownInfo";
$route['admin/ws/updatePrimeInfo']  = "Admin_ap/updatePrimeInfo";
$route['admin/rm_profile_list']="Admin_ap/getProfilesCountByRm";
$route['admin/list_profiles_by_rm']="Admin_ap/listProfilesByRmId";
$route['admin/register_list']="Admin_ap/Register_list";
$route['admin/export_csv']="Admin_ap/export_csv";
$route['admin/admin_login_logs']="Admin_ap/AdminLoginLogs";
$route['admin/admin_login_logs_csv']="Admin_ap/admin_login_logs_csv";
$route['admin/register_list']="Admin_ap/Register_list";
$route['admin/dashboard']="Admin_ap/getAdminDashboard";
$route['admin/online_users']="Admin_ap/onlineNotifications";
$route['admin/online_users/(:any)']  = "Admin_ap/onlineNotifications";

$route['admin/notification_remainder'] = "Admin_ap/remainder_notifications";

$route['admin/expiry_notifications'] = "Admin_ap/expiry_notifications";
$route['admin/expiry_notifications/(:any)'] = "Admin_ap/expiry_notifications";


$route['admin/getSearchPageMyProfile']  = "Admin_newdevelopment/index";

$route['admin/no-image']  = "Admin_newdevelopment/no_image";



