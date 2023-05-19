<section class="section section__overview">

	<div class="inner-wrap overview__inner-wrap">

		<?php

			$hero = get_field('hero');

		?>

		<?php if ( $hero ) : ?>

			<header class="section__header">

				<h1 class="section__heading"><?php echo $hero[ 'hero_heading' ]; ?></h1>

				<div class="section__description">

					<?php echo $hero[ 'hero_description' ]; ?>

				</div>

			</header>

		<?php endif; ?>

		<?php

			$details = get_field('details');

		?>

		<?php if ( $details ) : ?>

			<div class="overview__details">

				<?php echo $details[ 'details_content' ]; ?>

			</div>

		<?php endif; ?>

	</div>

	<div class="overview__form">

		<?php gravity_form(
			1, // $id_or_title
			false, // $display_title
			true, // $display_description
			false, // $display_inactive
			'', // $field_values
			false, // $ajax
			0, // $tabindex
			true // $echo
		); ?>

	</div>

</section>
