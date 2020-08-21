<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			<?php bloginfo('name')?> - <?php bloginfo('description');?>
		</title>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
		<?php wp_head(); ?>
	</head>
	
	<body>
		<header>
			<h1>
				DEV RESTAURANT
			</h1>
			
			<nav>
				<?php wp_nav_menu(); ?>
			</nav>
		</header>