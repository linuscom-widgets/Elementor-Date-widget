<?php
/*
Plugin Name: Elementor Widget Date 
Description: Elementor widget for creating Dates and current Date .
Version: 1.0
Author: Dhia Abedraba
*/

if (!defined('ABSPATH')) exit;

class Elementor_Date_Plugin {

    public function __construct() {
        add_action('elementor/elements/categories_registered', array($this, 'register_elementor_date_category'));
        add_action('elementor/widgets/widgets_registered', array($this, 'register_elementor_date_widget'));
    }

    public function register_elementor_date_category($elements_manager) {
        $elements_manager->add_category(
            'date',
            [
                'title' => __('Date', 'elementor-date'),
                'icon' => 'fa fa-calendar', // Change the icon as needed
            ]
        );
    }

    public function register_elementor_date_widget($widgets_manager) {
        require_once(plugin_dir_path(__FILE__) . 'widget/elementor-date-class.php'); 

        $widgets_manager->register_widget_type(new \Elementor\Elementor_Date_Widget()); 
    }
}

new Elementor_Date_Plugin();


