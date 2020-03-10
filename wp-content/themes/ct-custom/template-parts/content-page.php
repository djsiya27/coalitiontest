<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CT_Custom
 */

$addressTitle = esc_attr( get_option('address_title') );
$street = esc_attr( get_option('street') );
$state = esc_attr( get_option('state') );
$phoneNumber = esc_attr( get_option('phone_number') );
$faxNumber = esc_attr( get_option('fax_number') );

$facebook = esc_attr( get_option('facebook') );
$twitter = esc_attr( get_option('twitter') );
$linkedin = esc_attr( get_option('linkedin') );
$pinterest = esc_attr( get_option('pinterest') );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php ct_custom_post_thumbnail(); ?>

	<div class="entry-content">

		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ct-custom' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	
	
<div class="container" style="padding-left:0px; padding-right:0px;">
  <div class="row">
    <div class="col-sm-6">
	<h2 style="color:#ff6200; font-family:ubuntu;">Contact Us</h2>
      <div style='border-bottom:8px solid #525252;'></div>
	  <div class="contact-form"><?php echo do_shortcode('[contact-form-7 id="16"]'); ?></div>
	  
      
    </div>
    <div class="col-sm-6 other">
	<h2 style="color:#ff6200; font-family:ubuntu;">Reach Us</h2>
		<div style='border-bottom:8px solid #525252;'></div>
		   
	<span class="title" style="display:block; margin-top:20px;"><?php print $addressTitle ?></span>
	<span class="address-1" style="display:block; margin-top:12px;"><?php print $street ?></span>
	<span class="address-2" style="display:block; "><?php print $state ?></span>
	<span class="telephone" style="display:block; margin-top:20px;">Phone: <?php print $phoneNumber ?></span>
	<span class="fax" style="display:block;">Fax: <?php print $faxNumber ?></span>

	<?php if( !empty( $facebook ) ): ?>
		<i class="fa fa-facebook"></i>
	<?php endif;
	 if( !empty( $twitter ) ): ?>
		<i class="fa fa-twitter"></i>
	<?php endif;
	if( !empty( $linkedin ) ): ?>
		<i class="fa fa-linkedin"></i>
	<?php endif;
	 if( !empty( $pinterest ) ): ?>
		<i class="fa fa-pinterest"></i>
	<?php endif; ?>

    </div>
  </div>
</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'ct-custom' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
