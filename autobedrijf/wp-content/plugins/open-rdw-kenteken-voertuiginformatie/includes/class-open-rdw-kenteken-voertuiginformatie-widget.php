<?php

/**
 * Our open rdw widget constructor, front-end, back-end and configuration manager
 * @see       http://www.tussendoor.nl
 * @since      2.0.0
 */
class Open_RDW_Kenteken_Widget extends WP_Widget
{

    /**
     * Constructor that sets our default settings.
     *
     * @since    2.0.0
     */
    public function __construct()
    {
        parent::__construct(
            'open_rdw_widget', // Base ID
            'Open RDW Kenteken widget', // Name
            [
                'description' => __('Request data by means of license plate from the Open RDW.', 'Open RDW kenteken voertuiginformatie')
            ] // Arguments
        );
    }

    /**
     * Front-end of the widget
     *
     * @since    2.0.0
     * @param $args     All of the widget arguments.
     * @param $settings All of the saved settings.
     */
    public function widget($args, $settings)
    {
        $settings['allfields'] = include plugin_dir_path(__FILE__) . '/open-rdw-kenteken-voertuiginformatie-fields.php';

        if (isset($_POST[$args['widget_id']])) {
            require_once plugin_dir_path(__FILE__) . 'class-open-rdw-kenteken-voertuiginformatie-api.php';
            $api = new open_rdw_kenteken_api();

            $kenteken = $api->clean_license($_POST[$args['widget_id']]);
            $kentekeninfo = $api->get_info($_POST[$args['widget_id']]);
        }

        if (isset($settings['title'])) {
            $title = apply_filters('widget_title', $settings['title']);
        }
        

        include plugin_dir_path(__FILE__) . '../public/partials/open-rdw-kenteken-voertuiginformatie-public-display.php';
    }

    /**
     * Back-end of the widget
     *
     * @since    2.0.0
     * @param array $settings The widget settings obviously.
     */
    public function form($settings)
    {
        $settings['allfields'] = include plugin_dir_path(__FILE__) . '/open-rdw-kenteken-voertuiginformatie-fields.php';

        if (!isset($settings['title'])) {
            $settings['title'] = __('Request licence plate information', 'Open RDW kenteken voertuiginformatie');
        }
        if (!isset($settings['class'])) {
            $settings['class'] = 'open_rdw_class';
        }

        include plugin_dir_path(__FILE__) . '../admin/partials/open-rdw-kenteken-voertuiginformatie-widget-display.php';
    }

    /**
     * This is responsible for saving the widget settings
     *
     * @since    2.0.0
     * @param  array $new_settings The new settings
     * @param  array $old_settings The old settings (which will be overwritten)
     * @return array Saves the new settings
     */
    public function update($new_settings, $old_settings)
    {
        return $new_settings;
    }
}
