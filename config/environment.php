<?php /** @noinspection SpellCheckingInspection */

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

use Library\Interface\InterfaceManager;
use Rovota\Embla\Embla;
use Rovota\Embla\Partials\PartialManager;
use Rovota\Embla\Tabs\TabsManager;

return [

	'cookie_domain' => COOKIE_DOMAIN,

	// -----------------

	'services' => [
		'embla' => Embla::class,
		'embla-partials' => PartialManager::class,
		'embla-tabs' => TabsManager::class,
		'interface' => InterfaceManager::class,
	],

];