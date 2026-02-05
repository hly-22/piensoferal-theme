<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>

<footer id="colophon" class="bg-[#f5f6fa]">
	<!-- Footer Links -->
	<section class="py-12">
		<div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-20">
			<div>
				<h3 class="prose font-medium mb-5">Conócenos</h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-1',
						'menu_id'		=> 'footer-1-menu',
						'menu_class'	=>	'flex flex-col',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</div>
			<div>
				<h3 class="prose font-medium mb-5">Te ayudamos a resolver tus dudas</h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-2',
						'menu_id'		=> 'footer-1-menu',
						'menu_class'	=>	'flex flex-col',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</div>
			<div>
				<h3 class="prose font-medium">Contacto</h3>
				<?php wp_nav_menu(['theme_location' => 'footer-3']); ?>
				<p>Si tienes alguna duda o consulta, estaremos encantados de ayudarte.</p>
				<h4>Atención a Particulares:</h4>
				<p>Lunes a Jueves, 10h a 18h</p>
				<p>Viernes, 10h a 16.30h</p>
			</div>
		</div>
	</section>

	<!-- <?php if (is_active_sidebar('sidebar-1')) : ?>
		<aside role="complementary" aria-label="<?php esc_attr_e('Footer', '_tw'); ?>">
			<?php dynamic_sidebar('sidebar-1'); ?>
		</aside>
	<?php endif; ?> -->

	<!-- <?php if (has_nav_menu('menu-2')) : ?>
		<nav aria-label="<?php esc_attr_e('Footer Menu', '_tw'); ?>">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_class'     => 'footer-menu',
						'depth'          => 1,
					)
				);
			?>
		</nav>
	<?php endif; ?> -->

	<!-- <div>
		<?php
		$_tw_blog_info = get_bloginfo('name');
		if (! empty($_tw_blog_info)) :
		?>
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>,
		<?php
		endif;

		/* translators: 1: WordPress link, 2: WordPress. */
		printf(
			'<a href="%1$s">proudly powered by %2$s</a>.',
			esc_url(__('https://wordpress.org/', '_tw')),
			'WordPress'
		);
		?>
	</div> -->

</footer><!-- #colophon -->