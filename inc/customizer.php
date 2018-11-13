<?php
/**
 * Cmuter Theme Customizer
 *
 * @package Cmuter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

require get_template_directory() . '/inc/o2/controls/icon-picker/icon-picker-control.php';

function cmuter_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )		->transport	= 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )	->transport	= 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'cmuter_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'cmuter_customize_partial_blogdescription',
		) );
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// SETTINGS PANEL
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	// Cmuter Settings Panel
	$wp_customize->add_panel( 'cmuter_theme_settings_panel', array(
	    'priority' => 10,
	    'title' => __( 'Cmuter Theme Settings', 'cmuter' ),
	    'description' => __( 'Change and adjust Cmuter Theme Settings.', 'cmuter' ),
	) );
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// SECTON 1 - Homepage
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	$wp_customize->add_section( 'cmuter_section_1', array(
		'title' => __( 'Section 1 - Home', '_s' ),
		'priority' => 30,
		'description' => __( 'Here you can change settings for how the theme will display', 'cmuter' ),
		'panel'			=> 'cmuter_theme_settings_panel',
	) );
	
	// Homepage - Background Image
	$wp_customize->add_setting( 'cmuter_homepage_background_image', array( 'default' => '' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cmuter_homepage_background_image', array(
		'label'      => __( 'Upload a Background Image', 'cmuter' ),
		'section'    => 'cmuter_section_1',
		'settings'   => 'cmuter_homepage_background_image'
	) ) );
	
	// Homepage - Background Video
	$wp_customize->add_setting( 'cmuter_homepage_background_video', array( 'default' => '' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cmuter_homepage_background_video', array(
		'label'      => __( 'Upload a Background Video', 'cmuter' ),
		'section'    => 'cmuter_section_1',
		'settings'   => 'cmuter_homepage_background_video'
	) ) );
	
	// Homepage - Text
	$wp_customize->add_setting( 'cmuter_homepage_text', array(
		'default' => 'World Class Solutions for Premier Corporations',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_homepage_text', array(
		'type' => 'text',
		'section' => 'cmuter_section_1', // Add a default or your own section
		'label' => __( 'Homepage Text' ),
		'description' => __( 'Add text to display on the Homepage.' ),
	) );
	
	// Homepage - Button Text
	$wp_customize->add_setting( 'cmuter_homepage_button_text', array(
		'default' => 'Play Video',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_homepage_button_text', array(
		'type' => 'text',
		'section' => 'cmuter_section_1', // Add a default or your own section
		'label' => __( 'Homepage Button Text' ),
		'description' => __( 'Change the Homepage Button Text.' ),
	) );
	
	// Homepage - Button URL
	$wp_customize->add_setting( 'cmuter_homepage_button_url', array(
		'sanitize_callback' => 'themeslug_sanitize_url',
	) );
	$wp_customize->add_control( 'cmuter_homepage_button_url', array(
		'type' => 'url',
		'section' => 'cmuter_section_1', // Add a default or your own section
		'label' => __( 'Homepage Button URL' ),
		'description' => __( 'Change the Homepage Button URL.' ),
		'input_attrs' => array(
			'placeholder' => __( 'http://www.google.com' ),
		),
	) );
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Section 2 - Tabs
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	$wp_customize->add_section( 'cmuter_section_2', array(
		'title' => __( 'Section 2 - Tabs', '_s' ),
		'priority' => 30,
		'description' => __( 'Here you can change settings for how the theme will display', 'cmuter' ),
		'panel'			=> 'cmuter_theme_settings_panel',
	) );
	
	// Tab 1 - Title
	$wp_customize->add_setting( 'cmuter_first_tab_title', array(
		'default' => 'Your Challenges',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_first_tab_title', array(
		'type' => 'text',
		'section' => 'cmuter_section_2', // Add a default or your own section
		'label' => __( 'First Tab Title' ),
		'description' => __( 'Add text to display as the first tab title.' ),
	) );
	
	// Tab 2 - Title
	$wp_customize->add_setting( 'cmuter_second_tab_title', array(
		'default' => 'Our Solutions',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_second_tab_title', array(
		'type' => 'text',
		'section' => 'cmuter_section_2', // Add a default or your own section
		'label' => __( 'Second Tab Title' ),
		'description' => __( 'Add text to display as the second tab title.' ),
	) );
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Section 3 - Cards
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	$wp_customize->add_section( 'cmuter_section_3', array(
		'title' => __( 'Section 3 - Cards', '_s' ),
		'priority' => 30,
		'description' => __( 'Here you can change settings for how the theme will display', 'cmuter' ),
		'panel'			=> 'cmuter_theme_settings_panel',
	) );
	
	// Cards Section - Background Image
	$wp_customize->add_setting( 'cmuter_cards_background_image', array( 'default' => '' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cmuter_cards_background_image', array(
		'label'      => __( 'Upload a Background Image', 'cmuter' ),
		'section'    => 'cmuter_section_3',
		'settings'   => 'cmuter_cards_background_image'
	) ) );
	
	// Cards Section - Header
	$wp_customize->add_setting( 'cmuter_cards_section_header', array(
		'default' => 'Cmuter Benefits',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_cards_section_header', array(
		'type' => 'text',
		'section' => 'cmuter_section_3', // Add a default or your own section
		'label' => __( 'Section 3 Header' ),
		'description' => __( 'Add text to display as the Section 3 header.' ),
	) );
	
	// Card 1 - Icon
	$wp_customize->add_setting( 'cmuter_card_1_icon', array(
	    'default' => 'fa-bar-chart'
	));
	
	$wp_customize->add_control(new O2_Customizer_Icon_Picker_Control( $wp_customize, 'cmuter_card_1_icon', array(
	    'label' => __('Card 1 Icon', 'cmuter'),
	    'description' => __('Choose an icon', 'cmuter'),
	    'iconset' => 'fa',
	    'section' => 'cmuter_section_3',
	    'settings' => 'cmuter_card_1_icon'
	)));
	
	// Card 1 - Header
	$wp_customize->add_setting( 'cmuter_card_1_header', array(
		'default' => 'Assess',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_card_1_header', array(
		'type' => 'text',
		'section' => 'cmuter_section_3', // Add a default or your own section
		'label' => __( 'Card 1 Header' ),
		'description' => __( 'Add text to display as the Card 1 Header.' ),
	) );
	
	// Card 1 - Content
	$wp_customize->add_setting( 'cmuter_card_1_content', array(
		'default' => 'Your current transportation program.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_card_1_content', array(
		'type' => 'text',
		'section' => 'cmuter_section_3', // Add a default or your own section
		'label' => __( 'Card 1 Content' ),
		'description' => __( 'Add text to display as the Card 1 Content.' ),
	) );
	
	// Card 1 - Link URL
	$wp_customize->add_setting( 'cmuter_card_1_link', array(
		'sanitize_callback' => 'themeslug_sanitize_url',
	) );
	$wp_customize->add_control( 'cmuter_card_1_link', array(
		'type' => 'url',
		'section' => 'cmuter_section_3', // Add a default or your own section
		'label' => __( 'Card 1 Link URL' ),
		'description' => __( 'Change the Card 1 Link URL.' ),
		'input_attrs' => array(
			'placeholder' => __( 'http://www.google.com' ),
		),
	) );
	
	// Card 2 - Icon
	$wp_customize->add_setting( 'cmuter_card_2_icon', array(
	    'default' => 'fa-wrench'
	));
	
	$wp_customize->add_control(new O2_Customizer_Icon_Picker_Control( $wp_customize, 'cmuter_card_2_icon', array(
	    'label' => __('Card 2 Icon', 'cmuter'),
	    'description' => __('Choose an icon', 'cmuter'),
	    'iconset' => 'fa',
	    'section' => 'cmuter_section_3',
	    'settings' => 'cmuter_card_2_icon'
	)));
	
	// Card 2 - Header
	$wp_customize->add_setting( 'cmuter_card_2_header', array(
		'default' => 'Configure',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_card_2_header', array(
		'type' => 'text',
		'section' => 'cmuter_section_3', // Add a default or your own section
		'label' => __( 'Card 2 Header' ),
		'description' => __( 'Add text to display as the Card 2 Header.' ),
	) );
	
	// Card 2 - Content
	$wp_customize->add_setting( 'cmuter_card_2_content', array(
		'default' => 'A solution that is ideal for your employees.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_card_2_content', array(
		'type' => 'text',
		'section' => 'cmuter_section_3', // Add a default or your own section
		'label' => __( 'Card 2 Content' ),
		'description' => __( 'Add text to display as the Card 2 Content.' ),
	) );
	
	// Card 2 - Link URL
	$wp_customize->add_setting( 'cmuter_card_2_link', array(
		'sanitize_callback' => 'themeslug_sanitize_url',
	) );
	$wp_customize->add_control( 'cmuter_card_2_link', array(
		'type' => 'url',
		'section' => 'cmuter_section_3', // Add a default or your own section
		'label' => __( 'Card 2 Link URL' ),
		'description' => __( 'Change the Card 2 Link URL.' ),
		'input_attrs' => array(
			'placeholder' => __( 'http://www.google.com' ),
		),
	) );
	
	// Card 3 - Icon
	$wp_customize->add_setting( 'cmuter_card_3_icon', array(
	    'default' => 'fa-car'
	));
	
	$wp_customize->add_control(new O2_Customizer_Icon_Picker_Control( $wp_customize, 'cmuter_card_3_icon', array(
	    'label' => __('Card 3 Icon', 'cmuter'),
	    'description' => __('Choose an icon', 'cmuter'),
	    'iconset' => 'fa',
	    'section' => 'cmuter_section_3',
	    'settings' => 'cmuter_card_3_icon'
	)));
	
	// Card 3 - Header
	$wp_customize->add_setting( 'cmuter_card_3_header', array(
		'default' => 'Evolve',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_card_3_header', array(
		'type' => 'text',
		'section' => 'cmuter_section_3', // Add a default or your own section
		'label' => __( 'Card 3 Header' ),
		'description' => __( 'Add text to display as the Card 3 Header.' ),
	) );
	
	// Card 3 - Content
	$wp_customize->add_setting( 'cmuter_card_3_content', array(
		'default' => 'The culture of the commute at your organization.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_card_3_content', array(
		'type' => 'text',
		'section' => 'cmuter_section_3', // Add a default or your own section
		'label' => __( 'Card 3 Content' ),
		'description' => __( 'Add text to display as the Card 3 Content.' ),
	) );
	
	// Card 3 - Link URL
	$wp_customize->add_setting( 'cmuter_card_3_link', array(
		'sanitize_callback' => 'themeslug_sanitize_url',
	) );
	$wp_customize->add_control( 'cmuter_card_3_link', array(
		'type' => 'url',
		'section' => 'cmuter_section_3', // Add a default or your own section
		'label' => __( 'Card 3 Link URL' ),
		'description' => __( 'Change the Card 3 Link URL.' ),
		'input_attrs' => array(
			'placeholder' => __( 'http://www.google.com' ),
		),
	) );
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// SECTION 4 - TESTIMONIALS
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	$wp_customize->add_section( 'cmuter_section_4', array(
		'title' => __( 'Section 4 - Testimonial', '_s' ),
		'priority' => 30,
		'description' => __( 'Here you can change settings for how the theme will display', 'cmuter' ),
		'panel'			=> 'cmuter_theme_settings_panel',
	) );
	
	// Section 4 Header
	$wp_customize->add_setting( 'cmuter_section_4_header', array(
		'default' => 'Proven Results',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_section_4_header', array(
		'type' => 'text',
		'section' => 'cmuter_section_4', // Add a default or your own section
		'label' => __( 'Section 4 Header' ),
		'description' => __( 'Add text to display as the Section 4 Header.' ),
	) );
	
	// Client Name
	$wp_customize->add_setting( 'cmuter_section_4_client_name', array(
		'default' => 'Delta Dental of Washington',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_section_4_client_name', array(
		'type' => 'text',
		'section' => 'cmuter_section_4', // Add a default or your own section
		'label' => __( 'Client Name' ),
		'description' => __( 'Add text to display as the Client Name.' ),
	) );
	
	// Client Info
	$wp_customize->add_setting( 'cmuter_section_4_client_info', array(
		'default' => 'Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_section_4_client_info', array(
		'type' => 'textarea',
		'section' => 'cmuter_section_4', // Add a default or your own section
		'label' => __( 'Client Info' ),
		'description' => __( 'Add text to display as the Client Info.' ),
	) );
	
	// Client Logo
	$wp_customize->add_setting( 'cmuter_section_4_client_logo', array( 'default' => '' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cmuter_section_4_client_logo', array(
		'label'      => __( 'Upload a Client Logo', 'cmuter' ),
		'section'    => 'cmuter_section_4',
		'settings'   => 'cmuter_section_4_client_logo'
	) ) );
	
	// Headshot
	$wp_customize->add_setting( 'cmuter_section_4_headshot', array( 'default' => '' ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cmuter_section_4_headshot', array(
		'label'      => __( 'Upload a Headshot', 'cmuter' ),
		'section'    => 'cmuter_section_4',
		'settings'   => 'cmuter_section_4_headshot'
	) ) );
	
	// Button Text
	$wp_customize->add_setting( 'cmuter_section_4_quote', array(
		'default' => 'Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_section_4_quote', array(
		'type' => 'textarea',
		'section' => 'cmuter_section_4', // Add a default or your own section
		'label' => __( 'Quote' ),
		'description' => __( 'Add text to display as the Quote.' ),
	) );
	
	// Button Text
	$wp_customize->add_setting( 'cmuter_section_4_quotee', array(
		'default' => 'Becky Masters - Director, Compensation, Benefits and HR Technology',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_section_4_quotee', array(
		'type' => 'text',
		'section' => 'cmuter_section_4', // Add a default or your own section
		'label' => __( 'Quotee' ),
		'description' => __( 'Add text to display as the Quotee.' ),
	) );
	
	// Button Text
	$wp_customize->add_setting( 'cmuter_section_4_button_text', array(
		'default' => 'Read More',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_section_4_button_text', array(
		'type' => 'text',
		'section' => 'cmuter_section_4', // Add a default or your own section
		'label' => __( 'Button Text' ),
		'description' => __( 'Add text to display as the Button Text.' ),
	) );
	
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// SECTION 5 - CONTACT
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	$wp_customize->add_section( 'cmuter_section_5', array(
		'title' => __( 'Section 5 - Contact', '_s' ),
		'priority' => 30,
		'description' => __( 'Here you can change settings for how the theme will display', 'cmuter' ),
		'panel'			=> 'cmuter_theme_settings_panel',
	) );
	
	// Contact Text
	$wp_customize->add_setting( 'cmuter_section_5_contact_text', array(
		'default' => 'I want Cmuter to contact me',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cmuter_section_5_contact_text', array(
		'type' => 'text',
		'section' => 'cmuter_section_5', // Add a default or your own section
		'label' => __( 'Contact Text' ),
		'description' => __( 'Add text to display as the Contact Text.' ),
	) );
	
}
add_action( 'customize_register', 'cmuter_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cmuter_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cmuter_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cmuter_customize_preview_js() {
	wp_enqueue_script( 'cmuter-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'cmuter_customize_preview_js' );

function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
}
add_action( 'customize_register', 'mytheme_customize_register' );


/**
 * Add CSS.
 */
function cmuter_customizer_css() { ?>
	<style type="text/css">
	</style>
<?php }
add_action( 'wp_head', 'cmuter_customizer_css');