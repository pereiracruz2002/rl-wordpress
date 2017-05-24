<?php
/**
 * Template for displaying pages
 *
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php //get_sidebar('left'); ?>
				<header class="entry-header fx_azul_tit">
					<div class="container">
						<div class="row">
							<div class="col-md-11 col-md-offset-1 col-xs-12 col-sm-12">
								<?php the_breadcrumb(); ?>
							</div>
						</div>
					</div>
				</header><!-- .entry-header -->
				<div class="container">
					<div class="col-md-12 col-xs-12 col-sm-12 content-area" id="main-column">
						<main id="main" class="site-main" role="main">
							<?php
							while (have_posts()) {
								the_post();
							?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


								<div class="entry-content">
									<div class="row">

										<div class="col-md-10 col-offset-md-2  col-sm-12 col-xs-12">
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
							<?php
				} //endwhile;
				?>
			</main>
		</div>
</div>
<?php //get_sidebar('right'); ?>
<script>
jQuery( document ).ready(function() {
   jQuery('.btn-add').click(
   	function(){ jQuery(this).parent().next().show() });
});

</script>

<script>

jQuery( document ).ready(function() {
   jQuery('.btn-add').click(function(){
   		jQuery(this).parent().next().show();
   	});



   jQuery('.btn_remove').click(function(){
   		jQuery(this).parent().hide();

   	});
});

</script>

<?php get_footer(); ?>
