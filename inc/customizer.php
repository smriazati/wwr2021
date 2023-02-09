<?php
/**
 * wwr2021 Theme Customizer
 *
 * @package wwr2021
 */

/* Remove unneccesary sections from Customizer */


function wwr2021_cleanup_customizer( $wp_customize ) {

	//  $wp_customize->remove_section('title_tagline');
	 $wp_customize->remove_section('colors');
	 $wp_customize->remove_section('background_image');
	 $wp_customize->remove_section('header_image');
	 $wp_customize->remove_section('nav');
	 $wp_customize->remove_section('static_front_page');
   
}
add_action('customize_register','wwr2021_cleanup_customizer');


// CUSTOM FEATURES

class WWRFrontPage_Customizer {

	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}

	public function register_customize_sections( $wp_customize ) {
        $this->fp_featuredpgs( $wp_customize );
        $this->featuredshoplinks( $wp_customize );
        $this->fp_bio( $wp_customize );
        // $this->fp_shop( $wp_customize );
        // $this->fp_subscribe( $wp_customize );
    }
    
    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
		//return ( $input === "No" ) ? "No" : "Yes";
		return $input; // fix this later
    }
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
     
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }
  

	// FEATURED SHOP LINKS 
	private function featuredshoplinks( $wp_customize ) {
		
        $wp_customize->add_section('featuredshoplinks-section', array(
            'title' => 'Home Shop',
            'priority' => 4,
            'description' => __('Modify the shop links that appear on the bottom of the Shop page.', 'wwr2021'),
		));
			
		$wp_customize->add_setting('featuredshoplinks-headline', array(
			'default' => 'Home shop',
			'sanitize_callback' => array( $this, 'sanitize_custom_text' )
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp-subscribe-headline-control', array(
			'label' => 'Section Headline',
			'section' => 'featuredshoplinks-section',
			'settings' => 'featuredshoplinks-headline',
			'type' => 'text'
		)));

		$wp_customize->add_setting('featuredshoplinks-text', array(
			'default' => 'Home shop',
			'sanitize_callback' => array( $this, 'sanitize_custom_text' )
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp-subscribe-text-control', array(
			'label' => 'Section text',
			'section' => 'featuredshoplinks-section',
			'settings' => 'featuredshoplinks-text',
			'type' => 'text'
		)));

		$wp_customize->add_setting('featuredshoplinks_link', array(
			'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featuredshoplinks_link-control', array(
            'label' => 'Link to Shop',
			'section' => 'featuredshoplinks-section',
            'settings' => 'featuredshoplinks_link',
			'type' => 'text'
		)));


		$wp_customize->add_setting('ftshop-item-1-img', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'ftshop-item-1-img-control', array(
            'label' => 'Image 1',
			'section' => 'featuredshoplinks-section',
            'settings' => 'ftshop-item-1-img',
            'mime_type' => 'image',
        )));


        $wp_customize->add_setting('ftshop-item-1-link', array(
			'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ftshop-item-1-link-control', array(
            'label' => 'Product Link 1',
			'section' => 'featuredshoplinks-section',
            'settings' => 'ftshop-item-1-link',
			'type' => 'text'
		)));


		$wp_customize->add_setting('ftshop-item-2-img', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'ftshop-item-2-img-control', array(
            'label' => 'Image 2',
			'section' => 'featuredshoplinks-section',
            'settings' => 'ftshop-item-2-img',
            'mime_type' => 'image',
        )));

		$wp_customize->add_setting('ftshop-item-2-link', array(
			'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ftshop-item-2-link-control', array(
            'label' => 'Product Link 2',
			'section' => 'featuredshoplinks-section',
            'settings' => 'ftshop-item-2-link',
			'type' => 'text'
		)));


		$wp_customize->add_setting('ftshop-item-3-img', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'ftshop-item-3-img-control', array(
            'label' => 'Image 3',
			'section' => 'featuredshoplinks-section',
            'settings' => 'ftshop-item-3-img',
            'mime_type' => 'image',
        )));

		$wp_customize->add_setting('ftshop-item-3-link', array(
			'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ftshop-item-3-link-control', array(
            'label' => 'Product Link 3',
			'section' => 'featuredshoplinks-section',
            'settings' => 'ftshop-item-3-link',
			'type' => 'text'
		)));


		$wp_customize->add_setting('ftshop-item-4-img', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'ftshop-item-4-img-control', array(
            'label' => 'Image 4',
			'section' => 'featuredshoplinks-section',
            'settings' => 'ftshop-item-4-img',
            'mime_type' => 'image',
        )));

		$wp_customize->add_setting('ftshop-item-4-link', array(
			'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ftshop-item-4-link-control', array(
            'label' => 'Product Link 4',
			'section' => 'featuredshoplinks-section',
            'settings' => 'ftshop-item-4-link',
			'type' => 'text'
		)));


		$wp_customize->add_setting('ftshop-item-5-img', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'ftshop-item-5-img-control', array(
            'label' => 'Image 5',
			'section' => 'featuredshoplinks-section',
            'settings' => 'ftshop-item-5-img',
            'mime_type' => 'image',
        )));

		$wp_customize->add_setting('ftshop-item-5-link', array(
			'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ftshop-item-5-link-control', array(
            'label' => 'Product Link 5',
			'section' => 'featuredshoplinks-section',
            'settings' => 'ftshop-item-5-link',
			'type' => 'text'
		)));

	}



	
	/* Bio Section */
	private function fp_bio( $wp_customize ) {
		
        $wp_customize->add_section('fp-bio-section', array(
            'title' => 'Homepage Bio',
            'priority' => 2,
            'description' => __('Modify the bio info on the homepage.', 'wwr2021'),
		));
			

		// BIO TITLE
        $wp_customize->add_setting('fp-bio-title', array(
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp-bio-title-control', array(
            'label' => 'Bio headline',
            'section' => 'fp-bio-section',
            'settings' => 'fp-bio-title',
			'type' => 'text'
		)));

		// BIO PARAGRAPH
		$wp_customize->add_setting('fp-bio-copy', array(
			'default' => '',
			'sanitize_callback' => array( $this, 'sanitize_custom_text' )
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp-bio-copy-control', array(
			'label' => 'Bio paragraph',
			'section' => 'fp-bio-section',
			'settings' => 'fp-bio-copy',
			'type' => 'textarea'
		)));

		// BIO IMAGE

        $wp_customize->add_setting('fp-bio-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
    
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'fp-bio-image-control', array(
            'label' => 'Bio Image',
            'section' => 'fp-bio-section',
            'settings' => 'fp-bio-image',
            'mime_type' => 'image',
        )));

        // HIGHLIGHT LINK
		$wp_customize->add_setting('fp-bio-shop-link-text', array(
			'default' => '',
			'sanitize_callback' => array( $this, 'sanitize_custom_text' )
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp-bio-shop-link-text-control', array(
			'label' => 'Shop link text',
			'section' => 'fp-bio-section',
			'settings' => 'fp-bio-shop-link-text',
			'type' => 'textarea'
		)));

		        // HIGHLIGHT LINK URL
				$wp_customize->add_setting('fp-bio-shop-link-url', array(
					'default' => '',
					'sanitize_callback' => array( $this, 'sanitize_custom_url' )
				));
				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp-bio-shop-link-text-url-control', array(
					'label' => 'Shop link text url',
					'section' => 'fp-bio-section',
					'settings' => 'fp-bio-shop-link-url',
					'type' => 'textarea'
				)));
	}


	// featured pages from dropdown
	private function fp_featuredpgs( $wp_customize ) {
		
		$wp_customize->add_section( 'fp-featuredpgs' , array(
    		'title'      => __( 'Featured Pages Section', 'wwr2021' ),
			'priority'   => 2,
		) );

		for ( $count = 1; $count <= 3; $count++ ) {

			$wp_customize->add_setting( 'fp-featuredpg-' . $count, array(
				'default'           => '',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( 'sfp-featuredpg-ctrl-' . $count, array(
				'label'    => __( 'Select Page ' . $count, 'wwr2021' ),
				'section'  => 'fp-featuredpgs',
				'settings' => 'fp-featuredpg-' . $count,
				'type'     => 'dropdown-pages'
			) );


			$wp_customize->add_setting( 'fp-featuredpg-title-' . $count, array(
				'default' => '',
				'sanitize_callback' => array( $this, 'sanitize_custom_text' )
			));
			$wp_customize->add_control( 'fp-featuredpg-title-ctrl-' . $count, array(
				'label'    => __( 'Title text ' . $count, 'wwr2021' ),
				'section'  => 'fp-featuredpgs',
				'settings' => 'fp-featuredpg-title-' . $count,
				'type'     => 'text'
			) );


			$wp_customize->add_setting( 'fp-featuredpg-button-' . $count, array(
				'default' => '',
				'sanitize_callback' => array( $this, 'sanitize_custom_text' )
			));
			$wp_customize->add_control( 'fp-featuredpg-button-ctrl-' . $count, array(
				'label'    => __( 'Button text ' . $count, 'wwr2021' ),
				'section'  => 'fp-featuredpgs',
				'settings' => 'fp-featuredpg-button-' . $count,
				'type'     => 'text'
			) );
			
		}

	}
}