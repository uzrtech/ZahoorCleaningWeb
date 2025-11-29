<?php
/*
Plugin Name: Clinox Addon
Plugin URI: https://themexriver.com/
Description: Clenfix theme helper plugin. 
Author: Themexriver
Author URI: https://themexriver.com
Version: 1.0.6
*/

namespace WebangonAddon; 
if (!defined('ABSPATH'))
    exit;
 
if (!class_exists('AshElement_Elementor_Addons')) :

    /**
     * Main AshElement_Elementor_Addons Class
     *
     */
    final class AshElement_Elementor_Addons {

        /** Singleton *************************************************************/

        private static $instance;

        /**
         * Main AshElement_Elementor_Addons Instance
         *
         * Insures that only one instance of AshElement_Elementor_Addons exists in memory at any one
         * time. Also prevents needing to define globals all over the place.
         */
        public static function instance() {

            if (!isset(self::$instance) && !(self::$instance instanceof AshElement_Elementor_Addons)) {

                self::$instance = new AshElement_Elementor_Addons;

                self::$instance->setup_constants();

                self::$instance->includes();

                self::$instance->hooks();

            }
            return self::$instance;
        }

        /**
         * Throw error on object clone
         *
         * The whole idea of the singleton design pattern is that there is a single
         * object therefore, we don't want the object to be cloned.
         */
        public function __clone() {
            // Cloning instances of the class is forbidden
            _doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'clenfix'), '1.6');
        }

        /**
         * Disable unserializing of the class
         *
         */
        public function __wakeup() {
            // Unserializing instances of the class is forbidden
            _doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'clenfix'), '1.6');
        }

        /**
         * Setup plugin constants
         *
         */
        private function setup_constants() {

            // Plugin Folder Path
            if (!defined('AE_PLUGIN_DIR')) {
                define('AE_PLUGIN_DIR', plugin_dir_path(__FILE__));
            }

            // Plugin Folder URL
            if (!defined('AE_PLUGIN_URL')) {
                define('AE_PLUGIN_URL', plugin_dir_url(__FILE__));
            }

            // Plugin Folder Path
            if (!defined('AE_ADDONS_DIR')) {
                define('AE_ADDONS_DIR', plugin_dir_path(__FILE__) . 'includes/widgets/');
            }
            
        }

        /**
         * Include required files
         *
         */
        private function includes() {

            require_once AE_PLUGIN_DIR . 'includes/helper-functions.php';
            require_once AE_PLUGIN_DIR . 'includes/query-functions.php';
            require_once AE_PLUGIN_DIR . 'includes/template-lib.php';
            require_once AE_PLUGIN_DIR . 'includes/action-filters.php';
            require_once AE_PLUGIN_DIR . 'includes/class-ocdi-importer.php';
        }

        /**
         * Setup the default hooks and actions
         */
        private function hooks() {

            add_action('elementor/widgets/widgets_registered', array($this, 'include_widgets'));

            add_action('elementor/elements/categories_registered', array($this, 'add_elementor_category'),10,100); 

            add_action('template_redirect', array($this, 'unblock_template_preview'),9);

            add_filter('body_class', array($this, 'remove_body_class'),11);

            add_filter( 'elementor/icons_manager/additional_tabs', array( $this, 'add_material_icons_tabs' ) );
                            
        }

        public function add_material_icons_tabs( $tabs = [] ) {

            $tabs['flaticon'] = array(
                'name'          => 'flaticon',
                'label'         => esc_html__( 'Flaticon', 'clefix-addon' ),
                'labelIcon'     => 'flaticon-envelope',
                'prefix'        => 'flaticon-',
                'displayPrefix' => 'flaticon',
                'url'           => AE_PLUGIN_URL . 'assets/flaticon/flaticon.css',
                'fetchJson'     => AE_PLUGIN_URL . 'assets/flaticon/fonts/flaticon.json',
                'ver'           => '3.0.1',
            );

            return $tabs;

        }

        public function remove_body_class ( $classes) {
            if (in_array('checkerbody', $classes)) {
              unset( $classes[array_search('checkerbody', $classes)] );
            }
          return $classes;
        }


        public function unblock_template_preview(){
            $instance = \Elementor\Plugin::$instance->templates_manager->get_source( 'local' );
            remove_action( 'template_redirect', [ $instance, 'block_template_frontend' ] ); 
        }

        public function add_elementor_category() {
            \Elementor\Plugin::instance()->elements_manager->add_category(
                'ashelement-addons',
                array(
                    'title' => __('Clenfix', 'clenfix'),
                ),
                1);
        }
        
        public function include_widgets($widgets_manager) {
            
            $widgets[] = '';
            foreach( glob( AE_PLUGIN_DIR. 'includes/widgets/*' ) as $file ) {

                $widgets[] = substr($file, strrpos($file, '/') + 1);
            }

            if (is_array($widgets)){
                $widgets = array_filter($widgets);
                foreach ($widgets as $key => $value){
                    if (!empty($value)) {
                        require_once AE_ADDONS_DIR . ''.$value.'/index.php';
                    }
                    
                }

            }
                                                                    
        }

    }

endif; // End if class_exists check

function AE() {
    return AshElement_Elementor_Addons::instance();
}

AE();

