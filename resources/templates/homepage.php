<?php
/**
 * @var AppearanceConfig $appearance
 */

use Library\Interface\Config\AppearanceConfig;

?>
<!DOCTYPE html>
<html lang="<?= language_iso2() ?>" dir="<?= language_direction() ?>">

<?= partial('head') ?>

<body class="<?= $appearance->toClassList() ?>">

<scroller>
	<view>

		<?= partial('header') ?>

		<page>

			<section>
				<container>
					<p>Hello World.</p>
				</container>
			</section>

		</page>

		<?= partial('footer') ?>

	</view>
</scroller>

<?= partial('scripts') ?>

</body>
</html>