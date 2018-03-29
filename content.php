<?php
/**
 * The default template for displaying content
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>
	<div class="fadein-wrap fadethis">

	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required() && is_sticky() ) : ?>
		<div class="entry-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div><!-- end .entry-thumbnail -->
	<?php else : ?>
		<div class="entry-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('neubau-medium'); ?></a></div><!-- end .entry-thumbnail -->
	<?php endif; ?>

	</div><!-- .fadein-wrap -->
</article><!-- end post -<?php the_ID(); ?> -->
