<?php
 
/*
 
Plugin Name: Employee_Management_System
 
Plugin URI: localhost
 
Description: This is my plugin
 
Version: 1.0
 
Author: Akash
 
License: GPLv2 or later
 
Text Domain: EMS
 
*/


define("PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_URL",plugins_url());

function add_my_custom_menu()
{
    add_menu_page("customplugin","Employee_Management_System","manage_options","custom-plugin","custom_admin_view","dashicons-dashboard",6);
    add_submenu_page("custom-plugin","Add Employee","Add New Employee","manage_options","add-new","add_new_function");
    add_submenu_page("custom-plugin","Add Employee","Employee Attendance","manage_options","add-new1","add_new_function2");
    add_submenu_page("custom-plugin","Add Employee","Employee Leave","manage_options","add-new2","add_new_function3");
}

add_action("admin_menu","add_my_custom_menu");

function custom_admin_view()
{
    //echo "<h1>Welcome to EMS</h1>";
    include_once PLUGIN_DIR_PATH."view.php";
}


function add_new_function()
{
    //echo "<h1>Add New Employee</h1>";
    include_once PLUGIN_DIR_PATH."insert.php";
}


function add_new_function2()
{
    //echo "<h1>Update Employee</h1>";
    include_once PLUGIN_DIR_PATH."attendance.php";
}


function add_new_function3()
{
    //echo "<h1>Delete Employee</h1>";
    include_once PLUGIN_DIR_PATH."leave.php";
}

