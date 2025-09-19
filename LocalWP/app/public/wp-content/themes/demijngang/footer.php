<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bg-primary" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-copyright">
						<p><?php $year = date('Y'); echo "© Copyright $year De MijnGang" ?></p>
						<p>ALLE RECHTEN VOORBEHOUDEN</p>
					</div><!-- .site-copyright -->

					<div class="site-social">
						<a href="mailto:demijngang@outlook.com"><i class="fa fa-at" aria-hidden="true"></i></a>
						<a href="https://www.facebook.com/demijngang/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href="https://web.whatsapp.com/send?phone=458514900"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
					</div><!-- .site-social -->

					<div class="site-legal">
						<a href="privacy">Privacyverklaring</a>
						<a href="terms-of-service">Voorwaarden</a>
					</div><!-- .site-legal -->

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

