<?php

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

namespace Library\Interface\Middleware;

use Library\Interface\Config\AppearanceConfig;
use Rovota\Embla\Utilities\Colors\Accent;
use Rovota\Embla\Utilities\Colors\Theme;
use Rovota\Framework\Facades\Registry;
use Rovota\Framework\Facades\Response;
use Rovota\Framework\Facades\View;
use Rovota\Framework\Kernel\Framework;

class ConfiguresAppearance
{

	public function handle(): void
	{
		$appearance = new AppearanceConfig([
			'theme' => Registry::enum('appearance.theme', Theme::class),
			'accent' => Registry::enum('appearance.accent', Accent::class),
		]);

		// -----------------

		if (Framework::environment()->isLocal()) {
			Response::withoutHeaders(['Access-Control-Allow-Origin', 'Content-Security-Policy']);
		}

		// -----------------

		View::attachVariable('*', 'appearance', $appearance);
	}

}