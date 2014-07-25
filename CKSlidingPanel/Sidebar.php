<?php

class CKSlidingPanel_Sidebar
{
    public function __construct()
    {
        wp_enqueue_script('jquery');
        add_action( 'widgets_init', array( $this, 'sidebar_init' ));
        add_filter( 'wp_footer', array($this, 'sidebar_scripts'));
    }

    public function sidebar_init()
    {
        $sidebar = array(
            'name' => 'CKSlidingPanel',
            'id' => 'ckslidingpanel_sidebar',
            'description' => 'Floating CKSlidingPanel, setup option in the admin menu.',
            'before_title'  => '<h3 class="widget-title ckwidget">',
            'after_title'   => '</h3>',
            'before_widget' => '<aside id="%1$s" class="widget %2$s ckwidget">',
            'after_widget'  => '</aside>',
        );
        register_sidebar($sidebar);
    }

    public function sidebar_scripts()
    {
        if (is_active_sidebar('ckslidingpanel_sidebar'))
        {
            $options = get_option('ckslidingpanel_options');
            $options['width_with_border'] = (intval($options['width']) + 4) . "px";
            $options['menu_left'] = ((intval($options['width_with_border']) * 0.5) + 14) . "px";
            include('Sidebar/Content.php');
        }
    }
}

