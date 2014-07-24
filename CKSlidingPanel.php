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

class CKSlidingPanel_Admin
{
    private $options;

    public function __construct()
    {
        add_action('admin_menu', array($this, 'add_plugin_page'));
        add_action('admin_init', array($this, 'settings_init'));
    }

    public function add_plugin_page()
    {
        add_menu_page('CKSlidingPanel Plugin Settings', 'CKSlidingPanel', 'administrator', __FILE__, array($this, 'settings_page'), 'dashicons-menu');
    }

    public function settings_init()
    {
        register_setting('ckslidingpanel', 'align');
        add_settings_section('main', 'Main', array($this, 'settings_instruction'), 'settings_page');
        add_settings_field('align', 'Alignment', array($this, 'settings_align'), 'settings_page', 'ckslidingpanel');
    }

    public function settings_instruction()
    {
        echo 'Setup your panel below :';
    }

    public function settings_align()
    {
        echo '<input type="text" id="align", name="ckslidingpanel[align]" value="">';
    }

    public function settings_page()
    {
        $this->options = get_option('ckslidingpanel');
        ?>
        <div class="wrap">
        <h2>CKSlidingPanel</h2>
        <form method="post" action="options.php"> 
        <?php
            settings_fields('ckslidingpanel');
            do_settings_sections( 'settings_page' );
            submit_button();
        ?>
        </form>
        </div>
        <?php

    }
}

if( is_admin() )
    $ckslidingpanel = new CKSlidingPanel_Admin();
