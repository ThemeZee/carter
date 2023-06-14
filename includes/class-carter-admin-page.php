<?php
/**
 * Carter Admin Page
 *
 * @package Carter
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Admin Page class
 */
class Carter_Admin_Page {

	/**
	 * Setup the Carter Admin Page class
	 *
	 * @return void
	 */
	public static function setup() {

		// Add settings page.
		add_action( 'admin_menu', array( __CLASS__, 'add_settings_page' ), 9 );

		// Register settings.
		add_action( 'admin_init', array( __CLASS__, 'register_settings' ), 9 );

		// Add Admin notices.
		add_action( 'admin_notices', array( __CLASS__, 'admin_notices' ) );
	}

	/**
	 * Add Settings Page to Admin menu
	 */
	public static function add_settings_page() {
		add_theme_page(
			esc_html__( 'Theme Setup', 'carter' ),
			esc_html__( 'Theme Setup', 'carter' ),
			'manage_options',
			'carter-theme',
			array( __CLASS__, 'render_settings_page' )
		);
	}

	/**
	 * Display settings page
	 */
	public static function render_settings_page() {
		ob_start();
		?>

		<div class="wrap">

			<h1><?php esc_html_e( 'Carter', 'carter' ); ?> <?php echo esc_html( wp_get_theme()->get( 'Version' ) ); ?></h1>

			<form method="post" action="options.php">
				<?php
					do_settings_sections( 'carter_theme_settings' );
					settings_fields( 'carter_theme_settings' );
					submit_button();
				?>
			</form>

		</div>

		<?php
		echo wp_kses(
			ob_get_clean(),
			array(
				'div'   => array(
					'class' => array(),
				),
				'h1'    => array(),
				'h2'    => array(),
				'br'    => array(),
				'p'     => array(),
				'table' => array(
					'class' => array(),
					'role'  => array(),
				),
				'tbody' => array(),
				'tr'    => array(),
				'th'    => array(
					'scope' => array(),
				),
				'td'    => array(),
				'form'  => array(
					'method' => array(),
					'action' => array(),
				),
				'input' => array(
					'class'   => array(),
					'type'    => array(),
					'name'    => array(),
					'id'      => array(),
					'value'   => array(),
					'checked' => array(),
				),
				'label' => array(
					'for' => array(),
				),
			)
		);
	}

	/**
	 * Register all settings sections and fields
	 */
	public static function register_settings() {

		// Make sure that options exist in database.
		if ( false === get_option( 'carter_theme_settings' ) ) {
			add_option( 'carter_theme_settings' );
		}

		// Add Demo Section.
		add_settings_section(
			'carter_demo_section',
			esc_html__( 'Demo Content', 'carter' ),
			array( __CLASS__, 'demo_section_intro' ),
			'carter_theme_settings'
		);

		// Creates our settings in the options table.
		register_setting(
			'carter_theme_settings',
			'carter_theme_settings',
			array( __CLASS__, 'sanitize_settings' )
		);
	}

	/**
	 * Demo Section Intro
	 */
	public static function demo_section_intro() {
		esc_html_e( 'Import the demo content into your website to get started quickly.', 'carter' );
	}

	/**
	 * Sanitize the Plugin Settings
	 *
	 * @param array $input User Input.
	 * @return array
	 */
	public static function sanitize_settings( $input = array() ) {
		$saved = get_option( 'carter_theme_settings', array() );
		if ( ! is_array( $saved ) ) {
			$saved = array();
		}

		$input = $input ? $input : array();

		// Loop through each setting being saved and pass it through a sanitization filter.
		foreach ( $input as $key => $value ) :
			if ( is_array( $value ) ) :
				foreach ( $value as $checkbox => $bool ) :
					$input[ $key ][ $checkbox ] = ! empty( $bool );
				endforeach;
			else :
				$input[ $key ] = sanitize_text_field( $value );
			endif;
		endforeach;

		return array_merge( $saved, $input );
	}

	/**
	 * Show success and error notices when saving settings.
	 */
	public static function admin_notices() {
		settings_errors( 'carter_theme_settings_notices' );
	}
}

// Run Class.
Carter_Admin_Page::setup();
