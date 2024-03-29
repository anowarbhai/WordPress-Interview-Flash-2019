<?php
/**
 * The template part for displaying video
 *
 * @package WordPress
 * @subpackage CIT Theme Starterr
 * @since CIT Theme Starterr 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-preview' ); ?>>
	<div class="featured-content">
		<div class="video-wrapper">
			<?php the_content( '', true );?>
		</div>
	</div><!--.featured-content-->

	<?php citthemestarter_entry_meta(); ?>

	<div class="entry-content">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php echo esc_html( get_the_content( '', false ) ); ?>
	</div><!--.entry-content-->
	<?php if ( ! is_singular() ) :?>
		<a href="<?php echo esc_url( get_permalink( get_the_ID() ) ) ?>" class="blue-button read-more"><?php echo esc_html__( 'Read More', 'cit' ) ?></a>
	<?php endif;?>
</article><!--.entry-preview-->
