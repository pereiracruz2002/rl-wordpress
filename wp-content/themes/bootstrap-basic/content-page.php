<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<div class="row">
			<div class="col-md-5">
				<?php the_post_thumbnail('big', array('class' => '')); ?>
			</div>
			<div class="col-md-7">
				<div class="row ">
					<?php the_content(); ?>
				</div>
		<div class="clearfix"></div>
		<?php
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?>
	</div><!-- .entry-content -->
	<?php /*
	<footer class="entry-meta">
		<?php bootstrapBasicEditPostLink(); ?> 
	</footer> */?>
</article><!-- #post-## -->