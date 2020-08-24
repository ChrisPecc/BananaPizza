<?php
	/*
		Template name: Single-recipe
		Template Post Type: post
	*/
?>


<header>
	<?php get_header(); ?>
</header>


<main>
	<div class='intro'>
		<div class="intro__little-menu">
			<div class='intro__back'>
				<a href='<?php wp_redirect(''); ?>' class='intro__link'>Retour</a>
			</div>

			<div class='intro__infos'>
				<ul class='intro__list'>
					<li class='intro__date'>
						<?php the_field('date'); ?>
					</li>
					<li class='intro__category'>
						<figure class='intro__image'>
							<img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/cutelry.svg' />
						</figure>
						<?php the_field('category'); ?>
					</li>
				</ul>
			</div>
		</div>

		<h1 class='intro__main-title'>
			<?php the_field('title'); ?>
		</h1>

		<p class='intro__short-description'>
			<?php the_field('short_description'); ?>
		</p>
	</div>

	<figure class='illustration'>
		<img src='<?php the_field('main_image'); ?>' class='illustration__image'/>
	</figure>

	<section class='ingredients'>
		<h2 class='ingredients__title'>
			Ingredients
		</h2>

		<div class='ingredients__content'>
			<?php the_field('ingredients'); ?>
		</div>
	</section>

	<section class='instructions'>
		<h2 class='instructions__title'>
			Instructions
		</h2>

		<div class='instructions__content'>
			<?php $instructions = get_field('instructions'); ?>

			<ol class='instructions__list'>
				<?php
					foreach ($instructions as $instruction)
					{
						echo
							'<li class=\'instructions__item\'>' . $instruction['step'] . '</li>'
						;

						if (!empty($instruction['sec_image']))
						{
							echo
								'<figure class=\'instructions__image-box\'>
									<img src=\''.$instruction['sec_image'].'\' class=\'instructions__image\' />
								</figure>'
							;
						}
					}
				?>
			</ol>
		</div>
	</section>

	<div class='social-networks'>
		<div class='social-networks__facebook'>
			<a href=''><img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/facebook.svg' alt='Facebook' /></a>
		</div>
		<div class='social-networks__twitter'>
			<a href=''><img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/twitter.svg' alt='Twitter' /></a>
		</div>
		<div class='social-networks__instagram'>
			<a href=''><img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/instagram.svg' alt='Instagram' /></a>
		</div>
		<div class='social-network__mail'>
			<a href=''><img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/mail-2.svg' alt='Mail' /></a>
		</div>
	</div>
</main>


<footer>
	<?php get_footer(); ?>
</footer>