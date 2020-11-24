<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package lunar
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="site__header">
				<h1 class="site__title"><?php esc_html_e( 'Oops! Cette page n&rsquo;existe pas !', 'onthemoon' ); ?></h1>
			</header><!-- .page-header -->

			<div class="site__content">
				<p><?php esc_html_e( 'Peut être que vous pouvez trouver ce que vous cherchez dans les articles récents.', 'onthemoon' ); ?></p>

					<?php
					the_widget( 'WP_Widget_Recent_Posts' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
