<<<<<<< HEAD
<footer class="main-footer">
        <div class="container">
            <div class="f_left">
                <p>&copy; 2018 - Advanced WP Theme</p>
            </div>
            <div class="f_right">
                <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Services</a></li>
                </ul>
            </div>
        </div>
</footer>
<?php wp_footer(); ?> 
=======
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Assignment2
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'assignment2' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'assignment2' ), 'weihao hello' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'assignment2' ), 'assignment2', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

>>>>>>> 19f271e265b6e17e0809a91418574c435e8de638
</body>
</html>
