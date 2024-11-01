<?php /** @noinspection SpellCheckingInspection */

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

return [

	'default' => 'stack',

	// -----------------

	'channels' => [

		'stack' => [
			'driver' => 'stack',
			'label' => 'Stack',

			'channels' => ['stream'],
		],

		'stream' => [
			'driver' => 'stream',
			'label' => 'Local',

			'parameters' => [
				'stream' => sprintf('%s/%s/%s.log', getcwd(), 'storage/runtime', date('Y-m-d')),
				'level' => 'debug',
			],
		],
	],

];