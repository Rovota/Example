<?php

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

/**
 * @var ViewInterface $view
 * @var null|array<string, mixed> $page
 * @var null|array<string, mixed> $toast
 */

use Rovota\Embla\Components\Blocks\Toast;
use Rovota\Embla\Components\Navigation\NavTrigger;
use Rovota\Framework\Views\Interfaces\ViewInterface;

if (isset($page['slug'])) {
	echo NavTrigger::prefix('nav-')->target($page['slug']);
}

if (isset($page['tab'])) {
	echo NavTrigger::prefix('tab-')->target($page['tab']);
}

if (isset($toast)) {
   echo Toast::createFrom($toast);
}

parse_objects($view->getScripts());