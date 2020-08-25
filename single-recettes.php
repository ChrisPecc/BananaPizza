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
		<div class='intro__margins'>
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
	</div>

	<figure class='illustration'>
		<?php $main_image = get_field('main_image'); ?>

		<img src='<?php echo $main_image['url']; ?>' title='<?php echo the_field('title'); ?>' class='illustration__image'/>
		
		<figcaption class='illustration__caption'>
			<?php echo $main_image['caption']; ?>
		</figcaption>
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
			<?php
				if (have_rows('instructions')):
					
					while (have_rows('instructions')) : the_row();
						$step = get_sub_field('step');
						$sub_image = get_sub_field('sec_image');
						the_content($step);
						echo $step;

						if ($sub_image):
							echo
								'<figure class=\'instructions__image-box\'>
									<img src=\'' . $sub_image['url'] . '\' title=\'' . $sub_image['title'] . '\' class=\'instructions__image\' />
									<figcaption class=\'instructions__caption\'>'
										. $sub_image['caption'] .
									'</figcaption>
								</figure>'
							;
						endif;
					endwhile;
				endif;
			?>
		</div>
	</section>

	<div class='social-networks'>
		<div class='social-networks__facebook'>
			<a href='' class='social-networks__link'><img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/facebook.svg' alt='Facebook' /></a>
		</div>
		<div class='social-networks__twitter'>
			<a href='' class='social-networks__link'><img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/twitter.svg' alt='Twitter' /></a>
		</div>
		<div class='social-networks__instagram'>
			<a href='' class='social-networks__link'><img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/instagram.svg' alt='Instagram' /></a>
		</div>
		<div class='social-networks__mail'>
			<a href='' class='social-networks__link'><img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/mail-2.svg' alt='Mail' /></a>
		</div>
	</div>

	<div class='clear'>
	</div>
</main>


<footer>
	<?php get_footer(); ?>
</footer>