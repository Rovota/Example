<?php

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

namespace App\Controllers;

use App\Views\Homepage;
use Rovota\Framework\Http\Controller;

class HomeController extends Controller
{

	public function index(): mixed
	{
		return Homepage::make();
	}

}