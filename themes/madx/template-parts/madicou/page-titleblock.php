<section class="titleblock-top">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-8 large-offset-0 cell">
				<h1 class="blue"><?php the_title(); ?></h1>
				<aside class="yellow-underline left"></aside>
				<p class="subhead"><?php the_content(); ?></p>

				<?php if(is_page('ask-a-question')) { ?>

					<jot-form form-id="82824082186157"></jot-form>

				<?php } ?>
				
			</div>
		</div>
	</div>
</section>