<?php

/**
 * @copyright   Copyright (c), Léandro Tijink
 * @license     MIT
 */

const COOKIE_DOMAIN = 'localhost';

define("BASE_PATH", dirname(__FILE__));

// -----------------

if (file_exists('vendor/autoload.php')) {
	include_once 'vendor/autoload.php';
}

// -----------------

if (file_exists('vendor/rovota/framework/src/bootloader.php')) {
	require_once 'vendor/rovota/framework/src/bootloader.php';
} else {
	http_response_code(503);
	exit;
}