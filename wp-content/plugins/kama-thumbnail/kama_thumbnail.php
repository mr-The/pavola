<?php

/**
 * Plugin Name: Kama Thumbnail
 *
 * Description: Creates post thumbnails on fly & cache the result. Which image take to create thumb the plugin find from: WP post thumbnail / first img in post content / first post attachment img. To creat thumb for any img in content add class "mini" to img & resize img in visual editor. In theme/plugin code use next functions: <code>kama_thumb_a_img("w=200 &h=100")</code>, <code>kama_thumb_img("w=200 &h=100")</code>, <code>kama_thumb_src("w=200 &h=100")</code>..
 *
 * Text Domain: kama-thumbnail
 * Domain Path: languages
 *
 * Author: Kama
 * Plugin URI: http://wp-kama.ru/?p=142
 *
 * Version: 2.8.5
 * PHP 5.3+
 */


define( 'KT_PATH', dirname(__FILE__) .'/' );
define( 'KT_URL', plugins_url('', __FILE__) .'/' );


require KT_PATH .'class.Kama_Thumbnail.php';
require KT_PATH .'class.Kama_Make_Thumb.php';


register_activation_hook( __FILE__, array('Kama_Thumbnail', 'activation') );
register_uninstall_hook(  __FILE__, array('Kama_Thumbnail', 'uninstall') );


add_action( 'plugins_loaded', 'kama_thumbnail_init' );
function kama_thumbnail_init(){
	if( ! defined('DOING_AJAX') )
		load_plugin_textdomain( 'kama-thumbnail', false, basename(KT_PATH) .'/languages' );

	// plugin init
	new Kama_Thumbnail();

	// удалить по истечении вермени
	if( time() < 1531433731 /* 2019-01-08 */ ) seo_redirect_for_new_logic();
}



// SEO redirect for new logic
// redirect from old URLs before 2.7.7 version - for SEO
function seo_redirect_for_new_logic(){
	$requri = $_SERVER['REQUEST_URI'];

	// не картинка
	if( ! preg_match('~\.(jpg|jpeg|png|gif)$~', $requri ) )
		return;

	$opts = Kama_Thumbnail::$opt;

	// не старая ссылка на картинку плагина
	if( 0 !== strpos( $requri, wp_make_link_relative($opts->cache_folder_url) ) || 'thumb' !== basename(dirname($requri)) )
		return;

	// найдем новую ссылку
	$req_fname = basename($requri);
	$name_hash = preg_replace( '~[_.].+$~', '', $req_fname );
	$subdir    = substr( $name_hash, -2 );

	// пробуем найти картинку по новому пути
	$files = glob( "$opts->cache_folder/$subdir/*$req_fname" );
	if( ! $files )
		return;

	$new_url = dirname($requri) . "/$subdir/" . basename( reset($files) );

	// redirect
	wp_redirect( $new_url, 301 );
	exit;

}




