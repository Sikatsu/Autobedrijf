<?php

/**
 * The admin-specific functionality of the plugin.
 * @see       http://www.tussendoor.nl
 * @since      2.0.0
 */
class open_rdw_kenteken_voertuiginformatie_Admin
{

    /**
     * The ID of this plugin.
     * @since    2.0.0
     * @var string $open_rdw_kenteken_voertuiginformatie    The ID of this plugin.
     */
    private $open_rdw_kenteken_voertuiginformatie;

    /**
     * The version of this plugin.
     * @since    2.0.0
     * @var string $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     * @since      2.0.0
     * @param string $open_rdw_kenteken_voertuiginformatie The name of this plugin.
     * @param string $version                              The version of this plugin.
     */
    public function __construct($open_rdw_kenteken_voertuiginformatie, $version)
    {
        $this->open_rdw_kenteken_voertuiginformatie = $open_rdw_kenteken_voertuiginformatie;
        $this->version = $version;

        add_action('admin_menu', [$this, 'admin_menu']);
        add_action('widgets_init', [$this, 'register_widget']);

        add_action('wp_ajax_open-rdw-notice-dismiss', [$this, 'admin_notice_dismiss']);
        $nodis = get_option('open-rdw-notice-dismissed'); //Workaround, because wordpress still supports PHP 5.4..
        if (empty($nodis) && isset($_GET['page']) && $_GET['page'] == 'open_data_rdw') {
            add_action('admin_notices', [$this, 'admin_notice_donate_upgrade']);
        }

        // When editting post or page add our hidden fields
        add_action('admin_footer', [$this, 'add_tinymce_form']);
        add_filter('mce_buttons', [$this, 'add_tinymce_button']);
        add_filter('mce_external_plugins', [$this, 'register_tinymce_button']);
    }

    /**
     * Display menu page.
     *
     * @since    2.0.0
     */
    public function admin_menu()
    {
        add_menu_page(
            'Open data RDW',
            'Open data RDW',
            'manage_options',
            'open_data_rdw',
            [&$this, 'settings'],
            plugin_dir_url(__FILE__) . 'images/open-rdw_white.png'
        );
    }

    /**
     * Display settings/admin page.
     *
     * @since    2.0.0
     */
    public function settings()
    {
        if (isset($_GET['tab']) && $_GET['tab'] == 'getting-started') {
            require_once(plugin_dir_path(__FILE__).'partials/open-rdw-kenteken-voertuiginformatie-admin-getting-started.php');
        } else {
            require_once plugin_dir_path(__FILE__) . 'partials/open-rdw-kenteken-voertuiginformatie-admin-display.php';
        }
    }

    /**
     * Function that adds a dismiss option so we don't nag our users with admin notices.
     *
     * @since    2.0.0
     */
    public function admin_notice_dismiss()
    {
        add_option('open-rdw-notice-dismissed', 1);
    }

    /**
     * Function that displays our admin notice and might make our user donate or go premium.
     *
     * @since    2.0.0
     */
    public function admin_notice_donate_upgrade()
    {
        ?><div class="notice notice-success is-dismissible open-rdw-notice">
            <p><?= __('You are using the free version of our Open RDW plugin.', 'Open RDW kenteken voertuiginformatie'); ?>
            <br><?= __('If you like this plugin you can donate us via paypal or iDeal or buy the premium version of this plugin.', 'Open RDW kenteken voertuiginformatie'); ?></p>
            <p><a href="https://tussendoor.nl/wordpress-plugins/open-rdw"><?= __('Check this page for more information.', 'Open RDW kenteken voertuiginformatie'); ?></a></p>
        </div><?php
    }

    /**
     * Register our open rdw widget.
     *
     * @since    2.0.0
     */
    public function register_widget()
    {
        require_once plugin_dir_path(__FILE__) . '../includes/class-open-rdw-kenteken-voertuiginformatie-widget.php';
        register_widget('Open_RDW_Kenteken_Widget');
    }

    /**
     * Add our tinymce button to the post/page text area.
     *
     * @since    2.0.0
     */
    public function add_tinymce_button($buttons)
    {
        // array_push($buttons, 'open_rdw_kenteken_button', 'open_rdw_kenteken_voertuiginformatie');
        $buttons[] = 'open_rdw_kenteken_button';

        return $buttons;
    }

    /**
     * Register our tinymce button for the post/page text area.
     *
     * @since    2.0.0
     */
    public function register_tinymce_button($plugin_array)
    {
        $plugin_array['open_rdw_kenteken_button'] = plugin_dir_url(__FILE__) . 'js/open-rdw-kenteken-voertuiginformatie-tinymce.js';

        return $plugin_array;
    }

    /**
     * Our TB_overlay() that displays the shortcode menu when you hit the tinymce button.
     *
     * @since    2.0.0
     */
    public function add_tinymce_form()
    {
        $fields = include plugin_dir_path(__FILE__) . '../includes/open-rdw-kenteken-voertuiginformatie-fields.php';
        require_once plugin_dir_path(__FILE__) . 'partials/open-rdw-kenteken-voertuiginformatie-tinymce-display.php';
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    2.0.0
     */
    public function enqueue_styles()
    {
        wp_enqueue_style($this->open_rdw_kenteken_voertuiginformatie, plugin_dir_url(__FILE__) . 'css/open-rdw-kenteken-voertuiginformatie-admin.css', [], $this->version, 'all');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    2.0.0
     */
    public function enqueue_scripts()
    {
        wp_enqueue_script($this->open_rdw_kenteken_voertuiginformatie, plugin_dir_url(__FILE__) . 'js/open-rdw-kenteken-voertuiginformatie-admin.js', [ 'jquery' ], $this->version, false);

        // Gutenberg does not use thickbox, so we have to load it manually
        add_thickbox();
    }
}
