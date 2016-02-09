<?php

/**
 * Settings admin class.
 *
 * @class FLBuilderAdminSettings
 */
final class FLBuilderAdminSettings {
	
	/**
	 * @property $errors
	 */
	static public $errors = array();
    
    /** 
     * @method init
     */
    static public function init()
    {
        add_action('admin_menu', 'FLBuilderAdminSettings::menu');
            
        if(isset($_REQUEST['page']) && $_REQUEST['page'] == 'fl-builder-settings') {
            add_action('admin_enqueue_scripts', 'FLBuilderAdminSettings::styles_scripts');
            self::save();
        }
    }
	 
	/**
     * @method styles_scripts
     */	 
	static public function styles_scripts()
	{
        // Styles
		wp_enqueue_style('fl-builder-admin-settings', FL_BUILDER_URL . 'css/fl-builder-admin-settings.css', array(), FL_BUILDER_VERSION);

		// Scripts
		wp_enqueue_script('fl-builder-admin-settings', FL_BUILDER_URL . 'js/fl-builder-admin-settings.js', array(), FL_BUILDER_VERSION);
		
		// Media Uploader
		wp_enqueue_media();
	}
	
	/**
     * @method menu
     */
	static public function menu() 
	{
	    if(current_user_can('delete_plugins')) {
    	    
    	    $title = FLBuilderModel::get_branding();
    	    $cap   = 'delete_plugins';
    	    $slug  = 'fl-builder-settings';
    	    $func  = 'FLBuilderAdminSettings::render';
    	    
            add_submenu_page('options-general.php', $title, $title, $cap, $slug, $func);
		}
	}
	 
	/**
     * @method render
     */	 
	static public function render()
	{
	    include FL_BUILDER_DIR . 'includes/admin-settings-js-config.php';
		include FL_BUILDER_DIR . 'includes/admin-settings.php';
	}
	 
	/**
     * @method render_page_class
     */	 
	static public function render_page_class()
	{
		if ( self::multisite_support() ) {
			echo 'fl-settings-network-admin';
		}
		else {
			echo 'fl-settings-single-install';
		}
	}
	 
	/**
     * @method render_page_heading
     */	 
	static public function render_page_heading()
	{
		$icon = FLBuilderModel::get_branding_icon();
		$name = FLBuilderModel::get_branding();
		
		if ( ! empty( $icon ) ) {
			echo '<img src="' . $icon . '" />';
		}
		
		echo '<span>' . sprintf( _x( '%s Settings', '%s stands for custom branded "Page Builder" name.', 'fl-builder' ), FLBuilderModel::get_branding() ) . '</span>';
	}
	 
	/**
     * @method render_update_message
     */	 
	static public function render_update_message()
	{
		if ( ! empty( self::$errors ) ) {
			foreach ( self::$errors as $message ) {
				echo '<div class="error"><p>' . $message . '</p></div>';
			}
		}
		else if( ! empty( $_POST ) && ! isset( $_POST['email'] ) ) {
			echo '<div class="updated"><p>' . __( 'Settings updated!', 'fl-builder' ) . '</p></div>';
		}
	}
	 
	/**
     * @method render_nav_items
     */	 
	static public function render_nav_items()
	{
		$item_data = array(
			'license' => array(
				'title'	=> __( 'License', 'fl-builder' ),
				'show'	=> FL_BUILDER_LITE !== true && ( is_network_admin() || ! self::multisite_support() )
			),
			'upgrade' => array(
				'title'	=> __( 'Upgrade', 'fl-builder' ),
				'show'	=> FL_BUILDER_LITE === true
			),
			'modules' => array(
				'title'	=> __( 'Modules', 'fl-builder' ),
				'show'	=> true
			),
			'templates' => array(
				'title'	=> __( 'Templates', 'fl-builder' ),
				'show'	=> FL_BUILDER_LITE !== true
			),
			'post-types' => array(
				'title'	=> __( 'Post Types', 'fl-builder' ),
				'show'	=> true
			),
			'icons' => array(
				'title'	=> __( 'Icons', 'fl-builder' ),
				'show'	=> FL_BUILDER_LITE !== true
			),
			'editing' => array(
				'title'	=> __( 'Editing', 'fl-builder' ),
				'show'	=> true
			),
			'branding' => array(
				'title'	=> __( 'Branding', 'fl-builder' ),
				'show'	=> self::has_support( 'branding' ) && ( is_network_admin() || ! self::multisite_support() )
			),
			'uninstall' => array(
				'title'	=> __( 'Uninstall', 'fl-builder' ),
				'show'	=> is_network_admin() || ! self::multisite_support()
			),
		);
		
		foreach ( $item_data as $key => $data ) {
			if ( $data['show'] ) {
				echo '<li><a href="#' . $key . '">' . $data['title'] . '</a></li>';
			}
		}
	}
	 
	/**
     * @method render_forms
     */	 
	static public function render_forms()
	{
		// License
		if ( is_network_admin() || ! self::multisite_support() )  {
			self::render_form( 'license' );
		}
		
		// Upgrade
		if ( FL_BUILDER_LITE === true )  {
			self::render_form( 'upgrade' );
		}
		
		// Modules
		self::render_form( 'modules' );
		
		// Templates
		self::render_form( 'templates' );
		
		// Post Types
		self::render_form( 'post-types' );
		
		// Icons
		self::render_form( 'icons' );
		
		// Editing
		self::render_form( 'editing' );
		
		// Branding
		self::render_form( 'branding' );
		
		// Uninstall
		self::render_form( 'uninstall' );
	}
	 
	/**
     * @method render_form
     */	 
	static public function render_form( $type )
	{
		if ( self::has_support( $type ) ) {
			include FL_BUILDER_DIR . 'includes/admin-settings-' . $type . '.php';
		}
	}
	 
	/**
     * @method render_form_action
     */	 
	static public function render_form_action( $type = '' )
	{
		if ( is_network_admin() ) {
			echo network_admin_url( '/settings.php?page=fl-builder-multisite-settings#' . $type );
		}
		else {
			echo admin_url( '/options-general.php?page=fl-builder-settings#' . $type );
		}
	}
	 
	/**
     * @method get_form_action
     */	 
	static public function get_form_action( $type = '' )
	{
		if ( is_network_admin() ) {
			return network_admin_url( '/settings.php?page=fl-builder-multisite-settings#' . $type );
		}
		else {
			return admin_url( '/options-general.php?page=fl-builder-settings#' . $type );
		}
	}
	 
	/**
     * @method supports
     */	 
	static public function has_support( $type )
	{
		return file_exists( FL_BUILDER_DIR . 'includes/admin-settings-' . $type . '.php' );
	}
	 
	/**
     * @method multisite_support
     */	 
	static public function multisite_support()
	{
		return is_multisite() && class_exists( 'FLBuilderMultisiteSettings' );
	}
	 
	/**
     * @method add_error
     */	 
	static public function add_error( $message )
	{
		self::$errors[] = $message;
	}
	 
	/**
     * @method save
     */	 
	static public function save()
	{
	    // Only admins can save settings.
	    if(!current_user_can('delete_plugins')) {
    	    return;
	    }
	    
		self::save_enabled_modules();
		self::save_enabled_templates();
		self::save_enabled_post_types();
		self::save_enabled_icons();
		self::save_editing_capability();
		self::save_branding();
		self::uninstall();
	}
	 
	/**
     * @method save_enabled_modules
     * @private
     */	 
	static private function save_enabled_modules()
	{
    	if ( isset( $_POST['fl-modules-nonce'] ) && wp_verify_nonce( $_POST['fl-modules-nonce'], 'modules' ) ) {
	    	
	    	$modules = array();
	    	
	    	if ( is_array( $_POST['fl-modules'] ) ) {
                $modules = array_map( 'sanitize_text_field', $_POST['fl-modules'] );
            }
        
        	if ( is_network_admin() ) {
	            update_site_option( '_fl_builder_enabled_modules', $modules );
        	}
            else if ( self::multisite_support() && ! isset( $_POST['fl-override-ms'] ) ) {
                delete_option( '_fl_builder_enabled_modules' );
            }
            else {
                update_option( '_fl_builder_enabled_modules', $modules );
            }
        }
    }
	 
	/**
     * @method save_enabled_templates
     * @private
     */	 
	static private function save_enabled_templates()
	{
    	if ( isset( $_POST['fl-templates-nonce'] ) && wp_verify_nonce( $_POST['fl-templates-nonce'], 'templates' ) ) {
        
        	$enabled_templates = sanitize_text_field( $_POST['fl-template-settings'] );
        
        	if ( is_network_admin() ) {
	        	update_site_option( '_fl_builder_enabled_templates', $enabled_templates );
        	}
            else if ( self::multisite_support() && ! isset( $_POST['fl-override-ms'] ) ) {
                delete_option( '_fl_builder_enabled_templates' );
            }
            else {
                update_option( '_fl_builder_enabled_templates', $enabled_templates );
            }
        }
    }
	 
	/**
     * @method save_enabled_post_types
     * @private
     */	 
	static private function save_enabled_post_types()
	{
    	if ( isset( $_POST['fl-post-types-nonce'] ) && wp_verify_nonce( $_POST['fl-post-types-nonce'], 'post-types' ) ) {
        
        	if ( is_network_admin() ) {
	        	
	        	$post_types = sanitize_text_field( $_POST['fl-post-types'] );
	        	$post_types = str_replace( ' ', '', $post_types );
	        	$post_types = explode( ',', $post_types );
	        	
	            update_site_option( '_fl_builder_post_types', $post_types );
        	}
            else if ( self::multisite_support() && ! isset($_POST['fl-override-ms'] ) ) {
                delete_option( '_fl_builder_post_types' );
            }
            else {
	            
	            $post_types = array();
                
                if ( is_array( $_POST['fl-post-types'] ) ) {
                    $post_types = array_map( 'sanitize_text_field', $_POST['fl-post-types'] );
                }
                
                update_option( '_fl_builder_post_types', $post_types );
            }
        }
    }
	 
	/**
     * @method save_enabled_icons
     * @private
     */	 
	static private function save_enabled_icons()
	{
        if ( isset( $_POST['fl-icons-nonce'] ) && wp_verify_nonce( $_POST['fl-icons-nonce'], 'icons' ) ) {
			
			// Make sure we have at least one enabled icon set. 
			if ( ! isset( $_POST['fl-enabled-icons'] ) && empty( $_POST['fl-new-icon-set'] ) ) {
				self::add_error( __( "Error! You must have at least one icon set enabled.", 'fl-builder' ) );
		        return;
			}
	        
			$filesystem    = FLBuilderUtils::get_filesystem();
			$enabled_icons = array();
			
			// Sanitize the enabled icons.
			if ( isset( $_POST['fl-enabled-icons'] ) && is_array( $_POST['fl-enabled-icons'] ) ) {
                $enabled_icons = array_map( 'sanitize_text_field', $_POST['fl-enabled-icons'] );
            }
	        
	        // Update the enabled sets.
	        self::update_enabled_icons( $enabled_icons );
            
	        // Delete a set? 
	        if ( ! empty( $_POST['fl-delete-icon-set'] ) ) {
		        
		        $sets  = FLBuilderIcons::get_sets();
		        $key   = sanitize_text_field( $_POST['fl-delete-icon-set'] );
		        $index = array_search( $key, $enabled_icons );
		        
		        if ( false !== $index ) {
			        unset( $enabled_icons[ $index ] );
			    }
			    if ( isset( $sets[ $key ] ) ) {
				    $filesystem->rmdir( $sets[ $key ]['path'], true );
				    FLBuilderIcons::remove_set( $key );
			    }
		    }
	        
            // Upload a new set?
            if ( ! empty( $_POST['fl-new-icon-set'] ) ) {

				$dir  		 = FLBuilderModel::get_cache_dir( 'icons' );
	        	$id   		 = (int) $_POST['fl-new-icon-set'];
	        	$path 		 = get_attached_file( $id );
	        	$new_path	 = $dir['path'] . 'icon-' . time() . '/';
	        	$unzipped 	 = unzip_file( $path, $new_path );
	        	
	        	// Unzip failed.
	        	if ( ! $unzipped ) {
		        	self::add_error( __( "Error! Could not unzip file.", 'fl-builder' ) );
		        	return;
	        	}
	        	
	        	// Move files if unzipped into a subfolder.
	        	$files = $filesystem->dirlist( $new_path );
	        	
	        	if ( 1 == count( $files ) ) {
					
					$values			= array_values( $files );
					$subfolder_info = array_shift( $values );
					$subfolder 		= $new_path . $subfolder_info['name'] . '/';
					
					if ( file_exists( $subfolder ) && is_dir( $subfolder ) ) {
						
			        	$files = $filesystem->dirlist( $subfolder );
			        	
			        	if ( $files ) {
				        	foreach ( $files as $file ) {
					        	$filesystem->move( $subfolder . $file['name'], $new_path . $file['name'] );
				        	}
			        	}
			        	
			        	$filesystem->rmdir( $subfolder );
					}
	        	}
	        	
	        	// Check for supported sets.
	        	$is_icomoon  = file_exists( $new_path . 'selection.json' );
	        	$is_fontello = file_exists( $new_path . 'config.json' );
	        	
	        	// Show an error if we don't have a supported icon set.
	        	if ( ! $is_icomoon && ! $is_fontello ) {
		        	$filesystem->rmdir( $new_path, true );
		        	self::add_error( __( "Error! Please upload an icon set from either Icomoon or Fontello.", 'fl-builder' ) );
		        	return;
	        	}
	        	
	        	// Enable the new set. 
	        	if ( is_array( $enabled_icons ) ) {
		        	$key = FLBuilderIcons::get_key_from_path( $new_path );
		        	$enabled_icons[] = $key;
	        	}
	        }
	        
	        // Update the enabled sets again in case they have changed.
	        self::update_enabled_icons( $enabled_icons );
        }
    }
	 
	/**
     * @method update_enabled_icons
     * @private
     */	 
	static private function update_enabled_icons( $enabled_icons = array() )
	{
		if ( is_network_admin() ) {
	        update_site_option( '_fl_builder_enabled_icons', $enabled_icons );
	        update_option( '_fl_builder_enabled_icons', $enabled_icons );
	    }
	    else if ( self::multisite_support() && ! isset( $_POST['fl-override-ms'] ) ) {
            delete_option( '_fl_builder_enabled_icons' );
        }
        else {
            update_option( '_fl_builder_enabled_icons', $enabled_icons );
        }
	}
	 
	/**
     * @method save_editing_capability
     * @private
     */	 
	static private function save_editing_capability()
	{
        if ( isset( $_POST['fl-editing-nonce'] ) && wp_verify_nonce( $_POST['fl-editing-nonce'], 'editing' ) ) {
	        
	        $capability = sanitize_text_field( $_POST['fl-editing-capability'] );
            
            if ( is_network_admin() ) {
	            update_site_option( '_fl_builder_editing_capability', $capability );
            }
            else if ( self::multisite_support() && ! isset( $_POST['fl-override-ms'] ) ) {
                delete_option( '_fl_builder_editing_capability' );
            }
            else {
                update_option( '_fl_builder_editing_capability', $capability );
            }
        }
    }
	 
	/**
     * @method save_branding
     * @private
     */	 
	static private function save_branding()
	{
        if ( isset( $_POST['fl-branding-nonce'] ) && wp_verify_nonce( $_POST['fl-branding-nonce'], 'branding' ) ) {
            
            $branding       = wp_kses_post( $_POST['fl-branding'] );
            $branding_icon  = sanitize_text_field( $_POST['fl-branding-icon'] );
            
            if ( is_network_admin() ) {
				update_site_option( '_fl_builder_branding', $branding );
				update_site_option( '_fl_builder_branding_icon', $branding_icon );
            }
            else {
				update_option( '_fl_builder_branding', $branding );
				update_option( '_fl_builder_branding_icon', $branding_icon );
            }
        }
    }
	 
	/**
     * @method uninstall
     * @private
     */	 
	static private function uninstall()
	{
        if ( ! current_user_can( 'delete_plugins' ) ) {
            return;	
        }
        else if ( isset( $_POST['fl-uninstall'] ) && wp_verify_nonce( $_POST['fl-uninstall'], 'uninstall' ) ) {
            if ( is_multisite() && class_exists( 'FLBuilderMultisite' ) ) {
                FLBuilderMultisite::uninstall();
            }
            else {
                FLBuilderAdmin::uninstall();
            }
        }
    }
}