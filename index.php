<?php // ob_start('ob_gzhandler'); //bila diperlukan, minify output html
require_once('detectmobile.php'); //ini class untuk membedakan user agent 
$url = $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; // url halaman
$url = str_replace('/', '-', $urlnya); //permalink 
if (is_mobile()) {
        $fileTemp ='mobile/'. $url.'.html'; // ambil file cache mobile
} else {
        $fileTemp = 'desktop/'. $url.'.html'; // ambil file cache desktop
}
if (file_exists($fileTemp)) { //cek jika file masih ada dan belum expired
    $isihalaman = file_get_contents($fileTemp);
    echo $isihalaman;
    // ob_end_flush(); 
} else { // disini letak magic nya. Tidak load WP ketika ada file cache html statis
        /**
         * Front to the WordPress application. This file doesn't do anything, but loads
         * wp-blog-header.php which does and tells WordPress to load the theme.
         *
         * @package WordPress
         */

        /**
         * Tells WordPress to load the WordPress theme and output it.
         *
         * @var bool
         */
        define('WP_USE_THEMES', true);

        /** Loads the WordPress Environment and Template   */
        require( dirname( __FILE__ ) . '/wp-blog-header.php' );
}
