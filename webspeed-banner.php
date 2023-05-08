<?php
/*
Plugin Name: Webspeed Banner
Version: 1.0
Plugin URI: https://www.web.dk
Description: Banner med fade funktion
Author: Morten Andersen
Text Domain: webspeeed-banner-domain
Author URI: https://www.web.dk
 */

if (class_exists('ACF')) {

	require_once 'files/posttype.php';
	require_once 'files/acf.php';
	require_once 'files/banner-loop.php';
	require_once 'files/banner-function.php';

}