<?php

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

namespace Library\Interface\Config;

use Rovota\Embla\Utilities\Colors\Accent;
use Rovota\Embla\Utilities\Colors\Theme;
use Rovota\Framework\Support\Arr;
use Rovota\Framework\Support\Config;
use Rovota\Framework\Support\Str;

/**
 * @property-read string $theme
 * @property-read string $accent
 */
class AppearanceConfig extends Config
{

	protected function getTheme(): string
	{
		return Str::prepend($this->enum('theme', Theme::class, Theme::Automatic)->value, 'theme-');
	}

	protected function getAccent(): string
	{
		return Str::prepend($this->enum('accent', Accent::class, Accent::Azure)->value, 'accent-');
	}

	// -----------------

	public function toClassList(): string
	{
		return Arr::toClassList([$this->theme, $this->accent]);
	}

}