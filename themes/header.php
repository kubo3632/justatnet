<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
global $lightning_theme_options;
$lightning_theme_options = get_option( 'lightning_theme_options' );
?>
<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T5WV5CX');</script>
<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5WV5CX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<a class="skip-link screen-reader-text" href="#main"><?php _e( 'Skip to the content', 'lightning' ); ?></a>
<a class="skip-link screen-reader-text" href="#vk-mobile-nav"><?php _e( 'Skip to the Navigation', 'lightning' ); ?></a>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
do_action( 'lightning_header_before' );
?>
<header class="<?php lightning_the_class_name( 'header' ); ?>">
	<?php do_action( 'lightning_header_prepend' ); ?>
	<div class="container siteHeadContainer">
		<div class="navbar-header">
			<?php
			if ( is_front_page() ) {
				$title_tag = 'h1';
			} else {
				$title_tag = 'p';
			}
			?>
			<<?php echo $title_tag; ?> class="<?php lightning_the_class_name( 'header_logo' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span><?php lightning_print_headlogo(); ?></span>
			</a>
			</<?php echo $title_tag; ?>>
			<?php do_action( 'lightning_header_logo_after' ); ?>
			<?php
			$gMenu = wp_nav_menu( array(
				'theme_location' => 'Header',
				'container'      => 'nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s ' . lightning_get_the_class_name( 'nav_menu_header' ) . '">%3$s</ul>',
				'fallback_cb'    => '',
				'echo'           => false,
				'walker'         => new description_walker(),
			) );
			?>
		</div>

		<?php
		if ( $gMenu ) {
			echo '<div id="gMenu_outer" class="gMenu_outer">';
			echo $gMenu;
			echo '</div>';
		}
		?>
	</div>
	<?php do_action( 'lightning_header_append' ); ?>
</header>
<?php do_action( 'lightning_header_after' ); ?>