<?php
/**
 * Template Name: Article
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

	<div id="primary" class="content-area article-page">
		<main id="main" class="site-main" role="main">

			<?php
				// Set up vars for selections in backend
				$image = get_field('image');
				$article_title = get_field('article_title');
				$article_subtitle = get_field('article_subtitle');
			?>

			<style type="text/css">
				.site-cover { background-image: url('<?php echo $image['url']; ?>'); }
			</style>

			<h2 class="article-title"><?php echo $article_title; ?></h2>
			<h3 class="article-subtitle"><?php echo $article_subtitle; ?></h3>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
