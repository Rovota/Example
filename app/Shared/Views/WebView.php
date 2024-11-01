<?php

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

namespace App\Shared\Views;

use App\Shared\Views\Traits\WebFunctions;
use Rovota\Framework\Views\DefaultView;
use Rovota\Framework\Views\ViewConfig;

class WebView extends DefaultView
{
	use WebFunctions;

	public function __construct(string|null $template, ViewConfig $config)
	{
		parent::__construct($template, $config);

		$this->withMeta('format-detection', ['name' => 'format-detection', 'content' => 'telephone=no']);
		$this->withMeta('viewport', ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=1']);

		$this->withMeta('color-scheme', ['name' => 'color-scheme', 'content' => 'light dark']);
		$this->withMeta('theme-color-light', ['name' => 'theme-color', 'content' => '#656B54', 'media' => '(prefers-color-scheme: light)']);
		$this->withMeta('theme-color-dark', ['name' => 'theme-color', 'content' => '#191919', 'media' => '(prefers-color-scheme: dark)']);
	}
}