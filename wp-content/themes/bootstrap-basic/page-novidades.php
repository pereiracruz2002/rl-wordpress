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
				<div class="col-md-11 col-md-offset-1">
					<?php the_breadcrumb(); ?>
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
								<h4 class="tit_internas">Novidades</h4>
									<div class="linha_tit_empresa"></div>
								<div class="row">
									<div class="txt_empresa">
									<?php the_content(); ?>
									</div>
								</div>
								<div class="row">
									<?php
								    global $wp_query;
								    $args = array_merge( array( 'post_type' => 'novidades' ) );
								    query_posts( $args );
								    $i = 0;
									  ?>
									  <?php while ( have_posts() ) : the_post();?>
									  <?php $banner = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
									      <!-- <div class="col-md-6 paddingTop10">
			                               <img src="<?php echo $banner[0];?>" class="img-responsive" alt="utilidade">
			                            </div> -->

			                           
										  <div class="col-sm-6 col-md-5 paddingTop10">
										  	<div class="row novidades">
										  		<div class="col-md-3">
													<div class="thumbnail">
														<img src="<?php echo $banner[0];?>" class="img-responsive" alt="utilidade">
													</div>
												</div>
												<div class="col-md-9">
													<div class="caption">
														<h3> <?php echo the_title();?></h3>
														<p> <?php echo get_the_excerpt();?></p>
														<p class="pull-right"><a href="<?php the_permalink();?>" class="btn btn_azulao" role="button">Saiba Mais</a></p>
													</div>
												</div>
											</div>
										  </div>
										  <div class="col-md-1"></div>
									
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