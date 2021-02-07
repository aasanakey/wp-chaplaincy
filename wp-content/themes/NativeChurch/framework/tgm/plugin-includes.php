<?php
require_once NATIVECHURCH_INC_PATH . '/tgm/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'nativechurch_register_required_plugins');

function nativechurch_register_required_plugins()
{
	$plugins_path = get_template_directory() . '/framework/tgm/plugins/';
	$plugins = array(
		array(
			'name'        		=> esc_html__('A Core Plugin', 'framework'),
			'slug'         		=> 'nativechurch-core',
			'source'       		=> get_template_directory_uri() . '/framework/tgm/plugins/nativechurch-core.zip',
			'required'       	=> false,
			'version'     		=> '1.7',
			'force_activation'	=> false,
			'force_deactivation' => false,
			'external_url'      => '',
			'type'				=> 'Required',
			'image_src'			=> get_template_directory_uri() . '/framework/tgm/images/plugin-screen-core.png',
		),
		array(
			'name'               => esc_html__('Revolution Slider', 'framework'),
			'slug'               => 'revslider',
			'source'             => $plugins_path . 'revslider.zip',
			'required'           => true,
			'version' 			 => '6.3.2',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'image_src'	=> get_template_directory_uri() . '/framework/tgm/images/plugin-revslider.png',
		),
		array(
			'name'               => esc_html__('Payment imithemes', 'framework'),
			'slug'               => 'Payment-Imithemes',
			'source'             => $plugins_path . 'Payment-Imithemes.zip',
			'required'           => false,
			'version'            => '1.6.2',
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => '',
			'image_src'	=> get_template_directory_uri() . '/framework/tgm/images/plugin-imithemes.png',
		),
		array(
			'name'               => esc_html__('iPray', 'framework'),
			'slug'               => 'ipray',
			'source'             => $plugins_path . 'ipray.zip',
			'version' 			 => '1.8',
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false,
			'image_src'	=> get_template_directory_uri() . '/framework/tgm/images/plugin-ipray.png',
		),
		array(
			'name'               => esc_html__('Breadcrumb NavXT', 'framework'),
			'slug'               => 'breadcrumb-navxt',
			'required' 	         => false,
			'image_src'	         => get_template_directory_uri() . '/framework/tgm/images/plugin-navxt.png',
		),
		array(
			'name'               => esc_html__('Pojo Sidebars', 'framework'),
			'slug'               => 'pojo-sidebars',
			'required' 	         => false,
			'type'               => 'Required',
			'image_src'	         => get_template_directory_uri() . '/framework/tgm/images/plugin-pojo.png',
		),
		array(
			'name'               => esc_html__('Loco Translate', 'framework'),
			'slug'               => 'loco-translate',
			'required' 	         => false,
			'image_src'	         => get_template_directory_uri() . '/framework/tgm/images/plugin-loco.png',
		),
		array(
			'name'               => esc_html__('WooCommerce', 'framework'),
			'slug'               => 'woocommerce',
			'required' 	         => false,
			'image_src'	         => get_template_directory_uri() . '/framework/tgm/images/plugin-woo.png',
		),
		array(
			'name'               => esc_html__('Contact Form 7', 'framework'),
			'slug'               => 'contact-form-7',
			'required' 	         => false,
			'image_src'	         => get_template_directory_uri() . '/framework/tgm/images/plugin-cf7.png',
		),
		array(
			'name'               => esc_html__('Give - WordPress Donation Plugin', 'framework'),
			'slug'               => 'give',
			'required'           => false,
			'image_src'	         => get_template_directory_uri() . '/framework/tgm/images/plugin-give.png',
		),
		array(
			'name'               => esc_html__('Page Builder by SiteOrigin', 'framework'),
			'slug'               => 'siteorigin-panels',
			'required'           => true,
			'image_src'	         => get_template_directory_uri() . '/framework/tgm/images/plugin-siteorigin.png',
		),
		array(
			'name'               => esc_html__('SiteOrigin Widgets Bundle', 'framework'),
			'slug'               => 'so-widgets-bundle',
			'required'           => true,
			'image_src'	         => get_template_directory_uri() . '/framework/tgm/images/plugin-widgetbundle.png',
		),
		array(
			'name'               => esc_html__('Black Studio TinyMCE Widget', 'framework'),
			'slug'               => 'black-studio-tinymce-widget',
			'required'           => true,
			'image_src'	         => get_template_directory_uri() . '/framework/tgm/images/plugin-blackstudio.png',
		),
		array(
			'name'               => esc_html__('Regenerate Thumbnails', 'framework'),
			'slug'               => 'regenerate-thumbnails',
			'required'           => false,
			'image_src'	         => get_template_directory_uri() . '/framework/tgm/images/plugin-regen.png',
		),
		array(
			'name'               => esc_html__('Best Contact Forms', 'framework'),
			'slug'               => 'wpforms-lite',
			'required'           => false,
			'image_src'          => get_template_directory_uri() . '/framework/tgm/images/plugin-wpforms.png',
		),

	);

	$config = array(
		'id'			=> 'tgmpa',
		'default_path'	=> '',
		'menu'			=> 'tgmpa-install-plugins',
		'parent_slug'	=> 'themes.php',
		'capability'	=> 'edit_theme_options',
		'has_notices'	=> false,
		'dismissable'	=> true,
		'dismiss_msg'	=> '',
		'is_automatic'	=> true,
		'message'		=> '',
	);

	tgmpa($plugins, $config);
}
if (function_exists('vc_set_as_theme')) vc_set_as_theme($disable_updater = true);
