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
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class='intro'>
		<div class='intro__margins'>
			<div class="intro__little-menu">
				<div class='intro__back'>
					<a href='<?php site_url(); ?>' class='intro__link'><img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/keyboard_backspace.svg' class='intro__image' />Retour</a>
				</div>

				<div class='intro__infos'>
					<ul class='intro__list'>
						<li class='intro__date'>
							<?php echo get_the_date(); ?>
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
				<?php the_title(); ?>
			</h1>

			<p class='intro__short-description'>
				<?php the_field('short_description'); ?>
			</p>
		</div>
	</div>

	<figure class='illustration'>
		<?php $main_image = get_field('main_image'); ?>

		<img src='<?php echo $main_image['url']; ?>' title='<?php the_field('title'); ?>' class='illustration__image'/>
		
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
			<?php if (have_rows('instructions')): ?>
				<ol class='instructions__list'>
					<?php
						while (have_rows('instructions')) : the_row();
							$step = get_sub_field('step');
							$sub_image = get_sub_field('sec_image');
							the_field($step);
							
							echo '<li class=\'instructions__item\'>' . $step . '</li>';
							
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
					?>
				</ol>
			<?php endif; ?>
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
	<?php endwhile; endif; ?>

	<section class='latest-updates'>
		<h2 class='latest-updates__title'>
			<span class='latest-updates__title-part-1'>Latest updated</span>
			<span class='latest-updates__title-part-2'>RECIPES BLOG</span>
		</h2>

		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => array('recettes'), 
				'posts_per_page' => 4, 
				'orderby' => 'date',
				'order' => 'DESC',
				'paged' => $paged,
			);

			$query = new WP_Query($args);

			if ($query -> have_posts()): 
				while ($query -> have_posts()) : $query -> the_post();
					$main_image = get_field('main_image');
					$date = get_the_date('F j, Y');
		?>
					<div class='latest-updates__content'>
						<figure class='latest-updates__image-box'>
							<img src='<?php echo $main_image['url'] ?>' class='latest-updates__image' />
						</figure>

						<div class='latest-updates__date'>
							<img src='<?php bloginfo('url'); ?>/wp-content/themes/BananaPizza/assets/svg/query_builder.svg' class='latest-updates__clock'/>
							<?php echo $date; ?>
						</div>

						<h2 class='latest-updates__title'>
							<?php the_field('title'); ?>
						</h2>

						<p class='latest-updates__short-description'>
							<?php the_field('short_description'); ?>
						</p>

						<div class='latest-updates__read-more'>
							<span class='latest-updates__dashes'>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
							</span>
							<a href='<?php the_permalink(); ?>' class='latest-updates__link'>READ MORE</a>
						</div>
					</div>
				<?php endwhile;
			endif;
				?>
	</section>
</main>


<footer>
	<?php get_footer(); ?>
</footer>