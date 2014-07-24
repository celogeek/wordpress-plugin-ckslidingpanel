<?php
class CKSlidingPanel_Admin
{
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
        register_setting('ckslidingpanel', 'ckslidingpanel_options');
    }

    public function settings_page()
    {
        if (isset($_POST['reset_options']))
        {
            $this->reset_options();
        }
        $options = $this->options();
        include 'Admin/SettingsPage.php';
    }

    public function options()
    {
        $options = get_option('ckslidingpanel_options');
        if (!$options)
        {
            $options = array('text' => 'Menu', 'align' => 'left');
        }
        return $options;
    }

    public function reset_options()
    {
        delete_option('ckslidingpanel_options');
    }
}
