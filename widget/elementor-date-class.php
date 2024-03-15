<?php
namespace Elementor;

class Elementor_Date_Widget extends Widget_Base {

    public function get_name() {
        return 'elementor-date-widget'; 
    }

    public function get_title() {
        return __('Elementor Date Widget', 'elementor-date');
    }
    public function get_icon() {
        return 'eicon-date';
    }

    public function get_categories() {
        return ['date'];
    }

    protected function _register_controls() {
        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'linuscom'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
    
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'linuscom'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Your Title', 'linuscom'),
                'placeholder' => __('Enter your title', 'linuscom'),
                'dynamic' => ['active' => true],
            ]
        );
    
        $this->add_control(
            'current_date',
            [
                'label' => __('Current Date', 'linuscom'),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
                'description' => __('Select the current date.', 'linuscom'),
                'default' => date('Y-m-d'), // Default value is the current date
            ]
        );
    
        $this->end_controls_section();
    
        // Style Section
        $this->start_controls_section(
            'style_section',
            [
                'label' => __('Style', 'linuscom'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
    
        $this->add_control(
            'title_style_heading',
            [
                'label' => __('Title Style', 'linuscom'),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
    
        $this->add_control(
            'title_alignment',
            [
                'label' => __('Title Alignment', 'linuscom'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'linuscom'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'linuscom'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'linuscom'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} h2' => 'text-align: {{VALUE}};',
                ],
            ]
        );
    
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'linuscom'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h2' => 'color: {{VALUE}};',
                ],
            ]
        );
    
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => __('Typography', 'linuscom'),
                'selector' => '{{WRAPPER}} h2',
            ]
        );
    
        $this->add_control(
            'title_blend_mode',
            [
                'label' => __('Title Blend Mode', 'linuscom'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'normal' => __('Normal', 'linuscom'),
                    'multiply' => __('Multiply', 'linuscom'),
                    'screen' => __('Screen', 'linuscom'),
                    'overlay' => __('Overlay', 'linuscom'),
                    // Add more blend modes as needed
                ],
                'selectors' => [
                    '{{WRAPPER}} h2' => 'mix-blend-mode: {{VALUE}};',
                ],
            ]
        );
    
        $this->add_control(
            'date_style_heading',
            [
                'label' => __('Date Style', 'linuscom'),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
    
        $this->add_control(
            'date_alignment',
            [
                'label' => __('Date Alignment', 'linuscom'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'linuscom'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'linuscom'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'linuscom'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} p' => 'text-align: {{VALUE}};',
                ],
            ]
        );
    
        $this->add_control(
            'date_color',
            [
                'label' => __('Date Color', 'linuscom'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} p' => 'color: {{VALUE}};',
                ],
            ]
        );
    
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'date_typography',
                'label' => __('Typography', 'linuscom'),
                'selector' => '{{WRAPPER}} p',
            ]
        );
    
        $this->add_control(
            'date_blend_mode',
            [
                'label' => __('Date Blend Mode', 'linuscom'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'normal' => __('Normal', 'linuscom'),
                    'multiply' => __('Multiply', 'linuscom'),
                    'screen' => __('Screen', 'linuscom'),
                    'overlay' => __('Overlay', 'linuscom'),
                    // Add more blend modes as needed
                ],
                'selectors' => [
                    '{{WRAPPER}} p' => 'mix-blend-mode: {{VALUE}};',
                ],
            ]
        );
    
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<h2>' . $settings['title'] . '</h2>';
        echo '<p>'.$settings['current_date'] . '</p>';
    }
}
