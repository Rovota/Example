<?php
/** @var ViewInterface $view */
/** @var array $page */

use Rovota\Framework\Facades\Registry;
use Rovota\Framework\Views\Interfaces\ViewInterface;
?>
<head>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<base href="<?= request()->targetHost() ?>">
	<title><?= $page['title'] ?> - <?= Registry::string('about.name') ?></title>
	<link rel="manifest" href="/manifest.json">

	<?php parse_objects($view->getMeta())?>

	<?php parse_objects($view->getLinks())?>

</head>

<!-- TODO: application/ld+json schema information -->