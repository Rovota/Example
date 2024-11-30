<?php
/**
 * @var AppearanceConfig $appearance
 */

use Library\Interface\Config\AppearanceConfig;
use Rovota\Embla\Components\Blocks\Notice;

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
					<?= Notice::simple('The interface of this demo has been built using the Embla UI library, which provides styling and components to get started with.') ?>
				</container>
			</section>

			<section>
				<container>
					<p><b><?= __('You will find a quick overview of features below.') ?></b></p>
					<hr>
					<grid class="grid-3">
						<card>
							<heading class="compact">
								<span><?= __('Views') ?></span>
							</heading>
							<content>
								<p>Build views using templates and populate them with data dynamically. Attach styles, scripts and meta information as needed.</p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Caching') ?></span>
							</heading>
							<content>
								<p>Store essential, and context relevant data to various supported caching solutions like Redis and APCu. Supports time-limited and persistent caching.</p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Conversions') ?></span>
							</heading>
							<content>
								<p>Transform Markdown, UBB and custom implementations into usable HTML. Additionally, you can convert data between a wide range of units.</p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Query Builder') ?></span>
							</heading>
							<content>
								<p>Create both simple and complex queries using the built-in builder, allowing you to interact with various databases with ease. Supports nesting, automatic type casting and model retrieval.</p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Facades') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('HTTP Client') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Services') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Localization') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Logging') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Routing') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Encryption') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('2FA & OTP') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Data Structures') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Moment') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Formatting') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('URL Builder') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Throttling') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Authentication') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Validation') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
						<card>
							<heading class="compact">
								<span><?= __('Email') ?></span>
							</heading>
							<content>
								<p></p>
							</content>
						</card>
					</grid>
				</container>
			</section>

		</page>

		<?= partial('footer') ?>

	</view>
</scroller>

<?= partial('scripts') ?>

</body>
</html>