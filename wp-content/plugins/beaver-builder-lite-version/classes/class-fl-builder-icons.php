<?php

/**
 * Helper class for working with icons.
 *
 * @class FLBuilderIcons
 */

final class FLBuilderIcons {
    
    /**
     * @property $sets
     * @private
     */
    static private $sets = null;
    
    /**
     * @method get_sets
     */	
    static public function get_sets()
    {
	    // Return the sets if already registered.
        if ( self::$sets ) {
            return self::$sets;
        }
        
        // Check to see if we should pull sets from the main site.
        if ( is_multisite()) {
	        
	        $blog_id 		= defined( 'BLOG_ID_CURRENT_SITE' ) ? BLOG_ID_CURRENT_SITE : 1;
        	$enabled_icons  = get_option( '_fl_builder_enabled_icons' );
        	
			if ( empty( $enabled_icons ) ) {
				switch_to_blog( $blog_id );
			}
        }
        
        // Register the icon sets.
        self::register_custom_sets();
        self::register_core_sets();
        
        // Revert to the current site if we pulled from the main site.
        if ( is_multisite() && empty( $enabled_icons ) ) {
	        restore_current_blog();
        }
        
        // Return the sets.
        return self::$sets;
    }
    
    /**
     * @method get_sets
     */	
    static public function get_sets_for_current_site()
    {
	    if ( ! is_multisite() ) {
		    return self::get_sets();
	    }
	    
	    // Store the original sets.
	    $original_sets = self::$sets;
        
        // Register the icon sets.
        self::register_custom_sets();
        self::register_core_sets();
        
        // Get the new sets.
        $sets = self::$sets;
        
        // Revert to the original sets.
        self::$sets = $original_sets;
        
        // Return the sets.
        return $sets;
    }
    
    /**
     * @method remove_set
     */	
    static public function remove_set( $key )
    {
	    if ( self::$sets && isset( self::$sets[ $key ] ) ) {
		    unset( self::$sets[ $key ] );
	    }
    }
    
    /**
     * @method get_key_from_path
     */	
    static public function get_key_from_path( $path )
    {
	    $sets = self::get_sets();
	    
	    foreach ( $sets as $key => $set ) {
		    if ( $path == $set['path'] ) {
			    return $key;
		    }
	    }
    }

    /**
     * @method register_core_sets
     * @private
     */	
    static private function register_core_sets()
    {
	    $enabled_icons = FLBuilderModel::get_enabled_icons();
	    $core_sets = array(
		    'font-awesome' => array(
			    'name'   => 'Font Awesome',
	            'prefix' => 'fa'
		    ),
		    'foundation-icons' => array(
			    'name'   => 'Foundation Icons',
	            'prefix' => ''
		    ),
		    'dashicons' => array(
			    'name'   => 'WordPress Dashicons',
	            'prefix' => 'dashicons dashicons-before'
		    )
	    );
	    
	    // Add the core sets. 
	    foreach ( $core_sets as $set_key => $set_data ) {
		    if ( is_admin() || in_array( $set_key, $enabled_icons ) ) {
			    self::$sets[ $set_key ] = array(
		            'name'   => $set_data['name'],
		            'prefix' => $set_data['prefix'],
		            'type'	 => 'core'
		        );
		    }
	    }
        
        // Loop through core sets and add icons.
        foreach ( self::$sets as $set_key => $set_data ) {
	        if ( 'core' == $set_data['type'] ) {
            	$icons = json_decode( file_get_contents( FL_BUILDER_DIR . 'json/' . $set_key . '.json' ) );
				self::$sets[ $set_key ]['icons'] = $icons;
			}
        }
	}

    /**
     * @method register_custom_sets
     * @private
     */	
    static private function register_custom_sets()
    {
        // Get uploaded sets.
        $enabled_icons = FLBuilderModel::get_enabled_icons();
        $upload_info   = FLBuilderModel::get_cache_dir( 'icons' );
        $folders       = glob( $upload_info['path'] . '*' );
        
        // Make sure we have an array.
        if( ! is_array( $folders ) ) {
	        return;
        }
        
        // Loop through uploaded sets.
        foreach ( $folders as $folder ) {
	        
	        $folder = trailingslashit( $folder );
	        
	        // This is an Icomoon font.
	        if ( file_exists( $folder . 'selection.json' ) ) {
		        
		        $data = json_decode( file_get_contents( $folder . 'selection.json' ) );
		        $key  = basename( $folder );
		        $url  = str_ireplace( $upload_info['path'], $upload_info['url'], $folder );
		        
		        if ( isset( $data->icons ) ) {
			        
			        if ( is_admin() || in_array( $key, $enabled_icons ) ) {
				        
				        self::$sets[ $key ] = array(
					        'name'   	 => $data->metadata->name,
							'prefix' 	 => '',
							'type'	 	 => 'icomoon',
							'path'	 	 => $folder,
							'url'    	 => $url,
							'stylesheet' => $url . 'style.css',
							'icons'	 	 => array()
				        );
				        
				    	foreach ( $data->icons as $icon ) {
					    	
					    	$prefs   = $data->preferences->fontPref;
					    	$postfix = isset( $prefs->postfix ) ? $prefs->postfix : '';
					    	
					    	if ( isset( $prefs->selector ) && 'class' == $prefs->selector ) {
						    	$selector = trim( str_replace( '.', ' ', $prefs->classSelector ) ) . ' ';
					    	}
					    	else {
						    	$selector = '';
					    	}
					    	
					    	self::$sets[ $key ]['icons'][] = $selector . $prefs->prefix . $icon->properties->name . $postfix;
				    	}
				    }
		        }		        
	        }
	        // This is a Fontello font.
	        else if ( file_exists( $folder . 'config.json' ) ) {
		        
		        $data  = json_decode( file_get_contents( $folder . 'config.json' ) );
		        $key   = basename( $folder );
		        $name  = empty( $data->name ) ? 'Fontello' : $data->name;
		        $url   = str_ireplace( $upload_info['path'], $upload_info['url'], $folder );
		        $style = empty( $data->name ) ? 'fontello' : $data->name;
		        
		        // Append the date to the name?
		        if ( empty( $data->name ) ) {
			        $time 			= str_replace( 'icon-', '', $key );
			        $date_format 	= get_option( 'date_format' );
			        $time_format 	= get_option( 'time_format' );
			        $date 			= date( $date_format . ' ' . $time_format );
			        $name  		   .= ' (' . $date . ')';
		        }
		        
		        if ( isset( $data->glyphs ) ) {
			        
			        if ( is_admin() || in_array( $key, $enabled_icons ) ) {
			        
				        self::$sets[ $key ] = array(
					        'name'   	 => $name,
							'prefix' 	 => '',
							'type'	 	 => 'fontello',
							'path'	 	 => $folder,
							'url'     	 => $url,
							'stylesheet' => $url . 'css/' . $style . '.css',
							'icons'	 	 => array()
				        );
				        
				    	foreach ( $data->glyphs as $icon ) {
					    	if ( $data->css_use_suffix ) {
						    	self::$sets[ $key ]['icons'][] = $icon->css . $data->css_prefix_text;
					    	}
					    	else {
						    	self::$sets[ $key ]['icons'][] = $data->css_prefix_text . $icon->css;
					    	}
				    	}
				    }
		        }
		    }
        }
	}

    /**
     * @method enqueue_all_custom_icons_styles
     */	
    static public function enqueue_all_custom_icons_styles()
    {
	    $sets = self::get_sets();
	    
	    foreach ( $sets as $key => $data ) {
		    
		    // Don't enqueue core icons.
		    if ( 'core' == $data['type'] ) {
			    continue;
		    }
		    
		    // Enqueue the custom icon styles.
		    self::enqueue_custom_styles_by_key( $key );
	    }
    }

    /**
     * @method enqueue_styles_for_module
     */	
    static public function enqueue_styles_for_module( $module )
    {
        $fields = FLBuilderModel::get_settings_form_fields( $module->form );
        
        foreach ( $fields as $name => $field ) {
            if ( isset( $field['multiple'] ) && true === $field['multiple'] ) {
                $form = FLBuilderModel::$settings_forms[ $field['form'] ];
                self::enqueue_styles_for_module_multiple( $module, $form['tabs'], $name );
            }
            else if ( $field['type'] == 'icon' && isset( $module->settings->$name ) ) {
                self::enqueue_styles_for_icon( $module->settings->$name );
            }
        }
    }

    /**
     * @method enqueue_styles_for_module_multiple
     * @private
     */	
    static private function enqueue_styles_for_module_multiple( $module, $form, $setting )
    {
        $fields = FLBuilderModel::get_settings_form_fields( $form );
        
        foreach ( $fields as $name => $field ) {
            if ( $field['type'] == 'icon' ) {
                foreach ( $module->settings->$setting as $key => $val ) {
                    if ( isset( $val->$name ) ) {
                        self::enqueue_styles_for_icon( $val->$name );
                    }
                }
            }
        }
    }

    /**
     * @method enqueue_styles_for_icon
     * @private
     */	
    static private function enqueue_styles_for_icon( $icon )
    {
	    // Is this a core icon? 
        if ( stristr( $icon, 'fa-' ) ) {
            wp_enqueue_style( 'font-awesome' );
        }
        else if ( stristr( $icon, 'fi-' ) ) {
            wp_enqueue_style( 'foundation-icons' );
        }
        else if ( stristr( $icon, 'dashicon' ) ) {
            wp_enqueue_style( 'dashicons' );
        }
        // It must be a custom icon.
        else {
	        
	        $sets = self::get_sets();
	        
	        foreach ( $sets as $key => $data ) {
		        if ( in_array( $icon, $data['icons'] ) ) {
			        self::enqueue_custom_styles_by_key( $key );
		        }
	        }
        }
    }

    /**
     * @method enqueue_custom_styles_by_key
     * @private
     */	
    static private function enqueue_custom_styles_by_key( $key )
    {
	    $sets = self::get_sets();
	    
	    if ( isset( $sets[ $key ] ) ) {
		    
		    $set = $sets[ $key ];
		    
		    if ( 'icomoon' == $set['type'] ) {
			    wp_enqueue_style( $key, $set['stylesheet'], array(), FL_BUILDER_VERSION );
		    }
		    if ( 'fontello' == $set['type'] ) {
			    wp_enqueue_style( $key, $set['stylesheet'], array(), FL_BUILDER_VERSION );
		    }
	    }
    }
}