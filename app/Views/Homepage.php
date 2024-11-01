<?php

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

namespace App\Views;

use App\Shared\Views\WebView;

class Homepage extends WebView
{

	protected string|null $template = 'homepage';

	// -----------------

	protected function configuration(): void
	{
		$this->withTitle('Home');
	}

}