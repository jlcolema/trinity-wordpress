<section class="section section__trusted">

	<?php

		$trusted = get_field('trusted');

	?>

	<?php if ( $trusted ) : ?>

		<header class="section__header">

			<h3 class="section__heading"><?php echo $trusted['trusted_heading']; ?></h3>

		</header>

		<?php

			$trusted_companies = $trusted['trusted_companies'];

		?>

		<?php if ( $trusted_companies ) : ?>

			<div class="carousel__container">

				<div class="glide hero">

					<div class="glide__track" data-glide-el="track">

						<ul class="trusted__list glide__slides">

							<?php foreach( $trusted_companies as $post ) : ?>

								<?php setup_postdata( $post ); ?>

								<?php

									$company_logo = get_field('company_logo');

									// Attributes
									$url = $company_logo['url'];
									$alt = $company_logo['alt'];

									// Size Options
									$small = 'company-logo-small'; // 186x97
									$large = 'company-logo-large'; // 372x914

									// Sizes to Use
									$logo_small = $company_logo['sizes'][$small];
									$logo_large = $company_logo['sizes'][$large];

								?>

								<li class="trusted__item glide__slide">

									<img src="<?php echo esc_url($logo_small); ?>" srcset="<?php echo esc_url($logo_small); ?>, <?php echo esc_url($logo_large); ?> 2x" width="186" height="97" alt="<?php the_title(); ?>" loading="lazy" class="trusted__logo" />

								</li>

							<?php endforeach; ?>

						</ul>

					</div>

					<div class="glide__arrows" data-glide-el="controls">

						<button class="glide__arrow glide__arrow--prev" data-glide-dir="<">

							<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.63 45.02">
								<polygon points="22.51 0 24.63 2.12 4.24 22.51 24.63 42.9 22.51 45.02 0 22.51 22.51 0" style="fill: var(--color-theme-light-blue)" />
							</svg>

							<span class="label visually-hidden">Previous</span>

						</button>

						<button class="glide__arrow glide__arrow--next" data-glide-dir=">">

							<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.63 45.02">
								<polygon points="2.12 45.02 0 42.9 20.39 22.51 0 2.12 2.12 0 24.63 22.51 2.12 45.02" style="fill: var(--color-theme-light-blue)" />
							</svg>

							<span class="label visually-hidden">Next</span>

						</button>

					</div>

					<div class="glide__bullets" data-glide-el="controls[nav]">
						<button class="glide__bullet" data-glide-dir="=0">
							<span class="visually-hidden">1</span>
						</button>
						<button class="glide__bullet" data-glide-dir="=1">
							<span class="visually-hidden">2</span>
						</button>
						<button class="glide__bullet" data-glide-dir="=2">
							<span class="visually-hidden">3</span>
						</button>
						<button class="glide__bullet" data-glide-dir="=3">
							<span class="visually-hidden">4</span>
						</button>
						<button class="glide__bullet" data-glide-dir="=4">
							<span class="visually-hidden">5</span>
						</button>
						<button class="glide__bullet" data-glide-dir="=5">
							<span class="visually-hidden">6</span>
						</button>
						<button class="glide__bullet" data-glide-dir="=6">
							<span class="visually-hidden">7</span>
						</button>
						<button class="glide__bullet" data-glide-dir="=7">
							<span class="visually-hidden">8</span>
						</button>
					</div>

				</div>

			</div>

			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	<?php endif; ?>

</section>
