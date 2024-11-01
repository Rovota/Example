<?php /** @noinspection SpellCheckingInspection */

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

return [

	'default' => 'session',

	// -----------------

	'stores' => [

		'session' => [
			'driver' => 'session',
			'label' => 'Session Cache',

			'parameters' => [
				'cookie_name' => 'session',
			]
		],

		'array' => [
			'driver' => 'array',
			'label' => 'Array Cache',

			'parameters' => [
				'scope' => 'default',
			],
		],

//		'apcu' => [
//			'driver' => 'apcu',
//			'label' => 'APCu Cache',
//
//			'retention' => 3600,
//		],

//		'redis' => [
//			'driver' => 'redis',
//			'label' => 'Redis Store',
//
//			'retention' => 3600,
//
//			'parameters' => [
//				'host' => getenv('REDIS_HOST'),
//				'port' => getenv('REDIS_PORT'),
//				'database' => (int)getenv('REDIS_DB'),
//				'password' => getenv('REDIS_PASS'),
//			],
//		],

	],

];