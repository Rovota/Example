<?php

/**
 * @copyright   Léandro Tijink
 * @license     MIT
 */

namespace App\Shared\Views\Traits;

use Rovota\Embla\Facades\Partial;
use Rovota\Framework\Support\Str;

trait WebFunctions
{

	public function withSlug(string $value): static
	{
		$this->with('page.slug', trim($value));

		Partial::updateVariable('*', 'page', [
			'slug' => $value,
		]);

		return $this;
	}

	public function withTab(string $value): static
	{
		$this->with('page.tab', trim($value));

		Partial::updateVariable('*', 'page', [
			'tab' => $value,
		]);

		return $this;
	}

	// -----------------

	public function withTitle(string $title, array|object $data = []): static
	{
		$title = Str::translate(trim($title), $data);

		$this->with('page.title', $title);
		$this->withMeta('og:title', ['name' => 'og:title', 'content' => $title]);

		Partial::updateVariable('*', 'page', [
			'title' => $title,
		]);

		return $this;
	}

	public function withDescription(string $description): static
	{
		$description = Str::translate(trim($description));

		$this->with('page.description', $description);
		$this->withMeta('description', ['name' => 'description', 'content' => $description]);
		$this->withMeta('og:description', ['name' => 'og:description', 'content' => Str::translate($description)]);

		Partial::updateVariable('*', 'page', [
			'description' => $description,
		]);

		return $this;
	}

	// -----------------

	public function withKeywords(array $keywords): static
	{
		$keywords = implode(',', $keywords);

		$this->with('page.keywords', $keywords);
		$this->withMeta('keywords', ['name' => 'keywords', 'content' => $keywords]);

		Partial::updateVariable('*', 'page', [
			'keywords' => $keywords,
		]);

		return $this;
	}

	public function withAuthor(string $author): static
	{
		$this->with('page.author', $author);
		$this->withMeta('author', ['name' => 'author', 'content' => $author], true);

		Partial::updateVariable('*', 'page', [
			'author' => $author,
		]);

		return $this;
	}

}