<?php

class CKSlidingPanel_Sidebar
{
    public function __construct()
    {
        add_action( 'widgets_init', array( $this, 'sidebar_init' ));
    }

    public function sidebar_init()
    {
        $sidebar = array(
            'name' => 'CKSlidingPanel',
            'id' => 'CKSlidingPanel_Sidebar',
            'description' => 'Floating CKSlidingPanel, setup option in the admin menu.',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
        );
        register_sidebar($sidebar);

    }
}

