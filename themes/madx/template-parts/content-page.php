<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('small-10 small-offset-1 large-8 large-offset-2'); ?>>
	<header>
		<div class="grid-x">
			<div class=" text-center">
				<h1 class="blue"><?php the_title(); ?></h1>
				<aside class="yellow-underline center"></aside>
				<p class="subhead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatibus reprehenderit veritatis, omnis ullam maiores eum excepturi aut iste, sunt quae. Quam cumque, ut, est possimus optio harum in commodi.</p>
			</div>
		</div>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>
