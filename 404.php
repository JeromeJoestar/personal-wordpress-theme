<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Portfolio_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="error-404 not-found">
				<header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found. We\'ll send you back to the home page :)', 'portfolio_theme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					

				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
<script>
    setTimeout(function(){window.location = 'http://www.mark-exe.com/';}, 5000);
</script>
<?php
get_footer();
