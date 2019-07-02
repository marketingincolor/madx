<?php if( have_rows('specialty_product_benefits') ): ?>
<div id="single-benefits" class="medium-12 cell" style="margin-bottom: 30px;">
	<h4 style="margin-bottom:20px;color:#FFF"><?php _e('Benefits','madx'); ?></h4>
	<div class="grid-x">
		<div class="small-12 large-12 large-offset-0 cell">
			<div class="grid-x grid-margin-x grid-margin-y">

			<?php while( have_rows('specialty_product_benefits') ): the_row(); 
				$title = get_sub_field('sspb_title');
				$text = get_sub_field('sspb_text');
				$icon = get_sub_field('sspb_icon');
				?>
				<div class="medium-4 cell text-center">
					<?php echo $icon; ?>
					<h5 class="white"><?php echo $title; ?></h5>
					<article class="white"><?php echo $text; ?></article>
				</div>
				<?php endwhile; ?>

			</div>
		</div>
	</div>
</div>
<?php endif; ?>