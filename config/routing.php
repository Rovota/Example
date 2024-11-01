<?php /** @noinspection SpellCheckingInspection */

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

use Rovota\Framework\Http\Enums\StatusCode;
use Rovota\Framework\Support\Path;

return [

	'fallback' => StatusCode::NotFound,

	// -----------------

	'sources' => [

		Path::toProjectFile('routes/default.php'),

	],

];