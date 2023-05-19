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

		<form name="strategy" method="post" data-netlify="true" class="form" aria-label="Request a Session">

			<legend class="form__heading"><b>Free</b> Website Strategy Session</legend>

			<fieldset class="form__fieldset">

				<ol class="form__list">

					<li class="form__item">

						<label for="first-name" class="form__label">First Name</label>

						<input type="text" name="first-name" value="" id="first-name" class="form__input" />

					</li>

					<li class="form__item">

						<label for="last-name" class="form__label">Last Name</label>

						<input type="text" name="last-name" value="" id="last-name" class="form__input" />

					</li>

					<li class="form__item">

						<label for="website" class="form__label">Website</label>

						<input type="text" name="website" value="" id="website" class="form__input" />

					</li>

					<li class="form__item">

						<label for="email" class="form__label">Email *</label>

						<input type="email" name="email" value="" id="email" class="form__input" required />

					</li>

					<li class="form__item">

						<label for="phone-number" class="form__label">Phone Number</label>

						<input type="tel" name="phone-number" value="" id="phone-number" class="form__input" />

					</li>

				</ol>

				<div class="form__button">

					<button type="submit">Request Session</button>

				</fieldset>

			</fieldset>

		</form>

	</div>

</section>
