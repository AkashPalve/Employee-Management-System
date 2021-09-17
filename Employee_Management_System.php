<?php
 
/*
 
Plugin Name: Employee Management System
 
Plugin URI: localhost
 
Description: You can manage the attendance and leave of your users with the help of this plugin.
 
Version: 1.0
 
Author: Akash
 
License: GPLv2 or later
 
Text Domain: EMS
 
*/


define("PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_URL",plugins_url());

function add_my_custom_menu()
{
    add_menu_page("customplugin","EMS","manage_options","custom-plugin","custom_admin_view","dashicons-dashboard",6);
    add_submenu_page("custom-plugin","Add Employee","Add New User","manage_options","add-new","add_new_function");
    add_submenu_page("custom-plugin","Add Employee","Apply For Leave","manage_options","add-new1","add_new_function2");
    add_submenu_page("custom-plugin","Add Employee","Approve/Reject Leave","manage_options","add-new2","add_new_function3");
    add_submenu_page("custom-plugin","Add Employee","Leave List","manage_options","add-new3","add_new_function4");
    add_submenu_page("custom-plugin","Add Employee","Attendance Log","manage_options","add-new4","add_new_function5");
    add_submenu_page("custom-plugin","Add Employee","Attendance List","manage_options","add-new5","add_new_function6");
}

add_action("admin_menu","add_my_custom_menu");

function custom_admin_view()
{
   
    include_once PLUGIN_DIR_PATH."view.php";
    
}


function add_new_function()
{
    
    include_once PLUGIN_DIR_PATH."insert.php";


}


function add_new_function2()
{
    
    include_once PLUGIN_DIR_PATH."applyleave.php";
}


function add_new_function3()
{
    
    include_once PLUGIN_DIR_PATH."acceptleave.php";
}

function add_new_function4()
{
   
    include_once PLUGIN_DIR_PATH."leavelist.php";
}


function add_new_function5()
{
  
    include_once PLUGIN_DIR_PATH."attendanceactivity.php";
}


function add_new_function6()
{
    
    include_once PLUGIN_DIR_PATH."attendancelist.php";
}



/*
add_filter( 'init', 'user_role');


function user_role(){

    add_role('subscriber', 'Subscriber', array(
        
        'Employee Management System' => true,
        'Apply For Leave' => true,
        'Leave List' => true,
        'Attendance Log' => true

    ));


}*/


function newuser(){
    $result = add_role( 'user', 'User',
	array(
		'read'         => true, 
		'edit_posts'   => true, 
		'upload_files' => true, 
        'manage_options' => true,
        'Employee Management System' => true
	)
);
if ( null !== $result ) {
	echo 'Hooray! A new role has been created!';
}
else {
	echo '';
}


}//newuser


add_action('init', 'newuser');
add_filter('init', 'newuser');


