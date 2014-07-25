<?php
class CKSlidingPanel_Admin
{
    private $default_options;

    public function __construct()
    {
        $this->init_options();
        add_action('admin_menu', array($this, 'menu_init'));
        add_action('admin_init', array($this, 'settings_init'));
    }

    private function init_options()
    {
        $this->default_options = array(
            "text" => "Menu",
            "align" => "left",
            "color" => "#FFF",
            "backgroundColor" => "#000",
            "height" => "100%",
            "top" => "0%",
        );

        $need_to_update = false;
        $options = get_option('ckslidingpanel_options', array());
        foreach($this->default_options as $key => $value)
        {
            if (!isset($options[$key]))
            {
                $need_to_update = true;
                $options[$key] = $value;
            }
        }

        if ($need_to_update)
            update_option('ckslidingpanel_options', $options);
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
        $options = $this->default_options;
        update_option('ckslidingpanel_options', $options);
        return $options;
    }
}
