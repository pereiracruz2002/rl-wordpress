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
				<div class="col-md-12">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
			
	</header><!-- .entry-header --> 
	<div class="container">
		<div class="col-md-12 content-area" id="main-column">
			<main id="main" class="site-main" role="main">
				<?php 
				while (have_posts()) {
					the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<div class="row">
							<div class="col-md-5">
								<?php the_post_thumbnail('big', array('class' => '')); ?>
							</div>
							<div class="col-md-7">
								<div class="row">
									<?php the_content(); ?>
								</div>
								<div class="row">
									   	<?php
					    global $wp_query;
					    $args = array_merge( $wp_query->query_vars, array( 'post_type' => 'banners' ) );
					    query_posts( $args );
					    $i = 0;
						  ?>
						  <?php while ( have_posts() ) : the_post();?>
						  <?php $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
						      <div class="col-md-4">
                               <img src="<?php echo $banner[0];?>" class="img-responsive" alt="utilidade">
                            </div>
						    <?php
						    $i++;
						    endwhile;
						    // Reset Query
						    wp_reset_query();
						  ?>
								</div>
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
<?php get_footer(); ?> 