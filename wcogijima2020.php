<?php
/**
 * Plugin name: wcogijima2020
 * Plugin URI: https://github.com/WordCampOgijia/wcogijima2020
 * Description: WordCamp Ogijima 2020 ローカル開発用のプラグインです。
 * Version: 1.0.0
 * Author: WordCamp Ogijima 2020 team
 * Author URI: https://github.com/WordCampOgijia
 * Created: July 27, 2020
 * License: GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

define( 'WCO_STYLES_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

add_action( 'wp_enqueue_scripts', 'wco_enqueue_style_script' );
function wco_enqueue_style_script() {
	wp_enqueue_style(
		'wco_style',
		WCO_STYLES_PATH . '/src/css/style.css',
		[ 'twentytwenty-style' ],
		filemtime( WCO_STYLES_PATH . '/src/css/style.css' )
	);
}
