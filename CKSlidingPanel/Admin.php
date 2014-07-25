<?php
class CKSlidingPanel_Admin
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'menu_init'));
        add_action('admin_init', array($this, 'settings_init'));
    }

    public function menu_init()
    {
        add_menu_page('CKSlidingPanel Plugin Settings', 'CKSlidingPanel', 'administrator', 'CKSlidingPanel', array($this, 'settings_page'), 'dashicons-menu');
    }

    public function settings_init()
    {
        register_setting('ckslidingpanel', 'ckslidingpanel_options');
        $this->options();
    }

    public function settings_page()
    {
        $options = $this->options();
        include 'Admin/SettingsPage.php';
    }

    public function options()
    {
        $options = get_option('ckslidingpanel_options');
        if (!$options || isset($_POST['reset_options']))
            $options = $this->reset_options();
        return $options;
    }

    public function reset_options()
    {
        $options = array("text" => "Menu", "align" => "left");
        update_option('ckslidingpanel_options', $options);
        return $options;
    }
}
