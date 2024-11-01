<?php /** @noinspection SpellCheckingInspection */

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

return [

	'headers' => [
		'X-Frame-Options' => 'SAMEORIGIN',
		'X-Content-Type-Options' => 'nosniff',
		'Referrer-Policy' => 'same-origin',
		'Cross-Origin-Opener-Policy' => 'same-origin',
		'Cross-Origin-Resource-Policy' => 'cross-origin',
//		'Cross-Origin-Embedder-Policy' => 'require-corp',
		'Strict-Transport-Security' => 'max-age=63072000; includeSubDomains; preload',
//		'Content-Security-Policy' => "default-src https://*.rovota.com https://rovota.com; style-src https://*.rovota.com https://rovota.com; script-src https://*.rovota.com https://rovota.com; media-src https://*.rovota.com; form-action https://*.rovota.com https://rovota.com 'self'; frame-ancestors 'self'",
		'Permissions-Policy' => 'geolocation=(), microphone=(), camera=(), usb=()',
//		'Access-Control-Allow-Origin' => 'https://rovota.com',
		'Vary' => 'Origin, User-Agent',
	],

];