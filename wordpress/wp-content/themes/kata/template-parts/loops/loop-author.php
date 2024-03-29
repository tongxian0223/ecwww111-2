<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @author  ClimaxThemes
 * @package Kata
 * @since   1.0.0
 */

// Don't load directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$posts_sort_thumb_pos		= get_theme_mod( 'kata_blog_posts_thumbnail_pos', 'left' );
$posts_sort					= get_theme_mod( 'kata_blog_posts_sortable_setting', ['kata_post_categories', 'kata_post_title', 'kata_post_post_excerpt'] );
$posts_meta_sort			= get_theme_mod( 'kata_blog_posts_metadata_sortable_setting', ['kata_post_author', 'kata_post_date'] );
$posts_excerpt_length		= get_theme_mod( 'kata_blog_posts_excerpt_length', 40 );
$sidebar					= get_theme_mod( 'kata_blog_sidebar_setting', 'right' );
$fist_post_excerpt_length	= get_theme_mod( 'kata_blog_first_posts_excerpt_length', 40 );

if ( is_active_sidebar( 'kata-left-sidebar' ) && is_active_sidebar( 'kata-right-sidebar' ) && $sidebar == 'both' ) {
	$kata_content_class = 'col-lg-6';
} elseif ( $sidebar != 'both' || $sidebar != 'none' ) {
	$kata_content_class = 'col-lg-9';
} elseif ( $sidebar == 'none' ) {
	$kata_content_class = 'col-md-12';
}
?>

<div class="container">
	<div class="row">
		<?php if ( is_active_sidebar( 'kata-left-sidebar' ) && ( $sidebar == 'left' || $sidebar == 'both' ) ) { ?>
			<div class="col-lg-3 kata-sidebar kata-left-sidebar" role="complementary">
				<?php dynamic_sidebar( 'kata-left-sidebar' ); ?>
			</div>
		<?php } ?>
		<div class="kata-default-loop-content <?php echo esc_attr( $kata_content_class ); ?>" role="main">
			<?php
			if ( have_posts() ) :
				$kata_post_count = 0;
				while ( have_posts() ) :
					the_post();
					$kata_post_count++;
					?>
					<div <?php post_class( 'kata-default-post kata-default-loop loop-two' ); ?>>
						<div class="kata-post-details">
							<div class="post-content-header">
								<div class="row">
									<?php
									if ( 'left' == $posts_sort_thumb_pos ) {
										if ( has_post_thumbnail() ) {
											?>
											<div class="col-md-4">
												<div class="kata-post-thumbnail">
													<?php Kata_Helpers::image_resize_output( get_post_thumbnail_id(), array( '300', '300' ) ); ?>
												</div>
											</div>
											<?php
										}
									}
									if ( ! empty( $posts_sort ) ) {
										$has_thumb = (has_post_thumbnail()) ? 'col-md-8' : 'col-md-12' ;
										?>
										<div class="<?php echo esc_attr( $has_thumb ); ?>">
											<div class="kata-post-content-wrap">
												<?php
													foreach ( $posts_sort as $item ) {
														switch ($item) {
															case 'kata_post_categories':
																?>
																<div class="kata-post-categories">
																	<?php Kata_Template_Tags::post_categories(); ?>
																</div>
																<?php
															break;
															case 'kata_post_title':
																	?>
																	<div class="kata-post-title-wrap">
																		<h2 class="kata-post-title-loop-two">
																			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a>
																		</h2>
																	</div>
																	<?php
															break;
															case 'kata_post_post_excerpt':
																?>
																<div class="kata-post-excerpt">
																	<p><?php echo esc_html( Kata_Template_Tags::excerpt( $posts_excerpt_length ) ); ?></p>
																	<a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Continue reading', 'kata' ) ?></a>
																</div>
																<?php
															break;
														}
													}
												?>
												<?php if ( 'left' == $posts_sort_thumb_pos && ! empty( $posts_meta_sort ) ) { ?>
													<div class="kata-post-default-meta">
														<?php
														foreach ( $posts_meta_sort as $meta ) {
															switch ($meta) {
																case 'kata_post_author':
																	?>
																	<div class="kata-post-author-wrap">
																		<?php Kata_Template_Tags::post_author( 'a', 'avatar', '42' ); ?>
																	</div>
																	<?php
																break;
																case 'kata_post_date':
																	?>
																	<div class="kata-post-date-wrap">
																		<?php Kata_Template_Tags::post_date(); ?>
																	</div>
																	<?php
																break;
															}
														}
														?>
													</div>
												<?php } ?>
											</div>
										</div>
									<?php }
									if ( 'right' == $posts_sort_thumb_pos ) {
										if ( has_post_thumbnail() ) {
											?>
											<div class="col-md-4">
												<div class="kata-post-thumbnail">
													<?php Kata_Helpers::image_resize_output( get_post_thumbnail_id(), array( '300', '300' ) ); ?>
												</div>
											</div>
											<?php
										}
									} ?>
								</div>
							</div>
						</div>
					</div>
					<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
			<div class="kata-pagination">
				<?php the_posts_pagination(); ?>
			</div>
		</div>
		<?php if ( is_active_sidebar( 'kata-right-sidebar' ) && ( $sidebar == 'right' || $sidebar == 'both' ) ) { ?>
			<div class="col-lg-3 kata-sidebar kata-right-sidebar" role="complementary">
				<?php dynamic_sidebar( 'kata-right-sidebar' ); ?>
			</div>
		<?php } ?>
	</div>
</div>
