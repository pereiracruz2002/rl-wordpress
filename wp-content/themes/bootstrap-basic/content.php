<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1> -->

		<?php if ('post' == get_post_type()) { ?>
		<div class="entry-meta">
			<?php bootstrapBasicPostOn(); ?>
		</div><!-- .entry-meta -->
		<?php } //endif; ?>
	</header><!-- .entry-header -->

	<?php if (is_search()) { // Only display Excerpts for Search ?>
	<div class="entry-summary txt_desc_produtos">
		<?php the_excerpt(); ?>
		<div class="clearfix"></div>
	</div><!-- .entry-summary -->
	<?php } else { //*?>
	<div class="entry-content">
		<div class="row">
			<div class="col-md-5 col-xs-12 col-sm-12">
				<?php the_post_thumbnail('big', array('class' => 'img-responsive')); ?>
				<?php do_shortcode('[multiple_images]'); ?>
			</div>
			<div class="col-md-7 col-xs-12 col-sm-12 txt_desc_produtos">
				<div  class="row">
					<h4 class="tit_desc_produtos"><?php the_title(); ?></h4>
					<?php the_content(bootstrapBasicMoreLinkText()); ?>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row separa_coluna">
			<?php
				$categoria = get_the_terms( get_the_ID(), 'artigos_category');
	            $args = array('post_type' => 'artigos',
	            	'artigos_category'=>$categoria[0]->name,
	                'orderby' => 'post_date',
	                'order'=> 'DESC',
	                'numberposts'     => 4);
	            $myposts = get_posts( $args );

	            foreach( $myposts as $post ) :  setup_postdata($post);
	         ?>
				<div class="col-md-3 col-xs-6 col-sm-6">
					<h4 class="sutit_desc_produtos"><?php echo the_title();?></h4>
					<br>
					<?php the_post_thumbnail('thumbnail', array('class' => 'flutuar-img img-responsive')); ?>
					<a class="btn btn-primary" href="<?php the_permalink();?>">&gt;&gt; mais detalhes</a>
				</div>
			<?php endforeach;?>

		</div>

		<?php

		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?>
	</div><!-- .entry-content -->
	<?php } //endif; ?>

	<?php /*?>
	<footer class="entry-meta">
		<?php if ('post' == get_post_type()) { // Hide category and tag text for pages on Search ?>
		<div class="entry-meta-category-tag">
			<?php

				$categories_list = get_the_category_list(__(', ', 'bootstrap-basic'));
				if (!empty($categories_list)) {
			?>
			<span class="cat-links">
				<?php echo bootstrapBasicCategoriesList($categories_list); ?>
			</span>
			<?php } // End if categories ?>

			<?php

				$tags_list = get_the_tag_list('', __(', ', 'bootstrap-basic'));
				if ($tags_list) {
			?>
			<span class="tags-links">
				<?php echo bootstrapBasicTagsList($tags_list); ?>
			</span>
			<?php } // End if $tags_list ?>
		</div><!--.entry-meta-category-tag-->
		<?php } // End if 'post' == get_post_type() ?>

		<div class="entry-meta-comment-tools">
			<?php if (! post_password_required() && (comments_open() || '0' != get_comments_number())) { ?>
			<span class="comments-link"><?php bootstrapBasicCommentsPopupLink(); ?></span>
			<?php } //endif; ?>

			<?php bootstrapBasicEditPostLink(); ?>
		</div><!--.entry-meta-comment-tools-->
	</footer><!-- .entry-meta -->
	<?php */ ?>
</article><!-- #post-## -->
