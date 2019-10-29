<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "d_portfolio";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => 'AIzaSyA4INBK32LL6nZfqaQV6FeHA7LNEXZSF2I',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );



    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
       
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. ' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. ' );

     Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    

     // -> START Basic Fields

     Redux::setsection($opt_name, array(
         'title'        => 'Header & Footer Related',
         'id'           => 'header_footer',
         'desc'         => 'Header and Footer Section related Settings here',
         'icon'         => 'el el-bullhorn',
         'fields'       => array(
                        array(
                            'id'        => 'copy_right_text',
                            'type'      => 'text',
                            'title'     => 'CopyRight Text',
                            'msg'       => 'Please write your copyright text here',
                            'default'   => 'All Rights Reserved. &copy; Syed Mashiur Rahman 2019',
                        ),
                        array(
                            'id'        => 'social_links',
                            'type'      => 'multi_text',
                            'title'     => "Social Media URLs :",
                            'desc'      => "Add all of your Social Media URLs here, icon will be added automatically",
                            'add_text'  => 'Add another URL',
                        ),
         )
     )

     );

     Redux::setsection($opt_name, array(
        'title'     => 'Home Page Related',
        'id'        => 'home_page_related',
        'desc'      => 'Organize Home page Stuff from here',
        'icon'      => 'el el-home',
        'fields'    => array(
            array(
                    'id'      => 'home_page_layout',
                    'type'    => 'sorter',
                    'title'   => 'Homepage Content Manager',
                    'desc'    => 'Organize which content you wish to appear on your homepage',
                    'placebo' => ' ',
                    'options' => array(
                        'enabled'  => array(                            
                            'slider'     => 'Slider',
                            'highlights' => 'Highlights',
                            'staticpage' => 'Static Page',
                            'services'   => 'Services'
                        ),
                        'disabled' => array(
                            'review'   => 'Reviews'
                        )
                    ),
                ),
            

        )
     ));

       Redux::setsection($opt_name, array(
        'title'     => 'Slider Setup',
        'id'        => 'slider_setup',
        'desc'      => 'Organize Slider Content here',
        'icon'      => 'el el-camera',
        'subsection' => true,
        'fields'    => array(
            array(
                    'id'          => 'hero_slides',
                    'type'        => 'slides',
                    'title'       => 'Slides Options',
                    'subtitle'    => 'Unlimited slides with drag and drop sortings.',
                    'desc'        => 'This field will store all slides values into a multidimensional array to use into a foreach loop.',
                    'placeholder' => array(
                        'image'         => 'Upload Slider Image',
                        'thumb'         => 'Upload Slider Image',
                        'title'           => 'Slider title',
                        'description'     => 'Description Here',
                        'url'             => 'Target URL',
                    ),
                ),

        )));
           Redux::setsection($opt_name, array(
        'title'     => 'Hero Typed Setup',
        'id'        => 'typed_setup',
        'desc'      => 'Setup Typed effect text here',
        'icon'      => 'el el-font',
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'typed-title',
                'type'      => 'text',
                'title'     => "Tyepd section Title",
            ),
            array(
                    'id'       => 'typed-image',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => 'Hero (typed) Section Image',
                    
                ),
            array(
                        'id'        => 'typed_txt',
                        'type'      => 'multi_text',
                        'title'     => "Typed Messages :",
                        'desc'      => "Add sentences to show up on typed area, one by one",
                        'add_text'  => 'Add another Sentence',
                    ),
            array(
                'id'               => 'typed_editor',
                'type'             => 'textarea',
                'title'            => 'Typed Messages',
                ),
           

        )));

         Redux::setsection($opt_name, array(
        'title'     => 'Portfolio Setup',
        'id'        => 'portfoilo_setup',
        'desc'      => 'Setup portfolio Section here',
        'icon'      => 'el el-compass',
        'subsection' => true,
        'fields'    => array(

            array(
                'id'        => 'portfoilo-title',
                'type'      => 'text',
                'title'     => "Portfolio Section Title",
            ),
            array(
                'id'        => 'portfoilo-details',
                'type'      => 'text',
                'title'     => "Portfolio Section Details",
            ),           

        )));
         
           Redux::setsection($opt_name, array(
        'title'     => 'About Section Setup',
        'id'        => 'about_setup',
        'desc'      => 'Setup About Section here',
        'icon'      => 'el el-question',
        'subsection' => true,
        'fields'    => array(
            
            array(
                    'id'       => 'about-image',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => 'About Section Image',
                    
                ),
            array(
                'id'        => 'about-title',
                'type'      => 'text',
                'title'     => "About section Title",
            ),
            array(
                'id'               => 'about-details',
                'type'             => 'textarea',
                'title'            => 'About section Details', 
                ),                 
            array(
                'id'        => 'about-cta',
                'type'      => 'text',
                'title'     => "CTA button TEXT",
            ),
            array(
                'id'        => 'about-cta-url',
                'type'      => 'text',
                'title'     => "CTA button Target URL",
                'validate'  => 'url'
            ),

        )));
         
          Redux::setsection($opt_name, array(
        'title'     => 'Services Setup',
        'id'        => 'services_setup',
        'desc'      => 'Setup Services Section here',
        'icon'      => 'el el-bulb',
        'subsection' => true,
        'fields'    => array(
            array(
                'id'        => 'service-heading',
                'type'      => 'text',
                'title'     => "Services Heading",
                'default'   => 'What I Do?'
            ),
            
            array(
                'id'        => 'service-title-1',
                'type'      => 'text',
                'title'     => "Service Title 1",
            ),
            array(
                'id'        => 'service-desc-1',
                'type'      => 'text',
                'title'     => "Service Description 1",
            ),
            array(
                'id'        => 'service-icon-1',
                'type'      => 'text',
                'title'     => "Service Icon 1",
                'desc'  => 'Add font awesome class name of the icon you wish to show. like: "fa-paint-brush"',
            ),
            array(
                'id'        => 'service-title-2',
                'type'      => 'text',
                'title'     => "Service Title 2",
            ),
            array(
                'id'        => 'service-desc-2',
                'type'      => 'text',
                'title'     => "Service Description 2",
            ),
            array(
                'id'        => 'service-icon-2',
                'type'      => 'text',
                'title'     => "Service Icon 2",
                'desc'  => 'Add font awesome class name of the icon you wish to show. like: "fa-paint-brush"',
            ),
            array(
                'id'        => 'service-title-3',
                'type'      => 'text',
                'title'     => "Service Title 3",
            ),
            array(
                'id'        => 'service-desc-3',
                'type'      => 'text',
                'title'     => "Service Description 3",
            ),
            array(
                'id'        => 'service-icon-3',
                'type'      => 'text',
                'title'     => "Service Icon 3",
                'desc'  => 'Add font awesome class name of the icon you wish to show. like: "fa-paint-brush"',
            ),
            array(
                'id'        => 'service-title-4',
                'type'      => 'text',
                'title'     => "Service Title 4",
            ),
            array(
                'id'        => 'service-desc-4',
                'type'      => 'text',
                'title'     => "Service Description 4",
            ),
            array(
                'id'        => 'service-icon-4',
                'type'      => 'text',
                'title'     => "Service Icon 4",
                'desc'  => 'Add font awesome class name of the icon you wish to show. like: "fa-paint-brush"',
            ),
            array(
                'id'        => 'service-title-5',
                'type'      => 'text',
                'title'     => "Service Title 5",
            ),
            array(
                'id'        => 'service-desc-5',
                'type'      => 'text',
                'title'     => "Service Description 5",
            ),
            array(
                'id'        => 'service-icon-5',
                'type'      => 'text',
                'title'     => "Service Icon 5",
                'desc'  => 'Add font awesome class name of the icon you wish to show. like: "fa-paint-brush"',
            ),
            array(
                'id'        => 'service-title-6',
                'type'      => 'text',
                'title'     => "Service Title 6",
            ),
            array(
                'id'        => 'service-desc-6',
                'type'      => 'text',
                'title'     => "Service Description 6",
            ),
            array(
                'id'        => 'service-icon-6',
                'type'      => 'text',
                'title'     => "Service Icon 6",
                'desc'  => 'Add font awesome class name of the icon you wish to show. like: "fa-paint-brush"',
            ),

        )));

        Redux::setsection($opt_name, array(
        'title'     => 'Contact Setup',
        'id'        => 'contact_setup',
        'desc'      => 'Organize Contact Sectoin here',
        'icon'      => 'el el-address-book',
        'subsection' => true,
        'fields'    => array(
            
            array(
                'id'        => 'contact-title',
                'type'      => 'text',
                'title'     => "Contact section Title",
            ),
            array(
                'id'        => 'contact-address',
                'type'      => 'text',
                'title'     => "Contact Address",
            ),
            array(
                'id'        => 'contact-phone',
                'type'      => 'text',
                'title'     => "Contact Phone Number",
            ),
            array(
                'id'        => 'contact-email',
                'type'      => 'text',
                'title'     => "Email Address",
            ),
            array(
                'id'        => 'map-short-code',
                'type'      => 'text',
                'title'     => "Map's Shortcode",
                'default'   => '[simpleMapNoApi]'
            ),
            array(
                'id'        => 'contact-form-short-code',
                'type'      => 'text',
                'title'     => "Contact form's shortcode",
            ),

        )));

   

    Redux::setsection($opt_name, array(
        'title'     => 'Text Related',
        'id'        => 'common',
        'desc'      => 'Popular Fields first !', 
        'icon'      => 'el el-home',
        'fields'    =>  array(
            array(
                'id'        => 'email_id',
                'type'      => 'text',
                'title'     => "Email Address",
                'desc'      => "Enter your valid email here",
                'subtitle'  => "Subheading to show",
                'validate'  => "email",
                'msg'       => "please enter a valid email address",
                'default'   => 'test@test.com',
                'hint'      => array(
                    'content'   => "The email address you enter will show up in redux test page"
                    )
            ),
            array(
                'id'        => 'typography',
                'type'      => 'typography',
                'title'     => "Typography :",
                'google'    => true,
                'font_backup'  => true,
                'output'      => array('h2.typography'),
                'default'     => array(
                                    'color'       => '#333', 
                                    'font-style'  => '700', 
                                    'font-family' => 'Abel', 
                                    'google'      => true,
                                    'font-size'   => '33px', 
                                    'line-height' => '15px'
                                ),
            ),
            array(
                'id'        => 'textarea',
                'type'      => 'textarea',
                'title'     => "About :",
                'desc'      => "Enter text to show up in pages",
                'default'   => 'In hac habitasse platea dictumst.',
            ),
            array(
                'id'        => 'date',
                'type'      => 'date',
                'title'     => "Select a Date :",
                'placeholder' => 'Click to enter a date',
            ),
            array(
                'id'        => 'multi_text',
                'type'      => 'multi_text',
                'title'     => "Favorite Movies :",
                'desc'      => "Add all of your favorite movies here",
            ),
            array(
                'id'        => 'spinner',
                'type'      => 'spinner',
                'title'     => "Number Value :",
                'default'  => '40',
                'min'      => '20',
                'step'     => '20',
                'max'      => '100',
            ),
            
            array(
                'id' => 'slider',
                'type' => 'slider',
                'title' => 'Slider Example 2 with Steps (5)', 
                "default" => 50,
                "min" => 0,
                "step" => 5,
                "max" => 100,
                'display_value' => 'text'
            ),
            array(
                'id'               => 'editor',
                'type'             => 'editor',
                'title'            => 'Editor Text',             
                'default'          => 'The Editor field offers WYSIWYG editing capability, using the same editing interface as WordPress itself..',
                'args'   => array(
                            'teeny'            => true,
                            'textarea_rows'    => 10
                        )
                ),
            
            array(
                'id'        => 'section2',
                'type' => 'section',
                'title' => ' ',
                'indent' => true 
            ),
            
        )
    ));


    Redux::setsection($opt_name, array(
        'title'     => 'Various Selector',
        'id'        => 'selector',
        'desc'      => 'Various Selector Fields!', 
        'icon'      => 'el el-time-alt',
        'fields'    =>  array(
                            array(
                                'id'       => 'switch',
                                'type'     => 'switch', 
                                'title'    => 'Show Sidebar',
                                'subtitle' => 'Default: No sidebar',
                                'default'  => false,
                            ),
                            array(
                                'id'      => 'sorter',
                                'type'    => 'sorter',
                                'title'   => 'Homepage Layout Manager',
                                'desc'    => 'Organize how you want the layout to appear on the homepage',
                                'placebo' => ' ',
                                'options' => array(
                                    'enabled'  => array(
                                        'highlights' => 'Highlights',
                                        'slider'     => 'Slider',
                                        'staticpage' => 'Static Page',
                                        'services'   => 'Services'
                                    ),
                                    'disabled' => array(
                                        'review'   => 'Reviews'
                                    )
                                ),
                            ),
                            array(
                                'id'       => 'chck-sortable',
                                'type'     => 'sortable',
                                'title'    => 'Sortable Checkbox Option',
                                'subtitle' => 'Define and reorder these however you want.',
                                'mode'     => 'checkbox',
                                'options'  => array(
                                    '1'     => 'Item 1',
                                    '2'     => 'Item 2',
                                    '3'     => 'Item 3',
                                ),
                                // For checkbox mode
                                'default' => array(
                                    '1' => false,
                                    '2' => true,
                                    '3' => false
                                ),
                            ),
                            array(
                                'id'       => 'text-sortable',
                                'type'     => 'sortable',
                                'title'    => 'Sortable Text Option',
                                'subtitle' => 'Define and reorder these however you want.',
                                'mode'     => 'text',
                                'options' => array(
                                    '1' => 'Item number one',
                                    '2' => 'Number two here',
                                    '3' => 'Three strikes, yer out!',
                                ),
                                'default' => array(
                                    '1' => 'Item number one',
                                    '2' => 'Number two here',
                                    '3' => 'Three strikes, yer out!',
                                ),
                            ),
                            array(
                                'id'       => 'select',
                                'type'     => 'select',
                                'title'    =>'Select Option',    
                                // Must provide key => value pairs for select options
                                'options'  => array(
                                    '1' => 'Opt 1',
                                    '2' => 'Opt 2',
                                    '3' => 'Opt 3'
                                ),
                                'default'  => '2',
                            ),
                            array(
                                'id'       => 'select2',
                                'type'     => 'select',
                                'title'    =>'Select Option', 
                                'multi'     => true,   
                                // Must provide key => value pairs for select options
                                'options'  => array(
                                    '1' => 'Opt 1',
                                    '2' => 'Opt 2',
                                    '3' => 'Opt 3'
                                ),
                                'default'  => '2',
                            ),
                            array(
                                'id'       => 'select3',
                                'type'     => 'select',
                                'title'    =>'Select Option', 
                                'multi'     => true,   
                                'data'      => 'pages'
                            ),
                            array(
                                'id'       => 'radio',
                                'type'     => 'radio',
                                'title'    => 'Radio Option',
                                'options'  => array(
                                    '1' => 'Opt 1', 
                                    '2' => 'Opt 2', 
                                    '3' => 'Opt 3'
                                ),
                                'default' => '3'
                            ),
                            array(
                                'id'       => 'checkbox',
                                'type'     => 'checkbox',
                                'title'    => 'Single Checkbox Option', 
                                'default'  => '1'// 1 = on | 0 = off
                            ),
                            array(
                                'id'       => 'opt_multi_checkbox',
                                'type'     => 'checkbox',
                                'title'    => 'Multi Checkbox Option', 
                                'options'  => array(
                                    '1' => 'Opt 1',
                                    '2' => 'Opt 2',
                                    '3' => 'Opt 3'
                                ),
                                'default' => array(
                                    '1' => '1', 
                                    '2' => '0', 
                                    '3' => '0'
                                )
                                ),
                            array(
                                'id'       => 'button-set-single',
                                'type'     => 'button_set',
                                'title'    => 'Button Set, Single',
                                
                                'options' => array(
                                    '1' => 'Opt 1', 
                                    '2' => 'Opt 2', 
                                    '3' => 'Opt 3'
                                ), 
                                'default' => '2'
                            ),
                            array(
                                'id'       => 'button-set-mul',
                                'type'     => 'button_set',
                                'title'    => 'Button Set, multiple',
                                'multi'     => true,
                                
                                'options' => array(
                                    '1' => 'Opt 1', 
                                    '2' => 'Opt 2', 
                                    '3' => 'Opt 3'
                                ), 
                                'default' => array('2', '3')
                            )

        )
    ));

    Redux::setsection($opt_name, array(
        'title'     => 'Site Structure',
        'id'        => 'structure',
        'desc'      => 'Structure Related Fields!', 
        'icon'      => 'el el-wrench',
        'fields'    =>  array(                            
                            array(
                                'id'       => 'dimensions2',
                                'type'     => 'dimensions',
                                'output'   => array('h2.dimensions'),
                                'units'    => array('em','px','%'),
                                'title'    =>'Dimensions Width/Height',  
                                'default'  => array(
                                    'width'   => '200', 
                                    'height'  => '100',
                                    'unit'    => 'px'
                                ),
                            ),
                            array( 
                                'id'       => 'opt-select-image',
                                'type'     => 'select_image',
                                'title'    => 'Select Image',
                                
                                'options'  => Array(
                                    Array (
                                        'alt'  => 'Image Name 1',
                                        'img'  => get_template_directory_uri().'/redux/ReduxCore/assets/img/1col.png'
                                    ),
                                    Array (
                                        'alt'  => 'Image Name 2',
                                        'img'  => get_template_directory_uri().'/redux/ReduxCore/assets/img/2cl.png'
                                    )
                                ),
                                'default'  => get_template_directory_uri().'/redux/ReduxCore/assets/img/1col.png'
                            ),

                            array(
                                'id'       => 'layout',
                                'type'     => 'image_select',
                                'title'    => 'Site Layout', 
                                
                                'options'  => array(
                                    '1'      => array(
                                        'alt'   => '1 Column', 
                                        'img'   => get_template_directory_uri().'/redux/ReduxCore/assets/img/1col.png'
                                    ),
                                    '2'      => array(
                                        'alt'   => '2 Column Left', 
                                        'img'   => get_template_directory_uri().'/redux/ReduxCore/assets/img/2cl.png'
                                    ),
                                    '3'      => array(
                                        'alt'   => '2 Column Right', 
                                        'img'  => get_template_directory_uri().'/redux/ReduxCore/assets/img/2cr.png'
                                    ),
                                    '4'      => array(
                                        'alt'   => '3 Column Middle', 
                                        'img'   => get_template_directory_uri().'/redux/ReduxCore/assets/img/3cm.png'
                                    ),
                                    '5'      => array(
                                        'alt'   => '3 Column Left', 
                                        'img'   => get_template_directory_uri().'/redux/ReduxCore/assets/img/3cl.png'
                                    ),
                                    '6'      => array(
                                        'alt'  => '3 Column Right', 
                                        'img'  => get_template_directory_uri().'/redux/ReduxCore/assets/img/3cr.png'
                                    )
                                ),
                                'default' => '2'
                            ),

                            array(
                                'id'             => 'spacing',
                                'type'           => 'spacing',
                                'output'         => array('h2.spacing'),
                                'mode'           => 'margin',
                                'units'          => array('em', 'px'),
                                'units_extended' => 'false',
                                'title'          =>'Margin Option',
                                'subtitle'       => 'Allow your users to choose the spacing or margin they want.',                                 
                                'default'            => array(
                                    'margin-top'     => '1px', 
                                    'margin-right'   => '2px', 
                                    'margin-bottom'  => '3px', 
                                    'margin-left'    => '4px',
                                    'units'          => 'px', 


                            )),
                            
                            array(
                                'id'          => 'slides',
                                'type'        => 'slides',
                                'title'       => 'Slides Options',
                                'subtitle'    => 'Unlimited slides with drag and drop sortings.',
                                'desc'        => 'This field will store all slides values into a multidimensional array to use into a foreach loop.',
                                'placeholder' => array(
                                    'title'           => 'This is a title',
                                    'description'     => 'Description Here',
                                    'url'             => 'Give us a link!',
                                ),
                            ),
                            

                            

                    )
    ));

    Redux::setsection($opt_name, array(
        'title'     => 'Color Related',
        'id'        => 'color',
        'desc'      => 'Color Related Fields!', 
        'icon'      => 'el  el-brush',
        'fields'    =>  array(
            array(
                'id'        => 'color',
                'type'      => 'color',
                'title'     => "Text Color",
                'desc'      => "Chose Color",
                'output'    => array('h2.color'),
                'default'   =>'#dd3333'
            ),
            array(
                'id'        => 'background',
                'type'      => 'background',
                'title'     => "Background Color / Image",
                'desc'      => "Chose Background",
                'output'    => array('h2.background'),
                'default'   => array(
                    'background-color' => '#fff'
                    )
            ),
            array(
                'id'        => 'color_gradient',
                'type'      => 'color_gradient',
                'title'     => "Gradient Background",
                'desc'      => "Chose Background Color",
                'default'  => array(
                                    'from' => '#1e73be',
                                    'to'   => '#00897e', 
                                ),
            ),
            array(
                'id'        => 'color_rgba',
                'type'      => 'color_rgba',
                'title'     => "RGBA Background",
                'desc'      => "Chose Background Color",
                'clickout_fires_change' => true,
                'default'  => array(
                                    'color' => '#1e73be',
                                    'alpha'   => '.5', 
                                ),
            ),
            array(
                'id'        => 'link_color',
                'type'      => 'link_color',
                'title'     => "Link Color",
                'output'    => array('a.link_color'),
                'default'  => array(
                                    'regular'  => '#1e73be', // blue
                                    'hover'    => '#dd3333', // red
                                    'active'   => '#8224e3',  // purple
                                    'visited'  => '#8224e3',  // purple
                                ),
            ),
            array( 
                'id'       => 'border',
                'type'     => 'border',
                'title'    => 'Border Option',
                'output'   => array('h2.border'),
                'default'  => array(
                                    'border-color'  => '#dd3333', 
                                    'border-style'  => 'solid', 
                                    'border-top'    => '3px', 
                                    'border-right'  => '3px', 
                                    'border-bottom' => '3px', 
                                    'border-left'   => '3px'
                                )
            ) ,
            array(
                'id'        => 'palette',
                'type'      => 'palette',
                'title'     => "Color Selector",
                'desc'      => "Choose Color",
                'default'  => 'red',
                'palettes' => array(
                                'red'  => array(
                                    '#ef9a9a',
                                    '#f44336',
                                    '#ff1744',
                                ),
                                'pink' => array(
                                    '#fce4ec',
                                    '#f06292',
                                    '#e91e63',
                                    '#ad1457',
                                    '#f50057',
                                ),
                                'cyan' => array(
                                    '#000000',
                                    '#80deea',
                                    '#26c6da',
                                    '#0097a7',
                                    '#00e5ff',
                                ),
                            )                
            ),

        ) 

    ));



Redux::setsection($opt_name, array(
                                'title'     => 'Media',
                                'id'        => 'media',
                                'desc'      => 'Media Related', 
                                'icon'      => 'el  el-film',
                                'fields'    =>  array(
                                                    array(
                                                        'id'       => 'media',
                                                        'type'     => 'media', 
                                                        'url'      => true,
                                                        'title'    => 'Media w/ URL',
                                                        
                                                    ),
                                                    
                                                    array(
                                                        'id'   =>'divider_1',
                                                        'type' => 'divide'
                                                    ),
                                                    array(
                                                        'id'       => 'gallery',
                                                        'type'     => 'gallery',
                                                        'title'    => 'Add/Edit Gallery',
                                                        
                                                    ),


                                )
                            
));

Redux::setsection($opt_name, array(
                                'title'     => 'Code',
                                'id'        => 'code',
                                'desc'      => 'Code Input / Others', 
                                'icon'      => 'el  el-barcode',
                                'fields'    =>  array(
                                    array( 
                                        'id'       => 'raw',
                                        'type'     => 'raw',
                                        'title'    => 'Raw output',
                                        'content'  => file_get_contents(get_template_directory_uri() . '/raw.html')
                                    ),
                                    array(
                                        'id' => 'section',
                                        'type' => 'section',
                                        'title' => ' ',
                                        'indent' => true 
                                        //Adds section break where used
                                    ),
                                    array( 
                                        'id'       => 'ace_editor',
                                        'type'     => 'ace_editor',
                                        'title'    => 'Custom JavaScript',
                                        // 'mode'      => 'css html javascript  json less markdown mysql php plain_text sass scss text xml',
                                        'theme'     => 'chrome'
                                    ),
                                    array(
                                        'id'          => 'password',
                                        'type'        => 'password',
                                        'username'    => true,
                                        'title'       => 'New Account',
                                        'placeholder' => array(
                                            'username'   => 'Enter your Username',
                                            'password'   => 'Enter your Password'
                                        )
                                    ),
                                    array(
                                        'id'    => 'opt-info-success',
                                        'type'  => 'info',
                                        'style' => 'success',
                                        'icon'  => 'el el-info-circle',
                                        'title' => 'This is a title.',
                                        'desc'  => 'This is an info field with the <strong>success</strong> style applied and an icon.', 
                                    ),
                                )

));









    /*
     * <--- END SECTIONS
     */
