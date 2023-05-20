<section class="section section__together">

	<?php

		$together = get_field('together');

	?>

	<?php if ( $together ) : ?>

		<header class="section__header">

			<h2 class="section__heading"><?php echo $together['together_heading']; ?></h2>

		</header>

		<?php if ( have_rows( 'together' ) ) : ?>

			<?php while ( have_rows( 'together' ) ) : ?>

				<?php the_row(); ?>

				<?php if ( have_rows( 'together_steps' ) ) : ?>

					<ol class="together__list">

						<?php while ( have_rows( 'together_steps' ) ) : ?>

							<?php the_row(); ?>

							<li class="together__item">

								<?php

									$step_image = get_sub_field('step_image');

									// Attributes
									$url = $step_image['url'];
									$alt = $step_image['alt'];

									// Size Options
									$small = 'step-image-small'; // 424x139
									$large = 'step-image-large'; // 848x278

									// Sizes to Use
									$image_small = $step_image['sizes'][$small];
									$image_large = $step_image['sizes'][$large];

								?>

								<img src="<?php echo esc_url($image_small); ?>" srcset="<?php echo esc_url($image_small); ?>, <?php echo esc_url($image_large); ?> 2x" width="424" height="139" alt="<?php echo esc_attr($alt); ?>" loading="lazy" class="together__image" />

								<div class="together__detail">

									<h3 class="together__heading"><?php the_sub_field( 'step_subheading' ); ?></h3>

									<p class="together__description"><?php the_sub_field( 'step_description' ); ?></p>

								</div>

							</li>

						<?php endwhile; ?>

					</ol>

				<?php endif; ?>

			<?php endwhile; ?>

		<?php endif; ?>

	<?php endif; ?>

</section>
