<?php
/**
 * @package CKSlidingPanel
 * @version 1.0
 */
/*
Plugin Name: CKSlidingPanel
Plugin URI: http://wordpress.org/plugins/ckslidingpanel/
Description: Create a left or right floating panel, to place your widgets.
Version: 1.0
Author: Celogeek
Author URI: http://blog.celogeek.com/wordpress-plugins-ckslidingpanel
*/

/*
    Copyright 2014  CELOGEEK  (email : me@celogeek.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined('ABSPATH') or die("No script kiddies please!");

require_once('CKSlidingPanel/Admin.php');
require_once('CKSlidingPanel/Sidebar.php');

if( is_admin() )
    $ckslidingpanel_admin = new CKSlidingPanel_Admin();

if (function_exists('register_sidebar'))
    $ckslidingpanel_sidebar = new CKSlidingPanel_Sidebar();


