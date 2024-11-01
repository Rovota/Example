<?php

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

namespace Library\Interface;

use Library\Interface\Middleware\ConfiguresAppearance;
use Rovota\Framework\Facades\Middleware;
use Rovota\Framework\Facades\View;
use Rovota\Framework\Kernel\ServiceProvider;

final class InterfaceManager extends ServiceProvider
{

	const string ASSET_FOLDER = '/resources/assets';

	// -----------------

	public function __construct()
	{
		Middleware::register('configures_appearance', ConfiguresAppearance::class, true);

		$this->attachAssets();
	}

	// -----------------

	protected function attachAssets(): void
	{
		// JavaScript
		View::attachScript('*', 'app', [
			'source' => self::ASSET_FOLDER . '/scripts/app.js',
		]);

		// CSS
		View::attachLink('*', 'override', [
			'style' => self::ASSET_FOLDER . '/styles/override.css',
		]);
		View::attachLink('*', 'app', [
			'style' => self::ASSET_FOLDER . '/styles/app.css',
		]);
	}

}