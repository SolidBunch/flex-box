<?php
	/**
	 * Posts loop template
	 */
	get_header();
?>
	
	<!--
		Start layout
	-->
	<?php do_action( 'flexbox_layout_start'); ?>

		<?php do_action( 'flexbox_before_loop'); ?>
		
			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

				<?php 
					$post_type = get_post_type();
					$tpl = in_array( $post_type, [ 'post', 'page']) ? 'post' : $post_type;
				?>

				<?php get_template_part( 'template-parts/loop/' . $tpl, get_post_format() ); ?>

			<?php endwhile; else: ?>

				<?php get_template_part( 'template-parts/loop/no-posts', get_post_format() ); ?>

			<?php endif; ?>

		<?php do_action( 'flexbox_after_loop'); ?>

		<!--
			Sidebar
		-->
		<?php get_sidebar(); ?>

	<!--
		End layout
	-->
	<?php do_action( 'flexbox_layout_end'); ?>

<?php get_footer();