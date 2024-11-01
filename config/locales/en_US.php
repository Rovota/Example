<?php /** @noinspection SpellCheckingInspection */

use Rovota\Framework\Support\Path;

return array_replace_recursive(require Path::toSourceFile('Localization/locales/base.php'), [

	'about' => [
		'label' => [
			'default' => 'English (US)',
			'native' => 'English (US)',
		],

		'system' => 'imperial',
	],

]);