<?php /** @noinspection SpellCheckingInspection */

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

return [

	'about' => [
		'name' => 'Example Project',
		'description' => 'This is an example project built using Rovota Framework and Rovota Embla.',
		'keywords' => ['Example','Project'],

		'author' => 'Unknown',
		'generator' => 'Rovota Framework',
	],

	'seo' => [
		'analytics_token' => null,
	],

	// -----------------

	'security' => [
		'password' => [
			'hash_cost' => 12,
			'min_length' => 10,
			'max_length' => 200,
		],

		'csrf' => [
			'cookie_name' => 'csrf_token',
		],

		'plain_text_cookies' => ['session'],

		'auth' => [
			'cookie_name' => 'account',
			'duration' => 7, // days
			'allow_sign_in' => true,
			'allow_sign_up' => true,
		],
	],

	// -----------------

	'appearance' => [
		'theme' => 'automatic',
		'accent' => 'azure',
	],

	// -----------------

	'enable_generator_branding' => false,

];