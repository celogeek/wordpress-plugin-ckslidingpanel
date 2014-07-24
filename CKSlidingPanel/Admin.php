<?php
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
        add_menu_page('CKSlidingPanel Plugin Settings', 'CKSlidingPanel', 'administrator', 'CKSlidingPanel', array($this, 'settings_page'), 'dashicons-menu');
    }

    public function settings_init()
    {
        register_setting('ckslidingpanel_options', 'align');
    }

    public function settings_page()
    {
        include 'Admin/SettingsPage.php';
    }
}
