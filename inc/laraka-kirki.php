<?php

new \Kirki\Panel(
	'laraka_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Laraka Options', 'laraka' ),
	]
);

/**
 * Header info
 */

function laraka_header_info(){
	new \Kirki\Section(
		'laraka_header_info',
		[
			'title'       => esc_html__( 'Header', 'laraka' ),
			'description' => esc_html__( 'Here is header information', 'laraka' ),
			'panel'       => 'laraka_options',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'laraka_logo_url',
			'label'       => esc_html__( 'Logo', 'laraka' ),
			'section'     => 'laraka_header_info',
			'default'     => get_template_directory_uri(  ) . '/assets/img/logo.png',
		]
	);
}

laraka_header_info();

/**
 * Footer info
 */


function laraka_footer_info(){
	new \Kirki\Section(
		'laraka_footer_info',
		[
			'title'       => esc_html__( 'Footer', 'laraka' ),
			'description' => esc_html__( 'Here is footer information', 'laraka' ),
			'panel'       => 'laraka_options',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Editor(
		[
			'settings'    => 'laraka_editor_setting',
			'label'       => esc_html__( 'Footer Copyright', 'laraka' ),
			'section'     => 'laraka_footer_info',
			'default'     => '© Copyright Moderna All Rights Reserved Designed by <a href="#">Laraka Theme</a>',
		]
	);

}

laraka_footer_info();

/**
 * Social info
 */


 function laraka_social_info(){
	new \Kirki\Section(
		'laraka_social_info',
		[
			'title'       => esc_html__( 'Social Info', 'laraka' ),
			'description' => esc_html__( 'Here is social information', 'laraka' ),
			'panel'       => 'laraka_options',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Text(
        [
            'settings' => 'laraka_facebook',
            'label'    => esc_html__( 'Facebook URL', 'laraka' ),
            'section'  => 'laraka_social_info',
            'default'  => esc_html__( '#', 'laraka' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'laraka_twitter',
            'label'    => esc_html__( 'Twitter URL', 'laraka' ),
            'section'  => 'laraka_social_info',
            'default'  => esc_html__( '#', 'laraka' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'laraka_youtube',
            'label'    => esc_html__( 'Youtube URL', 'laraka' ),
            'section'  => 'laraka_social_info',
            'default'  => esc_html__( '#', 'laraka' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'laraka_linkedin',
            'label'    => esc_html__( 'Linkedin URL', 'laraka' ),
            'section'  => 'laraka_social_info',
            'default'  => esc_html__( '#', 'laraka' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'laraka_instagram',
            'label'    => esc_html__( 'Instagram URL', 'laraka' ),
            'section'  => 'laraka_social_info',
            'default'  => esc_html__( '#', 'laraka' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'laraka_flickr',
            'label'    => esc_html__( 'Flickr URL', 'laraka' ),
            'section'  => 'laraka_social_info',
            'default'  => esc_html__( '#', 'laraka' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'laraka_vimeo',
            'label'    => esc_html__( 'Vimeo URL', 'laraka' ),
            'section'  => 'laraka_social_info',
            'default'  => esc_html__( '#', 'laraka' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'laraka_behance',
            'label'    => esc_html__( 'Behance URL', 'laraka' ),
            'section'  => 'laraka_social_info',
            'default'  => esc_html__( '#', 'laraka' ),
            'priority' => 10,
        ]
    );

	

}

laraka_social_info();




