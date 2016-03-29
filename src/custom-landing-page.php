<?php
/**
 * Template Name: Landing page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jj-australia
 */

get_header(); ?>

<style>
	body {
		background: #f6f6f6;
	}
</style>

	<div id="primary" class="content-area landing-page">
		<main id="main" class="site-main" role="main">

			<?php
				// vars for highlight tiles
				$tile_1_title = get_field('tile_1_title');
				$tile_1_text = get_field('tile_1_text');
				$tile_1_image = get_field('tile_1_image');
				$tile_2_title = get_field('tile_2_title');
				$tile_2_text = get_field('tile_2_text');
				$tile_2_image = get_field('tile_2_image');
				// var for brand images
				$brand_1_image = get_field('brand_1_image');
				$brand_2_image = get_field('brand_2_image');
				$brand_3_image = get_field('brand_3_image');
				$brand_4_image = get_field('brand_4_image');
			?>

			<section class="tiles">
				<div class="tile first-tile">
					<a href="">
						<img class="tile-image" src="<?php echo $tile_1_image['url']; ?>">
						<p class="tile-text"><?php echo $tile_1_text; ?></p>
						<h2 class="tile-title"><?php echo $tile_1_title; ?></h2>
					</a>
				</div>

				<div class="tile">
					<a href="">
						<img class="tile-image" src="<?php echo $tile_2_image['url']; ?>">
						<p class="tile-text"><?php echo $tile_2_text; ?></p>
						<h2 class="tile-title"><?php echo $tile_2_title; ?></h2>
					</a>
				</div>
			</section>

			<section class="brands">
				<div class="brands-headline">
					<h2><span>BRANDS</span></h2>
				</div>

				<div class="brands-images">
					<a href=""><img class="brand-image" src="<?php echo $brand_1_image['url']; ?>"></a>
					<a href=""><img class="brand-image mobile-align-right" src="<?php echo $brand_2_image['url']; ?>"></a>
					<a href=""><img class="brand-image" src="<?php echo $brand_3_image['url']; ?>"></a>
					<a href=""><img class="brand-image mobile-align-right" src="<?php echo $brand_4_image['url']; ?>"></a>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
